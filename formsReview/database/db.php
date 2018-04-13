<?php


    // this is our datalayer
    function getConnection(){
        $pass = 'StarFighter64';
        $user = 'areynold_db_user';
        $host ='localhost';
        $database = 'areynold_it328';

        $connection = mysqli_connect($host, $user, $pass, $database);

        if(!$connection){
            echo 'Error connection to DB';
            exit;
        }
        return $connection;

    }

function getMessages() {
    $connection = getConnection();
    //query for message records
    $query = 'SELECT id, body FROM messages';
    $results = mysqli_query($connection, $query);
    if (!$results) {
        echo 'Error retrieving records.';
        exit;
    }
    $records = array();
    while ($row = mysqli_fetch_assoc($results)) {
        $records[] = $row;
    }
    //free up server resources
    mysqli_free_result($results);
    return $records;
}
function insertMessage($message) {
}
?>