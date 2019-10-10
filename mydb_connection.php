<?php
$conn = mysqli_connect('localhost', 'deyaa', '123456', 'my_db');


if(!$conn){
echo 'error in connection: '. mysqli_connect_error();
}
?>