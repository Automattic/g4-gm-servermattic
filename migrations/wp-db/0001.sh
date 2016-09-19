#!/bin/bash
if hostname | grep -q db1; then 
	DB=0; 
else 
	DB=1
fi

ln -sf /etc/mysql-initscripts/mysql-5.6 /etc/init.d/mysql1-${DB}
ln -sf /usr/local/mysql-latest /usr/local/mysql
ln -sf /root/mysql/mysql1-${DB}.conf /etc/mysql/mysql1-${DB}.cnf
PATH=$PATH:/usr/local/mysql/bin/

mkdir -p /var/log/mysql1-${DB}
chown mysql.mysql /var/log/mysql1-${DB}
cd /usr/local/mysql5.6/
./scripts/mysql_install_db --defaults-file=/etc/mysql/mysql1-${DB}.cnf --user=mysql --datadir=/var/lib/mysql1-0 --force  --skip-name-resolve
chown -R mysql.mysql /var/lib/mysql1-${DB}
/etc/init.d/mysql1-${DB} start
/usr/local/mysql/bin/mysqladmin --defaults-file=/etc/mysql/mysql1-${DB}.cnf -u root password 'god'
mysql --defaults-file=/etc/mysql/mysql1-${DB}.cnf -u root -sN  -pgod -e "create user 'g4gmwp'@'localhost' IDENTIFIED BY 'wannabesysadmin';"
mysql --defaults-file=/etc/mysql/mysql1-${DB}.cnf -u root -sN  -pgod -e "GRANT ALL ON g4gmwp.* TO 'g4gmwp'@'localhost';"
mysql --defaults-file=/etc/mysql/mysql1-${DB}.cnf -u root -sN  -pgod -e "CREATE DATABASE g4gmwp";
