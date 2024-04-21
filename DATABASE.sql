USE LIBRARY_MANAGEMENT_DB;

CREATE TABLE ADMIN_LOGIN (
USER_NAME VARCHAR(30) PRIMARY KEY NOT NULL,
PASS_WORD VARCHAR(30) NOT NULL
);

 CREATE TABLE  MEMBERS (
 MEMBER_ID INT auto_increment PRIMARY KEY ,
 USER_NAME VARCHAR(30) UNIQUE NOT NULL,
 PASS_WORD VARCHAR(30) NOT NULL,
 MEMBER_NAME VARCHAR(30) NOT NULL,
 FATHER_NAME VARCHAR(30) NOT NULL,
 GENDER VARCHAR(20) NOT NULL,
 ADDRESS VARCHAR(30) NOT NULL,
 PHONE_NUMBER INT NOT NULL,
 EMAIL VARCHAR(30) NOT NULL
 );
 
SELECT * FROM MEMBERs;

CREATE TABLE BOOKS (
    ID INT auto_increment PRIMARY KEY NOT NULL,
    TITLE VARCHAR(30) NOT NULL,
    AUTHOR VARCHAR(30) NOT NULL,
    ISBN INT NOT NULL,
	PUBLISHER VARCHAR(30) NOT NULL,
    EDITION INT NOT NULL,
    YEAR_OF_PUBLISHING INT NOT NULL
);

CREATE TABLE ISSUANCE (
ISSUANCE_ID INT auto_increment PRIMARY KEY NOT NULL,
ID INT NOT NULL,
MEMBER_ID INT NOT NULL,
ISSUE_DATE DATE NOT NULL,
DUE_DATE DATE NOT NULL,
RETURN_DATE DATE NOT NULL,
FINE int NOT NULL,
statuss varchar(20),
FOREIGN KEY (MEMBER_ID) REFERENCES MEMBERs (MEMBER_ID),
FOREIGN KEY (ID) REFERENCES BOOKS (ID)
);
INSERT INTO Members (user_name, pass_word, member_name, father_name, gender, address, phone_number, email)
VALUES
    ('johnsmith', 'password123', 'John Smith', 'David Smith', 'Male', '123 Main Street', '1234567890', 'johnsmith@example.com'),
    ('janedoe', 'abc123', 'Jane Doe', 'Michael Doe', 'Female', '456 Elm Street', '9876543210', 'janedoe@example.com'),
    ('mikebrown', 'qwerty', 'Mike Brown', 'Robert Brown', 'Male', '789 Oak Avenue', '8765432109', 'mikebrown@example.com'),
    ('sarahjones', 'password456', 'Sarah Jones', 'Thomas Jones', 'Female', '987 Pine Road', '1029384756', 'sarahjones@example.com'),
    ('davidwilson', '123abc', 'David Wilson', 'Peter Wilson', 'Male', '321 Cedar Lane', '7654321098', 'davidwilson@example.com'),
    ('emilydavis', 'pass123', 'Emily Davis', 'James Davis', 'Female', '654 Maple Drive', '9081726354', 'emilydavis@example.com'),
    ('robertsmith', 'ilovecoding', 'Robert Smith', 'Richard Smith', 'Male', '234 Walnut Street', '5463728190', 'robertsmith@example.com'),
    ('amandawilliams', 'abcd1234', 'Amanda Williams', 'Daniel Williams', 'Female', '567 Birch Court', '9283746512', 'amandawilliams@example.com');


INSERT INTO Issuance (ID, Member_ID, Issue_Date, Due_Date, Return_Date, Fine, Statuss)
VALUES
    (1, 1, '2023-05-20', '2023-06-04', 2023-06-21, 100, 'returned'),
    (2, 2, '2023-06-22', '2023-07-06', 2023-07-06, 0, 'reurned'),
    (3, 3, '2023-06-25', '2023-07-09', NULL, 0, 'issued'),
    (4, 4, '2023-06-28', '2023-07-12', NULL, 0, 'issued'),
    (5, 5, '2023-07-01', '2023-07-15', NULL, 0, 'issued'),
    (6, 6, '2023-07-04', '2023-07-18', NULL, 0, 'issued'),
    (7, 7, '2023-07-07', '2023-07-21', NULL, 0, 'issued'),
    (8, 8, '2023-07-10', '2023-07-24', NULL, 0, 'issued'),
    (9, 9, '2023-07-13', '2023-07-27', NULL, 0, 'issued'),
    (10, 10, '2023-07-16', '2023-07-30', NULL, 0, 'issued');

select * from issuance;

INSERT INTO ADMIN_LOGIN VALUES('ADMIN1' , 'ADMINPASS');

CALL `library_management_db`.`SP_ADMIN_LOGIN`('ADMIN1', 'ADMINPASS', @RESULTS);

select @results;

SELECT * FROM ADMIN_LOGIN; 

INSERT INTO books (id, title, author, isbn, publisher, edition, YEAR_OF_PUBLISHING)
VALUES
    (1, 'The Great Gatsby', 'F. Scott Fitzgerald', '9783743273565', 'Scribner', '1st Edition', 1925);
    
    INSERT INTO `bookS` (`TITLE` ,`author`, `isbn`, `PUBLISHER`, `EDITION`, `YEAR_OF_PUBLISHING`) VALUES
('Harry Potter and the Deathly Hallows' , 'J. K. Rowling', '0000545010225', 'Fiction CREATIONS', 1, 1930),
( 'A Game of Thrones','George R. R. Martin','0000553103547', 'Fiction CREATIONS', 1, 2010),
( 'A Storm of Swords', 'George R. R. Martin','0000553106635', 'Fiction CREATIONS', 2, 2015),
('A Clash of Kings','George R. R. Martin','0000553108034', 'Fiction CREATIONS', 5, 2010),
('A Feast for Crows', 'George R. R. Martin','0000553801503', 'Fiction CREATIONS', 6, 2020),
('Good to Great', 'Jim Collins','9780066620992', 'K M ', 3, 2010),
('The Pigeon Tunnel','John le CarrÃ©','9780241257555',  'FK', 2,2005),
( 'Mockingjay','Suzanne Collins','9780439023511', 'Fiction CREATIONS', 5, 2020),
('The Hunger Games','Suzanne Collins','9780439023528',  'Fiction CREATIONS', 4, 2010),
('Catching Fire','Suzanne Collins','9780545227247', 'Fiction CREATIONS', 4, 2014),
( 'A Dance with Dragons', 'George R. R. Martin','9780553801477', 'Fiction CREATIONS', 6, 2015),
('Sandbox Wisdom', 'Tom Asacker','9780967752808', 'fiction CREATIONS', 2, 2005);
    
SELECT * FROM BOOKS;

-- MEMBER DETAILS
CALL `library_management_db`.`SP_GET_MEMBER_DETAILS`();

-- MEMBER REGISTER
CALL `library_management_db`.`SP_MEMBER_REGISTER`('KHAULLAH', 'BUTTER', 'KHAULLA', 'ARSHED ALI','FEMALE','AL RAZZAK VILLAS','343820304', 'KHAULLA@GMAIL.COM');

CALL `library_management_db`.`SP_MEMBER_REGISTER`('RimshaAAA','RIMI', 'RIMSHA','SIDDIQUE', 'FEMALE', 'FARID TOWN ', '3476854321', 'RIMSHA123@GMAIL.COM');

-- MEMBER LOGIN 
CALL `library_management_db`.`SP_MEMBER_LOGIN`('RimshaAAA','rimi', @RESULT);

SELECT @RESULT;

-- GET BOOKS DETAILS;
CALL `library_management_db`.`SP_GET_BOOKS_DETAILS`();
 
-- ADD NEW BOOKS 
CALL `library_management_db`.`ADD_NEW_BOOKS`('DAFFODILS', 'WILLIAM', 902355330294, 'A K CREATIONS', '1ST', '1970');

-- DISCARD/DELETE BOOKS
CALL `library_management_db`.`SP_DELETE_BOOKS`(1);

-- UPDATE BOOKS
CALL `library_management_db`.`SP_UPDATE_BOOK`(2, 'intro to database', 'F.SCOTT', 23343212100, 'JB CLD', 2, 2023);

-- ISSUANCE CHECK 
CALL `library_management_db`.`SP_CHECK_ISSUANCE`();

-- SEARCH BOOK
CALL `library_management_db`.`SP_SEARCH_BOOKS`('PROGRAMMING');

-- DELETE MEMBERS
CALL `library_management_db`.`SP_DELETE_MEMBER`(1);

-- DELETE ISSUANCE HISTORY
CALL `library_management_db`.`SP_DELETE_ISSUANCE`(1);
