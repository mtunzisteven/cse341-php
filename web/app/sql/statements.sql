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