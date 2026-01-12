#!/bin/bash
set -e

echo "[ApplicationStart] Starting web server..."

systemctl start apache2 || systemctl start httpd

echo "[ApplicationStart] Server started"
