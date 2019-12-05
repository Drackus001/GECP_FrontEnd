<?php
$HOST = "localhost";
$USERNAME = "gecp";
$PASSWORD = "gecp123";
$DB_NAME = "gecp_db";

$CONN = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DB_NAME);
if ($CONN) {
    echo 'Connection ok';
} else {
    echo 'Connection Failed';
}
