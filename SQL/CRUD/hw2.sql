/* 
<problem>
Write a update query to modified value for 'commission' is 'commission'-.02
for agents who have minimum payment amount of 'customer' table
 */

USE sql_test;

SELECT * FROM agents;

UPDATE agents
SET COMMISSION = COMMISSION - .02
WHERE AGENT_CODE = (
    SELECT AGENT_CODE
    FROM customer
    WHERE PAYMENT_AMT = (
        SELECT MIN(PAYMENT_AMT)
        FROM customer
    )
);

SELECT * FROM agents;
