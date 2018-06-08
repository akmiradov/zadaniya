<?php 
     $r=rand(0,100);
     echo "Random number is: ".$r."<br>";
     $soed = mysqli_connect('localhost', 'root', ''); // soedenit etdim
     mysqli_select_db($soed,"test_db"); // shol soedeneniye boyunca test_db baza dannyh sayladym   
     $tab = "SELECT * FROM ulanyjylar WHERE (id='$r')";
     $q = mysqli_query($soed,$tab);
     $netije = mysqli_fetch_array($q);
     echo $netije['ID2'];
     mysqli_close($soed);
     ?>