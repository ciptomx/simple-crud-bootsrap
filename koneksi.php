<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

mysql_connect("localhost", "root", "root");
mysql_select_db("admin");
?>