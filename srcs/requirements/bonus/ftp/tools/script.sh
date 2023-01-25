#!/bin/bash


service vsftpd start

# Add the USER, change his password and declare him as the owner of wordpress folder and all subfolders

adduser $ftp_user --disabled-password

echo "$ftp_user:$ftp_pwd" | /usr/sbin/chpasswd

echo "$ftp_user" | tee -a /etc/vsftpd.userlist 


mkdir /home/$ftp_user/ftp


chown nobody:nogroup /home/$ftp_user/ftp
chmod a-w /home/$ftp_user/ftp

mkdir /home/$ftp_user/ftp/files
chown $ftp_user:$ftp_user /home/$ftp_user/ftp/files

service vsftpd stop

/usr/sbin/vsftpd