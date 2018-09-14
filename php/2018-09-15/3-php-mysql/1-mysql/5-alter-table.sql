-- ALTER TABLE --
-- EXERCISE 1 : Add column day of birth (dob) in users table.
-- SUGGESTION :
/* 
ALTER TABLE aptech_php_12.users ADD dob date; 
*/
-- EXERCISE 2 : DROP column dob in users table;
-- SUGGESTION :
/*
ALTER TABLE aptech_php_12.users DROP COLUMN DOB; 
*/

ALTER TABLE users ADD day_of_birth date;
ALTER TABLE users DROP COLUMN day_of_birth;
SELECT * FROM users;