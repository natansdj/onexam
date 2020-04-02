<?php
$host="mysql";
		$uname="dev";
		$pas="secret";
		$db_name="dev_exam";
		$tbl_name="student";
		
		mysql_connect("$host","$uname","$pas") or die ("cannot connect");
		mysql_select_db("$db_name") or die ("cannot select db");
		?>