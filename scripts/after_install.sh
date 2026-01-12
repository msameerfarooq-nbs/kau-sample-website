#!/bin/bash
set -e

echo "[AfterInstall] Setting permissions..."

chown -R www-data:www-data /var/www/html || true
chmod -R 755 /var/www/html

echo "[AfterInstall] Completed"
