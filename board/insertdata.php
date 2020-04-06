<?php
	include "db_connect.php";

	$query = "CREATE TABLE board
					(
					 id int(10) unsigned not null auto_increment primary key,
					 name varchar(20) not null,
					 email varchar(30) null,
					 password varchar(12) not null,
					 title varchar(70) not null,
					 content text not null,
					 writedate datetime not null,
					 ip varchar(15) not null,
					 viewcount int(10) not null default 0
					)";
	$db->query($query);


?>

