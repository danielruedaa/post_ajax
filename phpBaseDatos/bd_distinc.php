
 <?php
 // http://jjmojicamysql.blogspot.com.co/2012/05/37-registros-duplicados-distinct.html
 //  nombre="camila erz"
include 'Conexion.php';
echo 'entro';
$sql = 'SELECT DISTINCT nombre FROM post';
$consulta = mysql_query($sql);

    $result = $con->query($consulta);
$rows = array();
while ($row = mysqli_fetch_array($result)) {
    $rows[] = array(
       'name' => $row['nombre'],
    );
}
echo '<pre>';
print_r($rows);

echo '</pre>';
