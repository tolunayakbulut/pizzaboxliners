-- Pizza Box Liners — Database Setup
-- cPanel > phpMyAdmin > SQL sekmesine yapıştır ve çalıştır
-- Veritabanını önce cPanel > MySQL Databases'dan oluştur

CREATE TABLE IF NOT EXISTS `inquiries` (
    `id`         INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name`       VARCHAR(100)     NOT NULL,
    `company`    VARCHAR(150)     DEFAULT NULL,
    `country`    VARCHAR(100)     NOT NULL,
    `email`      VARCHAR(150)     NOT NULL,
    `phone`      VARCHAR(50)      DEFAULT NULL,
    `product`    VARCHAR(200)     DEFAULT NULL,
    `quantity`   VARCHAR(100)     DEFAULT NULL,
    `message`    TEXT             NOT NULL,
    `created_at` DATETIME         DEFAULT NULL,
    `updated_at` DATETIME         DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `ci_sessions` (
    `id`         VARCHAR(128)     NOT NULL,
    `ip_address` VARCHAR(45)      NOT NULL,
    `timestamp`  TIMESTAMP        NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `data`       BLOB             NOT NULL,
    KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `ci_migrations` (
    `id`        BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `version`   VARCHAR(255)        NOT NULL,
    `class`     TEXT                NOT NULL,
    `group`     VARCHAR(255)        NOT NULL,
    `namespace` VARCHAR(255)        NOT NULL,
    `time`      INT(11)             NOT NULL,
    `batch`     INT(11) UNSIGNED    NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
