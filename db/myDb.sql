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

--create projects table
CREATE TABLE projects (
    projectId         serial,
    datePosted        timestamp,
    dateCompleted     timestamp,
    customerId        integer NOT NULL references customer(customerId),
    developerId       integer NOT NULL references developer(developerId),
    PRIMARY KEY(projectId)
);

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
(firstName, lastName, username, passwrd, email, phone)
VALUES
('Bong', 'Simelani', 'dev001', 'dev001123','001@dev.com', 0013457890);

INSERT INTO developer
(firstName, lastName, username, passwrd, email, phone)
VALUES
('Thabo', 'Dlamini', 'dev002', 'dev002123','002@dev.com', 0023457890);

INSERT INTO developer
(firstName, lastName, username, passwrd, email, phone)
VALUES
('Thokozani', 'Cebekhulu', 'dev003', 'dev003123','002@dev.com', 0033457890);

-- Inserting into project table
INSERT INTO projects
(datePosted, dateCompleted, customerId, developerId)
VALUES
(DATE '2020-12-16', DATE '2021-02-16',5, 5);

INSERT INTO projects
(datePosted, dateCompleted, customerId, developerId)
VALUES
(DATE '2020-10-15', DATE '2021-01-26',6, 4);

INSERT INTO projects
(datePosted, dateCompleted, customerId, developerId)
VALUES
(DATE '2020-01-04', DATE '2020-11-28',7, 6);