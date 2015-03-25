DROP DATABASE IF EXISTS leaderboard;

CREATE DATABASE leaderboard;

USE leaderboard;

CREATE TABLE score
(
   ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   name varchar(32),
   time int(32),
   wrong int(32)
);