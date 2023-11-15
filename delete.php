<?php
include 'connection.php';
session_start();
$obj = new crud();
$obj->delete();
?>