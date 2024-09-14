# Utiliser la dernière version de PHP avec Apache
FROM php:latest-apache  

# Créer un répertoire pour l'application
RUN mkdir /app  

# Définir ce répertoire comme répertoire de travail
WORKDIR /app  

# Modifier les droits d'utilisateur pour Apache
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

# Configurer Apache pour utiliser ce répertoire
RUN sed -i -e "s/var\/www/app/g" /etc/apache2/apache2.conf && sed -i -e "s/html/public/g" /etc/apache2/apache2.conf

# Copier votre code dans le conteneur
COPY . /app  

# Définir les permissions pour l'utilisateur web
RUN chown -R www-data:www-data /app
