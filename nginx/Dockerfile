FROM nginx

#RUN mkdir -p /etc/nginx/ssl/

COPY ./nginx-selfsigned.crt /etc/nginx/ssl/nginx-selfsigned.crt
COPY ./nginx-selfsigned.key /etc/nginx/ssl/nginx-selfsigned.key

COPY ./default.conf /etc/nginx/conf.d/default.conf
