DROP TABLE IF EXISTS `users`;

CREATE TABLE `users`
(
    `id`              INT NOT NULL AUTO_INCREMENT,
    `username`        varchar(50)      NOT NULL UNIQUE,
    `password`        varchar(255)     NOT NULL,
    `created_at`      DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 5
  DEFAULT CHARSET = utf8mb4;

LOCK TABLES `users` WRITE;

INSERT INTO `users`(`id`, `username`, `password`, `created_at`) VALUES ('1','student','Hello123', CAST(N'2021-06-18 10:34:09.000' AS DateTime))
INSERT INTO `users`(`id`, `username`, `password`, `created_at`) VALUES ('2','evavnzee@outlook.com','Hello1234', CAST(N'2021-06-18 10:34:09.000' AS DateTime))