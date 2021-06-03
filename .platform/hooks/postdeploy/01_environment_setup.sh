#!/bin/bash
echo "Starting environment copy"
cd /var/www/html/
cp .env.prod .env
echo "Finished environment copy"
