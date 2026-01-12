#!/bin/bash
set -e

echo "[ValidateService] Checking application health..."

HTTP_STATUS=$(curl -o /dev/null -s -w "%{http_code}" http://localhost)

if [ "$HTTP_STATUS" -ne 200 ]; then
  echo "Health check failed with status $HTTP_STATUS"
  exit 1
fi

echo "[ValidateService] Application is healthy"
