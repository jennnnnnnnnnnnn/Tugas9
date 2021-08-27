<?php

    require_once('animal.php');

    class animal1 extends animal{
        public $nama = "buduk";
        public $kaki = 4;
        public $darah = "No";
 
        public function jump()
            {
                echo "Jump : Hop Hop";
            }
        }
?>