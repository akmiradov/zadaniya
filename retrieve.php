<?php


        $sid=$_POST["idd"];
        echo "Your selected ID is: ".$sid."<br>";
        $soed = mysqli_connect('localhost', 'root', ''); // soedenit etdim
        mysqli_select_db($soed,"test_db"); // shol soedeneniye boyunca test_db baza dannyh sayladym   
        $tab = "SELECT * FROM ulanyjylar WHERE (ID2='$sid')";
        $q = mysqli_query($soed,$tab);
        $netije = mysqli_fetch_array($q);
        echo $netije['id'];
        mysqli_close($soed);
       

?>       