-- 데이터 베이스 생성
CREATE DATABASE `member_site`;

-- 데이터 베이스 조회
SHOW DATABASES;

-- 사용할 DB 선택
USE `member_site`;

-- 테이블 생성하기
CREATE TABLE `member` (
`idx` INT UNSIGNED NOT NULL AUTO_INCREMENT,
`id` VARCHAR(100) DEFAULT '',
`name` VARCHAR(100) DEFAULT '',
`email` VARCHAR(100) DEFAULT '',
`password` VARCHAR(100) DEFAULT '',
`zipcode` CHAR(5) DEFAULT '',
`addr1` VARCHAR(255) DEFAULT '',
`addr2` VARCHAR(255) DEFAULT '',
`photo` VARCHAR(100) DEFAULT '',
`create_at` DATETIME,
`ip` VARCHAR(20) DEFAULT '',
PRIMARY KEY(idx),
UNIQUE INDEX `id` (`id`) USING BTREE
);

-- 테이블 목록 조회
SHOW TABLES;

-- 특정 테이블 조회하기
SELECT * FROM `member`;

-- 특정 테이블의 데이터 입력하기
INSERT INTO member (id, `name`, `email`)
VALUES ('kingchobo','왕초보','email@email.com');