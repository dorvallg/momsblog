DROP DATABASE IF EXISTS comments;
DROP USER IF EXISTS feed_user@localhost;

CREATE DATABASE comments CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER feed_user@localhost IDENTIFIED BY 'Laur3nMom$Bl0g';
GRANT ALL PRIVILEGES ON comments.* TO feed_user@localhost;

--4c1d90756484d4b6b72c5a3330