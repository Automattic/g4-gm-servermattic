#!/bin/bash
apt-get install zip
unzip /root/migrations/wordpress/latest.zip
mv wordpress /var/www
chown nobody:nogroup /var/www
systemctl restart nginx
