#!/bin/bash
apt-get install zip
unzip /root/migrations/wp-web/latest.zip
mv wordpress /var/www
chown nobody:nogroup /var/www
systemctl restart nginx
