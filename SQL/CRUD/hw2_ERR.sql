/* 
<problem>
Write a update query to modified value for 'commission' is 'commission'-.02
for agents who have minimum payment amount of 'customer' table
 */

USE sql_test_asaka;

-- Check the ID and commission of the agent with the smallest payment.
UPDATE 
    agents
SET
    COMMISSION = COMMISSION - .02
WHERE
    AGENT_CODE = (
        SELECT
            AGENT_CODE
        FROM
            (
                SELECT
                    AGENT_CODE,
                    SUM(PAYMENT_AMT) AS PAYMENT_SUM
                FROM
                    customer
                GROUP BY
                    AGENT_CODE
            ) AS SUMS
        WHERE
            SUMS.PAYMENT_SUM = (
                SELECT
                    MIN(PAYMENT_SUM)
                FROM
                    SUMS
            )
    );


        


