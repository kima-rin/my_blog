CREATE TABLE article(
id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
regDate DATETIME NOT NULL,
updateDate DATETIME NOT NULL,
displayStatus TINYINT(1) UNSIGNED NOT NULL,
cateItemId INT(10) UNSIGNED NOT NULL,
title CHAR(250) CHARSET utf8mb4 NOT NULL,
`body`LONGTEXT CHARSET utf8mb4 NOT NULL
 );
 DESC article;
 CREATE TABLE cateItem(
id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
regDate DATETIME NOT NULL,
`name` CHAR(100) NOT NULL UNIQUE  
 );
 
 INSERT INTO cateItem SET regDate = NOW(), `name` = '일상';
 INSERT INTO cateItem SET regDate = NOW(), `name` = 'IT/일반';
 INSERT INTO cateItem SET regDate = NOW(), `name` = 'IT/프론트엔드';
 INSERT INTO cateItem SET regDate = NOW(), `name` = 'IT/디자인';