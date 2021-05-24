USE sql_test_asaka;

/* 
To get the columns 'woring_area', average 'commission' and number of agents
for each group of 'working_area' from the ' agents' table with the
following condition:
number of agents for each group of 'working_area' mus be less than 3

 */

SELECT
    working_area,
    avg(commission),
    count(agent_name)
FROM
    agents
GROUP BY
    working_area
HAVING
    count(agent_name) < 3
ORDER BY
    2, 3 DESC;
