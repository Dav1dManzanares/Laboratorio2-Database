CREATE DATABASE IF NOT EXISTS gestor_energias;
CREATE USER IF NOT EXISTS 'gestor_user'@'localhost' IDENTIFIED BY 'gestor_password';
GRANT ALL PRIVILEGES ON gestor_energias.* TO 'gestor_user'@'localhost';
FLUSH PRIVILEGES;
