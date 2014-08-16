<?php
 $hostname = "localhost";
 $user = "darasart_subiect";
 $password = "3XIvY1GA3";
 $dbname = "darasart_subiectum";
mysql_connect($hostname,$user,$password) or die("cannot connect database");
mysql_select_db($dbname) or die("cannot connect table <br>");
mysql_query("SET NAMES UTF8");
mysql_query("SET character_set_results=utf-8");
mysql_query("SET character_set_client=utf-8");
mysql_query("SET character_set_connection=utf-8");
?>