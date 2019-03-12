<?php
include "../Data/connect.php";
$nome = null;
$id = null;
mysqli_query($link, "update tb_login set nome ='$nome' WHERE id_login = $id");

?>