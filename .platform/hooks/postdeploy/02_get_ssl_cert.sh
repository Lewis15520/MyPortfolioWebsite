#!/bin/bash
echo "Getting SSL Certificate..."
sudo certbot -n -d lewishayter.co.uk --nginx --agree-tos --email lewis@lewishayter.co.uk
echo "SSL Certificate Done!"

