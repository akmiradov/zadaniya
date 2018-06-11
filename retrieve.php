<?php

function retrieve()
{

    $id_json = json_decode(file_get_contents('php://input'));
    $id = ($id_json->id2);
    echo "Your selected ID is: " . $id . "<br>";
    $conn = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conn, "test_db");
    $command = "SELECT * FROM User_IDS WHERE (ID2='$id')";
    $query = mysqli_query($conn, $command);
    $result = mysqli_fetch_array($query);
    $json_result = json_encode(array('id' => $result['id']));
    mysqli_close($conn);
    return $json_result;

}

$ret = retrieve();
echo $ret;
