CREATE DATABASE moneyz;

CREATE TABLE user (
    ID int NOT NULL AUTO_INCREMENT,
    Username varchar(255),
    Password varchar(255),
    Created_at DATETIME,
    Updated_at DATETIME,
    PRIMARY KEY (ID)
);

CREATE TABLE moneyz (
     ID int NOT NULL AUTO_INCREMENT,
    user_id int,
    Moneyz int,
    PRIMARY KEY (ID),
    FOREIGN KEY (User_id)
);