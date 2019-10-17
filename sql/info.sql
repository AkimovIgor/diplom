CREATE TABLE IF NOT EXISTS info(
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    img VARCHAR(255) NOT NULL DEFAULT '/images/no_image.png',
    tel VARCHAR(255) NOT NULL,
    f_email VARCHAR(255) NOT NULL,
    site VARCHAR(255) NOT NULL,
    s_email VARCHAR(255) NOT NULL,
    count1 TINYINT(4) NOT NULL,
    count2 TINYINT(4) NOT NULL,
    count3 TINYINT(4) NOT NULL,
    classes TINYINT(3) NOT NULL,
    map TEXT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;