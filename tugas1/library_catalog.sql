CREATE DATABASE library_catalog;
USE library_catalog;
SHOW DATABASES ;

CREATE TABLE BOOKS(
    book_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(30) NOT NULL,
    authors VARCHAR(30) NOT NULL,
    genre VARCHAR(25) NOT NULL,
    publication_year INT NOT NULL,
    publisher VARCHAR(30) NOT NULL
)ENGINE = InnoDB;

SHOW TABLES ;
DESC BOOKS;

INSERT INTO BOOKS(title, authors, genre, publication_year, publisher)
VALUES ('The Great Gatsby', 'F. Scott Fitzgerald', 'Fiction', 1925, 'Scribner');

INSERT INTO BOOKS(title, authors, genre, publication_year, publisher)
VALUES ('To Kill a Mockingbird', 'Harper Lee', 'Fiction', 1960, 'J. B. Lippincott');

SELECT * FROM BOOKS;