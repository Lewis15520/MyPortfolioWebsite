#!/bin/bash
echo "Getting SSL Certificate..."
sudo certbot -n -d lewishayter.co.uk --nginx --agree-tos --email lohayter@googlemail.com
echo "SSL Certificate Done!"

