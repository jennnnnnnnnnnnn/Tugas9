<?php

    require_once('animal.php');
        class animal2 extends animal{
            public $nama = "Kera Sakti";
            public $kaki = 2;
            public $darah = "No";
            public $yell = "Auooo";

            public function yell(){
                echo "Yell : Auooo";

            }

    }
?>