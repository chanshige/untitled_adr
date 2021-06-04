FROM nginx:latest
LABEL maintainer="bell.tanaka@karabiner.tech"

COPY ./docker/nginx/nginx.conf /etc/nginx/
COPY ./docker/nginx/default.conf /etc/nginx/conf.d/

EXPOSE 80