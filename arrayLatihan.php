<?php
    function admin(){
        $atmin = array("Abhi","Wildan","Yonathan","Dimas");
        foreach ($atmin as $i) {
            if($i == "Dimas"){
                echo "Final Boss atmin ". $i ." Datang jiirr <br>";
            }
            else {
            echo "atmin yang datang ". $i ."<br>";
            }
        }
        echo "<br> <br>";
        var_dump ($atmin);
        echo "<br> <br>";
        print_r($atmin); 
    }
   
    function tugas(){
        $electronic = array("Monitor","CPU","Keyboard");
        for ($a = 0; $a < count($electronic); $a++) {
            echo "<br> <br> Barang Electronics : ". $electronic[$a];
        }
    }
   
    function student() {
        echo "<br><br>";
        $students = [ [
            "Nama" => "Abhi",
            "Nim" => "235354005",
            "Kelas" => "2 A"
        ] ,
        [
            "Nama" => "Wildan",
            "Nim" => "235354005",
            "Kelas" => "2 A"
        ]
    ];
        foreach ($students as $key) {
            echo "Nama : ". $key["Nama"] . "<br>";
            echo "Nim : ". $key["Nim"]. "<br>";
            echo "Kelas : ". $key["Kelas"]. "<br><br>";
        }
    }
    echo admin();
    echo tugas();
    echo student();
?>