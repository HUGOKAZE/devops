#!/bin/bash
set -e

echo "[+] Déploiement distant automatique..."

cd "$(dirname "$0")/ansible"
ansible-playbook -i inventory.ini playbook.yml

echo "[✓] Déploiement terminé avec succès."
