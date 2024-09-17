# Utiliser la dernière version de PHP avec Apache
FROM php:8.1-apache

# Créer un répertoire pour l'application
# Le répertoire /var/www/html est déjà défini par défaut par l'image Apache
# Si vous voulez un répertoire différent, assurez-vous que la configuration d'Apache est modifiée pour pointer vers ce répertoire.

# Définir ce répertoire comme répertoire de travail
WORKDIR /var/www/html

# Modifier les droits d'utilisateur pour Apache
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

# Copier votre code dans le conteneur
COPY . /var/www/html

# Définir les permissions pour l'utilisateur web
RUN chown -R www-data:www-data /var/www/html
