# Steps

<<<<<<< Updated upstream
1) Creare istanza
1) Accesso alla istanza
1) docker
1) nginx
1) docker compose
1) mysql
1) phpmyadmin
=======
1. Creare istanza
1. Accesso alla istanza
1. docker
1. nginx
1. HTTPS (un parto)

- creare chiavi
- Progetto-AWS git:(main) ✗ sudo docker run -dit -p 443:443 -v /home/ubuntu/Progetto-AWS:/home/ubuntu/Progetto-AWS nginx-selfsigned

https://medium.com/@miladev95/nginx-with-self-signed-certificate-on-docker-a514bb
1a4061

docker file

- sudo docker run -dit -p 443:443 -v /home/ubuntu/Progetto-AWS:/home/ubuntu/Progetto-AWS --name my-nginx-container nginx-selfsigned

nginx.conf

- events {
    worker_connections 1024;
}


http {
    server {
                include mime.types;
        listen 443 ssl;
        server_name 54.89.226.208;

        ssl_certificate /etc/nginx/ssl/nginx-selfsigned.crt;
        ssl_certificate_key /etc/nginx/ssl/nginx-selfsigned.key;

        location / {
            root /home/ubuntu/Progetto-AWS;
            index index.html;
        }
    }
}


1. docker compose

1. mysql
   https://www.datacamp.com/tutorial/set-up-and-configure-mysql-in-docker
1. phpmyadmin
   https://zomro.com/blog/faq/289-kak-ustanovit-phpmyadmin-v-docker
>>>>>>> Stashed changes
