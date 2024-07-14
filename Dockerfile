# Use the official PHP image
FROM php:8.2-apache

# Install PHP extensions (e.g., pdo_mysql)
RUN docker-php-ext-install pdo_mysql

# Set the working directory
WORKDIR /var/www/html

# Copy your PHP files into the container
COPY . .

# Install Node.js (for Tailwind CSS)
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash -
RUN apt-get install -y nodejs

# Install and build Tailwind CSS
RUN npm install -g tailwindcss postcss autoprefixer
RUN npx tailwindcss -i ./src/css/input.css -o ./src/css/output.css

# Expose port 80 (Apache)
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]