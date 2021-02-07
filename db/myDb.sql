--Create a database(already done at horeku)
createdb myBb

--create developer table
CREATE TABLE developer (
    developerId         serial,
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
(passwrd, email, phone)
VALUES
('sms2211','me@123.com', 0313457890);

INSERT INTO customer
(passwrd, email, phone)
VALUES
('sms4949','her@123.com', 0393457890);

INSERT INTO customer
(passwrd, email, phone)
VALUES
('sms0000','him@123.com', 0003457890);

-- Inserting into developer table
INSERT INTO developer
(username, passwrd, email, phone)
VALUES
('dev001', 'dev001123','001@dev.com', 0013457890);

INSERT INTO developer
(username, passwrd, email, phone)
VALUES
('dev002', 'dev002123','002@dev.com', 0023457890);

INSERT INTO developer
(username, passwrd, email, phone)
VALUES
('dev003', 'dev003123','002@dev.com', 0033457890);

-- Inserting into project table
INSERT INTO projects
(datePosted, dateCompleted, customerId, developerId)
VALUES
(DATE '2020-12-16', DATE '2021-02-16',3, 3);

INSERT INTO projects
(datePosted, dateCompleted, customerId, developerId)
VALUES
(DATE '2020-10-15', DATE '2021-01-26',1, 4);

INSERT INTO projects
(datePosted, dateCompleted, customerId, developerId)
VALUES
(DATE '2020-01-04', DATE '2020-11-28',2, 5);