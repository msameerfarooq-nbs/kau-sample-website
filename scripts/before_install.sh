#!/bin/bash
set -e

echo "Ensuring scripts are executable..."
chmod +x /var/www/html/scripts/*.sh || true

echo "[BeforeInstall] Running..."

# # Stop Apache if running (safe if not installed)
# systemctl stop apache2 || true
# systemctl stop httpd || true

echo "[BeforeInstall] Completed"
