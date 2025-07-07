<?php
session_start();
$candidate_id = $_SESSION["user_id"]; // ID du candidat
$image = $_SESSION['image'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appel Vidéo - Candidat</title>
    <script src="https://cdn.socket.io/4.5.4/socket.io.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-peer@9.11.1/simplepeer.min.js"></script>
    <style>
        #video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
        }
        #remote-video {
            width: 100%;
            height: 100%;
        }
        #local-video {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 200px;
            border: 2px solid white;
        }
        #call-status {
            position: absolute;
            top: 20px;
            left: 20px;
            color: white;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div id="video-container">
        <div id="call-status">En attente d'appel...</div>
        <video id="remote-video" autoplay></video>
        <video id="local-video" autoplay muted></video>
    </div>

    <script>
        // Initialisation
        const socket = io('http://localhost:3000');
        let peer;
        let localStream;

        // 1. Enregistrement du candidat
        socket.emit('register', '<?php echo $candidate_id; ?>');
        document.getElementById('call-status').textContent = "Prêt à recevoir un appel";

        // 2. Recevoir une offre d'appel
        socket.on('offer', async (data) => {
            document.getElementById('call-status').textContent = "Appel entrant...";
            
            try {
                // Obtenir le flux média local
                localStream = await navigator.mediaDevices.getUserMedia({ 
                    video: true, 
                    audio: true 
                });
                
                // Afficher la caméra locale
                document.getElementById('local-video').srcObject = localStream;

                // Créer la connexion Peer
                peer = new SimplePeer({
                    initiator: false,
                    stream: localStream,
                    trickle: false,
                    config: {
                        iceServers: [
                            { urls: 'stun:stun.l.google.com:19302' }
                        ]
                    }
                });

                // Gérer les signaux
                peer.on('signal', answer => {
                    socket.emit('answer', {
                        to: data.from,
                        from: '<?php echo $candidate_id; ?>',
                        answer: answer
                    });
                });

                // Recevoir le flux distant
                peer.on('stream', stream => {
                    document.getElementById('remote-video').srcObject = stream;
                    document.getElementById('call-status').textContent = "Appel en cours";
                });

                // Traiter l'offre reçue
                peer.signal(data.offer);

                // Gestion des erreurs
                peer.on('error', err => {
                    console.error('Erreur Peer:', err);
                    endCall();
                });

                peer.on('close', endCall);

            } catch (err) {
                console.error('Erreur:', err);
                endCall();
                alert("Erreur lors de la connexion: " + err.message);
            }
        });

        // Fonction pour terminer l'appel
        function endCall() {
            if (peer) {
                peer.destroy();
                peer = null;
            }
            if (localStream) {
                localStream.getTracks().forEach(track => track.stop());
                localStream = null;
            }
            document.getElementById('call-status').textContent = "Appel terminé";
            setTimeout(() => {
                document.getElementById('remote-video').srcObject = null;
                document.getElementById('local-video').srcObject = null;
            }, 1000);
        }

        // Gestion de la fermeture de la page
        window.addEventListener('beforeunload', endCall);
    </script>
</body>
</html>