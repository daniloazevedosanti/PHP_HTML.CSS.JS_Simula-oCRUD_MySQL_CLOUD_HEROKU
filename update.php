<?php
include "connect.php";

mysqli_query($link, "update tb_login set nome ='$nome' WHERE id_login = $id");

?>