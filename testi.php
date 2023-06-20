<?php  
require 'func.php' ;
$data = $_GET['norek'];
$muncul = tampil("SELECT * FROM bukti WHERE norek =$data")[0] ; 


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }

    .bukti-pembayaran {
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: left;
        box-shadow: 2px 2px 2px 2px  rgba(0, 0, 0, 0.286);
    }

    .bukti-pembayaran h2 {
        color: #333;
        margin-bottom: 10px;
        text-align: center;
    }

    .bukti-pembayaran p {
        margin-bottom: 5px;
        text-align: left;
    }
    button{
        background-color: aquamarine;
        border-radius: 4px;
        padding: 10px;
        margin-top: 90px;
    }
    button a{
        color: black;

        font-family: Arial, Helvetica, sans-serif;
        margin-top: 10px;
    }
</style>

<div class="bukti-pembayaran">
    <h2>Bukti Pembayaran</h2>
    <p><strong>Nama Pembeli:</strong> <?= $muncul['pembeli'] ?></p>
    <p><strong>Nominal Transfer:</strong> <?= $muncul['nominal'] ?></p>
    <p><strong>Nomor Rekening:</strong> <?= $muncul['norek'] ?></p>
    <p><strong>Properti:</strong> <?= $muncul['property'] ?></p>
    <h4>Thank you, for buying properti !</h4>
    
    <button><a href="index.php">back to dashboard</a></button>
</div>

</body>
</html>