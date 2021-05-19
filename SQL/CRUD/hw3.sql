/* 
Write a query to extract the data from the 'customer' table
who are in grade 3 
    and not belongs to the country india
    and  there deposited opening amount is less than 7000
    and their agent should have earned a commission is less than .12%
 */

USE sql_test;

SELECT * FROM customer
WHERE
    GRADE = 3
    AND
    CUST_COUNTRY != 'india'
    AND
    OPENING_AMT <= 7000
    AND
    (
        SELECT COMMISSION
        FROM agents 
        WHERE customer.AGENT_CODE = agents.AGENT_CODE
    ) <= 0.12;
