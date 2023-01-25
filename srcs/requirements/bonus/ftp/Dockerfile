FROM debian:buster

RUN apt update -y && \
    apt upgrade -y

RUN apt install vsftpd -y

COPY ./tools/script.sh /

COPY ./tools/vsftpd.conf /etc/vsftpd.conf

CMD ["/script.sh"]