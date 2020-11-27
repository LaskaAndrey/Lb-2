<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully with db";

// Делаем выборку из таблицы.
$sql_roles = "SELECT * FROM `roles`";
$result_select = mysqli_query($conn, $sql_roles);

    echo "<select role>";
    echo "<option value='0'>Выбор</option>";
        while($object = mysqli_fetch_object($result_select)){
echo "<option value = '$object->id' > $object->tittle </option>";}
    echo "</select>";

$sql = "SELECT * FROM `users`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $conn -> query ("INSERT INTO users (first_name, last_name, password, login, id_role)
     VALUES ('$_POST[first_name]', '$_POST[last_name]','$_POST[password]','$_POST[login]', 1)");
     echo '<br><br> You are registrated successfuly!!! <br>';
}
?>