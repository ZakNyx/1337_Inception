FROM debian:buster

RUN apt-get update -y && \
    apt-get install -y nodejs npm

COPY ./tools /home/app

WORKDIR /home/app

RUN npm init -y && npm install express -y

CMD ["node", "server.js"]