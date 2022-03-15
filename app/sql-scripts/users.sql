CREATE TABLE roles (
roleId INT PRIMARY KEY AUTO_INCREMENT,
type VARCHAR(255)
);

INSERT INTO roles (type) VALUES ('User');
INSERT INTO roles (type) VALUES ('Administrator');
INSERT INTO roles (type) VALUES ('SuperAdministrator');
INSERT INTO roles (type) VALUES ('Client');
INSERT INTO roles (type) VALUES ('Volunteer');

SELECT * FROM roles;

CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT,
    email varchar(50)      NOT NULL UNIQUE,
    firstname varchar(50)      NOT NULL,
    lastname varchar(50)      NOT NULL,
    password varchar(255)     NOT NULL,
    roleId INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (roleId) REFERENCES roles(roleId)
);

INSERT INTO `users`(`id`, `email`, `firstname`, `lastname`, `password`, `roleId`, `created_at`) VALUES ('1','student@gmail.com','Eva','Stet','Hello123','1',CAST(N'2022-01-18 10:34:09.000' AS DateTime))