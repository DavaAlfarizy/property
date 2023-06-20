<?php 
$server = mysqli_connect("localhost", "root", "", "db_project");

function tampil($bebas) {
    global $server;
    $result= mysqli_query($server, $bebas);
    $barus=[];

    while($baru=mysqli_fetch_assoc($result)){
        $barus[]=$baru;
    }
    return $barus;
}

?>