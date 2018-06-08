<?php

function makeid($len){
    $totid='';
    while (strlen($totid)<$len)
    {
     $r=rand(0,1);
      if ($r==0) { 
          $r=rand(0,9);
          $c=$r;
      } else { 
          $r=rand(0,25);
       $c=chr(65+$r);
      }
     $totid.=$c; 
    }
return $totid;
}



 function bdDoret($host,$port,$ulanyjy,$parol,$bd_ady)
{
   $conn = mysqli_connect($host, $ulanyjy, $parol);
   
   if(! $conn ) {
      die('Serwere baglanmada näsazlyk ýüze çykdy!: ' . mysqli_error());
   }
             
   $sql = 'CREATE DATABASE IF NOT EXISTS '.$bd_ady;
   $retval = mysqli_query( $conn,$sql );
   
   if(! $retval ) {
     return false;
   }
   
   return true;
   mysqli_close($conn);
}




function tabDoret($ady,$bdady,$host,$log,$pas){
    $kom= "CREATE TABLE IF NOT EXISTS $ady (
        id VARCHAR(6) NOT NULL,
        ID2 VARCHAR(6) NOT NULL            
        )";
 $soed = new mysqli($host, $log, $pas, $bdady);
 $soed->query($kom);
 $soed->close();
}




?>