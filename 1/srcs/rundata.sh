# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    rundata.sh                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: aquamar <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/03/02 01:21:36 by aquamar           #+#    #+#              #
#    Updated: 2020/03/03 02:15:00 by aquamar          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

sh install.sh
mysql -u root < create_database
mysql -u root -proot wordpress < wordpress.sql
