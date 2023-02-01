#!/bin/bash

service vsftpd start

# Add the USER, change his password and declare him as the owner of wordpress folder and all subfolders

adduser $ftp_user --disabled-password

echo "$ftp_user:$ftp_pwd" | /usr/sbin/chpasswd

#Add the FTP user to the list of allowed users in the vsftpd configuration file /etc/vsftpd.userlist using the tee command.

echo "$ftp_user" | tee -a /etc/vsftpd.userlist 


mkdir /home/$ftp_user/ftp


chown -R $ftp_user:$ftp_user /home/$ftp_user/ftp

service vsftpd stop

/usr/sbin/vsftpd