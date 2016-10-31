<?php
/*
SELECT DISTINCT
    columns
FROM
    table_name
WHERE
    where_conditions;
    http://www.mysqltutorial.org/mysql-distinct.aspx
*/

$sql = 'SELECT DISTINCT nombre FROM post';
$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)) {
    echo "<option value='".$row[$i]."'>".$row[$i].'</option>';
}
