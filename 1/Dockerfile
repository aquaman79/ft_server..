# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: aquamar <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/02/26 14:34:11 by aquamar           #+#    #+#              #
#    Updated: 2020/03/04 15:13:24 by aquamar          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster
RUN apt-get update
RUN apt-get install -y nginx vim mariadb-server mariadb-client wget dpkg gnupg lsb-release
RUN apt-get install -y php php-fpm php-gd php-mysql php-cli php-curl php-json
####
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.4/phpMyAdmin-4.9.4-english.tar.gz
RUN tar -zxvf phpMyAdmin-4.9.4-english.tar.gz
RUN mv phpMyAdmin-4.9.4-english /var/www/html/phpmyadmin
RUN rm phpMyAdmin-4.9.4-english.tar.gz
#######
RUN wget https://fr.wordpress.org/latest-fr_FR.tar.gz
RUN tar -zxvf latest-fr_FR.tar.gz
RUN mv wordpress /var/www/html/wordpress
RUN chown -R www-data:www-data /var/www/html/wordpress/
RUN chmod -R 755 /var/www/html/wordpress/
RUN rm latest-fr_FR.tar.gz
#####
ADD ./srcs/wp-config.php /var/www/html/wordpress/wp-config.php
ADD ./srcs/default ./etc/nginx/sites-available/default
ADD ./srcs/create_database create_database
ADD ./srcs/script.sh script.sh
ADD ./srcs/rundata.sh rundata.sh
ADD ./srcs/install.sh install.sh
ADD ./srcs/wordpress.sql wordpress.sql
ADD ./srcs/nginx-selfsigned.crt /etc/ssl/certs 
ADD ./srcs/nginx-selfsigned.key /etc/ssl/private
##
ADD ./srcs/nginx-selfsigned.crt /etc/ssl/certs/
ADD ./srcs/nginx-selfsigned.key /etc/ssl/private/
RUN sh rundata.sh
CMD ["bash", "./script.sh"]
#CMD ./script.sh
##ENTRYPOINT /bin/bash

