# Usando a imagem oficial PHP com Apache
FROM php:8.2-apache

# Habilitando mod_rewrite
RUN a2enmod rewrite

# Instalando dependências do sistema
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip pdo pdo_mysql

# Instalando o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definindo o diretório de trabalho
WORKDIR /var/www/html/public

# Copiando o código do projeto para o container
COPY . .

# Instalando dependências do PHP
RUN composer install --no-dev --optimize-autoloader

# Gerando a chave da aplicação e cacheando configurações
RUN php artisan key:generate
RUN php artisan config:cache
RUN php artisan route:cache

# Expondo a porta 80
EXPOSE 80

# Comando para iniciar o servidor
CMD ["apache2-foreground"]
