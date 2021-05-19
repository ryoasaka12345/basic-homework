USE sql_test;

/* 
<problem>
1.  Create a new table like as agents table `new_agents`.
2.  Insert records into `new_agents` table from `agents` table
    with the folowing condition:
        - `WORKING_AREA` of `agents table must be `London`
        - `CUST_COUNTRY` of `customer` table must be `UK`
*/
DROP TABLE IF EXISTS `new_agents`;

CREATE TABLE new_agents AS
    SELECT DISTINCT agents.*
    FROM  agents, customer
    WHERE
        agents.WORKING_AREA = 'London'
        AND
        agents.AGENT_CODE = customer.AGENT_CODE
        AND
        customer.CUST_COUNTRY = 'UK';

SELECT * FROM new_agents;
