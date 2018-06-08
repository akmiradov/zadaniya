<?php
 include 'funk.php';

 function testUcinDoret(){
    
    $bdan=mysqli_connect("localhost","root","");
           bddoret("localhost","","root","","test_db");
   tabdoret('ulanyjylar','test_db','localhost','root','');
mysqli_select_db($bdan,"test_db");

   for ($i = 1; $i <= 100; $i++){
   $id=makeid(6);
$bid=strval($i);
    $kom = "INSERT INTO ulanyjylar VALUES ('$bid','$id')";

    mysqli_query($bdan,$kom);
     }
    mysqli_close($bdan);
    }

    testucindoret();
    echo "100 adamlyk baza dannyh döredildi!";

?>