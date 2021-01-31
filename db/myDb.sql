--Create a database(already done at horeku)
createdb myBb

--create developer table
CREATE TABLE developer (
    developerId         integer PRIMARY KEY NOT NULL,
    username            varchar(30) NOT NULL,
    passwrd             varchar(30) NOT NULL,
    email               varchar(80) NOT NULL,
    phone               integer NOT NULL,
    reviews             varchar(150),
    rating              varchar,
    profileImage        varchar,
    qualifications      varchar
);

--create customer table
CREATE TABLE customer (
    customerId         integer PRIMARY KEY NOT NULL,
    passwrd            varchar(30) NOT NULL,
    email              varchar(80) NOT NULL,
    phone              integer NOT NULL,
    profileImage       varchar,
    portfolio          varchar
);

--create projects table
CREATE TABLE projects (
    projectId         integer PRIMARY KEY NOT NULL,
    datePosted        timestamp,
    dateCompleted     timestamp,
    customerId        integer NOT NULL,
    developerId       integer
);