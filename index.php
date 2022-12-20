<?php

echo "Hello Azure!";
$e = getenv("TESTING123");
echo $e;
$connString = MYSQLCONNSTR_defaultConnection;
echo $connString;