/* 
<problem>
Write a update query to modified value for 'commission' is 'commission'-.02
for agents who have minimum payment amount of 'customer' table
 */

USE sql_test_asaka;

SELECT * FROM agents;

UPDATE agents
SET COMMISSION = COMMISSION -.02
WHERE
    agents.AGENT_CODE = (
        SELECT
            customer.AGENT_CODE
        FROM
            customer
        GROUP BY 
            customer.AGENT_CODE
        ORDER BY
            SUM(customer.PAYMENT_AMT) ASC
        LIMIT 1
    );
