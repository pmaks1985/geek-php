<?php
const SERVER = "localhost";
const DB = "catalogdata";
const LOGIN = "root";
const PASS = "root";

$connect = mysqli_connect(SERVER, LOGIN, PASS, DB);
if (mysqli_connect_errno()) {
    die("Connect filed:".mysqli_connect_error());
}
