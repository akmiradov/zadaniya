<?php
include 'funk.php';

function testUcinDoret()
{
    $bdan = mysqli_connect("localhost", "root", "");
    bddoret("localhost", "", "root", "", "test_db");
    tabdoret('ulanyjylar', 'test_db', 'localhost', 'root', '');
}

echo "Baza dannyh döredildi!";
