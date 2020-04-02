<?php
        $host="mysql";
		$uname="dev";
		$pas="secret";
		$db_name="dev_exam";
		$tbl_name="admin";

        mysql_connect("$host","$uname","$pas") or die ("KONEKSI KE DATABASE GAGAL");
        mysql_select_db("$db_name") or die ("cannot select db");
