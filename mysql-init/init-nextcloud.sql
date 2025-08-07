-- Create database for nextcloud1
CREATE DATABASE IF NOT EXISTS nextcloud1;
CREATE USER 'nc1_user'@'%' IDENTIFIED BY 'nc1_pass';
GRANT ALL PRIVILEGES ON nextcloud1.* TO 'nc1_user'@'%';

-- Create database for nextcloud2
CREATE DATABASE IF NOT EXISTS nextcloud2;
CREATE USER 'nc2_user'@'%' IDENTIFIED BY 'nc2_pass';
GRANT ALL PRIVILEGES ON nextcloud2.* TO 'nc2_user'@'%';

CREATE DATABASE IF NOT EXISTS nextcloud3;
CREATE USER 'nc3_user'@'%' IDENTIFIED BY 'nc3_pass';
GRANT ALL PRIVILEGES ON nextcloud3.* TO 'nc3_user'@'%';

FLUSH PRIVILEGES;
