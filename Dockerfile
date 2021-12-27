# docker run -d -it -p 8080:80 -v {localPath}/{projectDirectory}/:/var/www/html php81:latest
FROM php:8.1.1
WORKDIR /var/www/html

CMD ["php", "-S", "0.0.0.0:80"]



EXPOSE 80
