<?php
    require_once('animal.php');
    require_once('animal1.php');
    require_once('animal2.php');

    $sheep = new animal();
    echo "Nama :" .$sheep->nama. "<br>";
    echo "legs :" .$sheep->kaki. "<br>";
    echo "cold blooded :" .$sheep->darah. "<br><br>";

    $buduk = new animal1();
    echo "Nama :" .$buduk->nama. "<br>";
    echo "legs :" .$buduk->kaki. "<br>";
    echo "cold blooded :" .$buduk->darah. "<br>";
    echo $buduk->jump(). "<br><br>";

    $kera = new animal2();
    echo "Nama :" .$kera->nama. "<br>";
    echo "legs :" .$kera->kaki. "<br>";
    echo "cold blooded :" .$kera->darah. "<br>";
    echo $kera->yell(). "<br>";

?>