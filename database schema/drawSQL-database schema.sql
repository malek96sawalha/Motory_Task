CREATE TABLE `manufacture`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name_en` CHAR(255) NOT NULL,
    `name_ar` CHAR(255) NOT NULL,
    `created_at` DATETIME NOT NULL,
    `updated_at` DATETIME NOT NULL
);
ALTER TABLE
    `manufacture` ADD PRIMARY KEY `manufacture_id_primary`(`id`);
CREATE TABLE `posts`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `caption_ar` CHAR(255) NOT NULL,
    `caption_en` CHAR(255) NOT NULL,
    `description` CHAR(255) NOT NULL,
    `price` INT NOT NULL,
    `has_finiance` TINYINT(1) NULL
);
ALTER TABLE
    `posts` ADD PRIMARY KEY `posts_id_primary`(`id`);
CREATE TABLE `posts_type`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `post_id` BIGINT NOT NULL,
    `type_id` BIGINT NOT NULL
);
ALTER TABLE
    `posts_type` ADD PRIMARY KEY `posts_type_id_primary`(`id`);
CREATE TABLE `type`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name_ar` CHAR(255) NOT NULL,
    `name_en` CHAR(255) NOT NULL,
    `manufature_date` DATE NOT NULL,
    `body_type` CHAR(255) NOT NULL,
    `drive_type` CHAR(255) NOT NULL,
    `color` VARCHAR(255) NOT NULL,
    `engine` VARCHAR(255) NOT NULL,
    `transmision` ENUM('') NOT NULL,
    `torque` INT NOT NULL,
    `created_at` DATETIME NOT NULL,
    `updated_at` DATETIME NOT NULL,
    `manufacture_id` BIGINT NOT NULL
);
ALTER TABLE
    `type` ADD PRIMARY KEY `type_id_primary`(`id`);
CREATE TABLE `genra`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name_en` CHAR(255) NOT NULL,
    `name_ar` CHAR(255) NOT NULL,
    `created_at` DATETIME NOT NULL,
    `updated_at` DATETIME NOT NULL,
    `manufature_id` BIGINT NOT NULL
);
ALTER TABLE
    `genra` ADD PRIMARY KEY `genra_id_primary`(`id`);
ALTER TABLE
    `posts_type` ADD CONSTRAINT `posts_type_post_id_foreign` FOREIGN KEY(`post_id`) REFERENCES `posts`(`id`);
ALTER TABLE
    `posts_type` ADD CONSTRAINT `posts_type_type_id_foreign` FOREIGN KEY(`type_id`) REFERENCES `type`(`id`);
ALTER TABLE
    `type` ADD CONSTRAINT `type_manufacture_id_foreign` FOREIGN KEY(`manufacture_id`) REFERENCES `manufacture`(`id`);
ALTER TABLE
    `genra` ADD CONSTRAINT `genra_manufature_id_foreign` FOREIGN KEY(`manufature_id`) REFERENCES `manufacture`(`id`);