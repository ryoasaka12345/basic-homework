/* 
To get the columns 'woring_area', average 'commission' and number of agents
for each group of 'working_area' from the ' agents' table with the
following condition:
number of agents for each group of 'working_area' mus be less than 3

 */
USE sql_test;

SELECT
    working_area,
    avg(commission) AS AVG,
    count(agent_name) AS CNT
FROM
    agents
GROUP BY
    working_area
HAVING
    CNT < 3
ORDER BY
    AVG, CNT DESC;
