/* 
<problem>
Write a update query to modified value for 'commission' is 'commission'-.02
for agents who have minimum payment amount of 'customer' table
 */

use sql_test_asaka;

SELECT * FROM agents;

-- Aggregate payments by agent.
DROP TABLE IF EXISTS sumsPayment;
CREATE TABLE sumsPayment AS
    SELECT 
        AGENT_CODE,
        SUM(PAYMENT_AMT) AS 'PAYMENT'
    FROM
        customer
    GROUP BY
        AGENT_CODE;
ALTER TABLE sumsPayment ADD PRIMARY KEY(AGENT_CODE);

-- Check the ID and commission of the agent with the smallest payment.
SELECT 
    sumsPayment.AGENT_CODE,
    agents.COMMISSION
FROM
    sumsPayment,
    agents
WHERE
    sumsPayment.AGENT_CODE = agents.AGENT_CODE
AND
    sumsPayment.PAYMENT = (SELECT MIN(PAYMENT) FROM sumsPayment);

-- Reduce the commission of the agent with the smallest total payment
UPDATE
    agents
SET
    COMMISSION = COMMISSION - .02
WHERE
    AGENT_CODE = (
        SELECT
            AGENT_CODE
        FROM
            sumsPayment
        WHERE
            PAYMENT = (SELECT MIN(PAYMENT) FROM sumsPayment)
    );

-- Check the ID and commission of the agent with the smallest payment again.
SELECT 
    sumsPayment.AGENT_CODE,
    agents.COMMISSION
FROM
    sumsPayment,
    agents
WHERE
    sumsPayment.AGENT_CODE = agents.AGENT_CODE
AND
    sumsPayment.PAYMENT = (SELECT MIN(PAYMENT) FROM sumsPayment);
