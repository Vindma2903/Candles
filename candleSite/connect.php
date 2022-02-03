<?php

$par1_ip="localhost";
$par2_name = "root";
$par3_password = "root";
$par4_bd="candlebd";

$induction = mysqli_connect ($par1_ip, $par2_name, $par3_password, $par4_bd);

if ($induction == false) {

echo "Ошибка подключения !";

}

else {
  echo "Подключение удалось !";
}

 ?>
