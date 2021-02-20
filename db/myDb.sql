--Create a database(already done at horeku)
createdb myBb

--create developer table
CREATE TABLE developer (
    developerId         serial,
    firstName           varchar(30) NOT NULL,
    lastName            varchar(30) NOT NULL,
    username            varchar(30) NOT NULL,
    passwrd             varchar(30) NOT NULL,
    email               varchar(80) NOT NULL,
    phone               integer NOT NULL,
    reviews             varchar(150),
    rating              varchar,
    profileImage        varchar,
    qualifications      varchar,
    PRIMARY KEY(developerId)
);

--Reset the id auto increment start point to 1.
ALTER SEQUENCE   
    developer_developerid_seq
RESTART WITH 1;

--create customer table
CREATE TABLE customer (
    customerId         serial,
    firstName          varchar(30) NOT NULL,
    lastName           varchar(30) NOT NULL,
    passwrd            varchar(30) NOT NULL,
    email              varchar(80) NOT NULL,
    phone              integer NOT NULL,
    profileImage       varchar,
    portfolio          varchar,
    PRIMARY KEY(customerId)
);

--Reset the id auto increment start point to 1.
ALTER SEQUENCE   
    customer_customerid_seq
RESTART WITH 1;

--create projects table
CREATE TABLE projects ( 
    projectId         serial,
    title             varchar(80) NOT NULL,
    datePosted        timestamp NOT NULL,
    dateCompleted     timestamp,
    customerId        integer NOT NULL references customer(customerId),
    developerId       integer NOT NULL references developer(developerId),
    PRIMARY KEY(projectId)
);

--Reset the id auto increment start point to 1.
ALTER SEQUENCE   
    projects_projectid_seq
RESTART WITH 1;

-- Inserting into customer table
INSERT INTO customer
(firstName, lastName, passwrd, email, phone)
VALUES
('Sam', 'Job', 'sms2211','me@123.com', 1313457890);

INSERT INTO customer
(firstName, lastName, passwrd, email, phone)
VALUES
('Dale', 'Schwenksteiner', 'sms4949','her@123.com', 1393457890);

INSERT INTO customer
(firstName, lastName, passwrd, email, phone)
VALUES
('Dale', 'Peters', 'sms0000','him@123.com', 1003457890);

-- Inserting into developer table
INSERT INTO developer
(firstName, lastName, username, passwrd, email, phone, profileimage)
VALUES
('Bong', 'Simelani', 'dev001', 'dev001123','001@dev.com', 0013457890, 'no-image.png');

INSERT INTO developer
(firstName, lastName, username, passwrd, email, phone, profileimage)
VALUES
('Thabo', 'Dlamini', 'dev002', 'dev002123','002@dev.com', 0023457890, 'no-image.png"');

INSERT INTO developer
(firstName, lastName, username, passwrd, email, phone, profileimage)
VALUES
('Thokozani', 'Cebekhulu', 'dev003', 'dev003123','002@dev.com', 0033457890, 'no-image.png');

-- Inserting into project table
INSERT INTO projects
(title, datePosted, dateCompleted, customerId, developerId)
VALUES
('Alter Site HTML', DATE '2020-12-16', DATE '2021-02-16',1, 1);

INSERT INTO projects
(title, datePosted, dateCompleted, customerId, developerId)
VALUES
('Create Ecommerce Site', DATE '2020-10-15', DATE '2021-01-26',2, 2);

INSERT INTO projects
(title, datePosted, dateCompleted, customerId, developerId)
VALUES
('Create an Android App', DATE '2020-01-04', DATE '2020-11-28',3, 3);

--Add new column to projects table (NOT NULL will not work if other data already filled because it will initially have null values)
--Either make it accept NULL values then add values, and then finally make it NOT NULL or drop the table and create it with correct data.
ALTER TABLE projects
ADD COLUMN title varchar(80);

UPDATE projects
SET title = HTML project
WHERE projectId = 1;

ALTER TABLE projects
ALTER COLUMN title SET NOT NULL;

-- I will drop the table and recreate it with the correct information since it's not a lot of data.

-- Register a developer
INSERT INTO customer
    (firstName, lastName, userName, phone, email, passwrd)
VALUES
    ('fistName', 'lastName', 'userName', 'phone', 'email', 'passwrd');

-- Register a customer
INSERT INTO customer
    (firstName, lastName, phone, email, passwrd)
VALUES
    ('fistName', 'lastName', 'phone', 'email', 'passwrd');

-- Login a developer
SELECT userName, passwrd FROM developer WHERE userName='userNamevalue' AND passwrod = 'passwordValue'; 

-- Login a customer
SELECT email, passwrd FROM customer WHERE email='emailvalue' AND passwrod = 'passwordValue'; 

-- Make number varchar
ALTER TABLE developer 
ALTER COLUMN phone TYPE VARCHAR;