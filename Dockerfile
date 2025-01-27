# Usando uma imagem base do PHP 8.2 com Apache
FROM php:8.2-apache

# Instalar dependências do sistema e extensões PHP necessárias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql zip \
    && a2enmod rewrite

# Definir o diretório de trabalho para a aplicação Laravel
WORKDIR /var/www/html

# Copiar os arquivos da aplicação para o container
COPY . .

# Ajustar as permissões dos arquivos para o Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Ajustar o DocumentRoot do Apache para o diretório public do Laravel
RUN sed -i 's|/var/www/html|/var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Instalar as dependências do Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Rodar o Composer para instalar as dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Gerar a chave da aplicação Laravel
RUN php artisan key:generate

# Expor a porta 80 para acesso externo
EXPOSE 80

# Iniciar o Apache em primeiro plano
CMD ["apache2-foreground"]
