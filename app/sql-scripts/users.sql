CREATE TABLE roles (
roleId INT PRIMARY KEY AUTO_INCREMENT,
[type] VARCHAR(255) NOT NULL
);

INSERT INTO roles ([type]) VALUES ('User');
INSERT INTO roles ([type]) VALUES ('Administrator');
INSERT INTO roles ([type]) VALUES ('SuperAdministrator');


SELECT * FROM roles;


CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT,
    email varchar(50)      NOT NULL UNIQUE,
    firstname varchar(50)      NOT NULL,
    lastname varchar(50)      NOT NULL,
    [password] varchar(255)     NOT NULL,
    roleId INT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (roleId) REFERENCES roles(roleId)
);
