#!/bin/bash

# Update package lists
sudo apt update &> /dev/null

# Upgrade existing packages
sudo apt upgrade -y &> /dev/null

# Install snap of VSCode
sudo snap install code --classic

# Install Apache2 web server
sudo apt install apache2 -y &> /dev/null

# Install MySQL server
sudo apt install mysql-server -y &> /dev/null

# Secure MySQL installation (prompts for password)
sudo mysql_secure_installation

# Install PHP and related modules
sudo apt install php libapache2-mod-php php-mysql -y &> /dev/null

# Set more permissive permissions on web root
sudo chown -R $USER:$USER /var/www/html/

