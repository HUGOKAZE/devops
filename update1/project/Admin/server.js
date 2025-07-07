const express = require('express');
const http = require('http');
const { Server } = require('socket.io');
const cors = require('cors');

const app = express();
app.use(cors());
const server = http.createServer(app);

const io = new Server(server, {
  cors: {
    origin: "http://localhost",
    methods: ["GET", "POST"]
  }
});

const users = {};

io.on('connection', (socket) => {
  console.log('Nouvelle connexion:', socket.id);

  socket.on('register', (userId) => {
    users[userId] = socket.id;
    console.log(`Utilisateur ${userId} enregistré`);
  });

  socket.on('offer', (data) => {
    const targetSocket = users[data.to];
    if (targetSocket) {
      io.to(targetSocket).emit('offer', data);
    }
  });

  socket.on('answer', (data) => {
    const targetSocket = users[data.to];
    if (targetSocket) {
      io.to(targetSocket).emit('answer', data);
    }
  });

  socket.on('disconnect', () => {
    console.log('Déconnexion:', socket.id);
  });
});

server.listen(3000, () => {
  console.log('Serveur sur http://localhost:3000');
});