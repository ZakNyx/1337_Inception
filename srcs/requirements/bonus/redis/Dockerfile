FROM debian:buster

RUN apt-get update -y && apt-get install -y redis-server

RUN echo "maxmemory 256mb" >> /etc/redis/redis.conf && \
echo "maxmemory-policy allkeys-lru" >> /etc/redis/redis.conf && \
sed -i -r "s/bind 127.0.0.1/#bind 127.0.0.0/" /etc/redis/redis.conf

CMD ["redis-server", "--protected-mode", "no"] 