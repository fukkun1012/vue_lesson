-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `sample_api` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sample_api`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '氏名',
  `email` varchar(100) NOT NULL COMMENT 'メールアドレス',
  `password` varchar(255) NOT NULL COMMENT 'password_hash',
  `birthday` date NOT NULL COMMENT '生年月日',
  `gender` int(11) DEFAULT '0' COMMENT '1:男 2:女',
  `access_token` varchar(255) DEFAULT NULL COMMENT 'アクセストークン（ログイン時に使用）',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `birthday`, `gender`, `access_token`, `created`, `updated`) VALUES
(1,	'山田太郎',	'yamada@test.co.jp',	'$2y$10$9HdhbtuYBZYRTfexxQagZe3XU9diIqfQlnNRXPgGph8YWg4i8MPOu',	'1994-04-10',	1,	'aaaaa',	'2021-12-15 11:30:25',	NULL),
(2,	'鈴木花子',	'suzuki@test.co.jp',	'$2y$10$9HdhbtuYBZYRTfexxQagZe3XU9diIqfQlnNRXPgGph8YWg4i8MPOu',	'1996-05-10',	2,	'bbbbb',	'2021-12-15 11:30:25',	NULL),
(3,	'田中一郎',	'tanaka@test.co.jp',	'$2y$10$9HdhbtuYBZYRTfexxQagZe3XU9diIqfQlnNRXPgGph8YWg4i8MPOu',	'1990-06-10',	1,	'cccccc',	'2021-12-15 11:30:25',	NULL);

-- 2021-11-15 21:56:37
