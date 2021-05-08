FROM debian:buster  
LABEL MANTAINER="ALATEKA"
RUN apt update && apt upgrade -y && apt install -y apache2 libapache2-mod-php php php-pgsql php-curl composer
RUN mkdir -p /var/lock/apache2
RUN mkdir -p /var/run/apache2
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_PID_FILE /var/run/apache2.pid
ENV APACHE_RUN_DIR /var/run/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_LOG_DIR /var/log/apache2
CMD /usr/sbin/apache2ctl -D FOREGROUND
EXPOSE 80
