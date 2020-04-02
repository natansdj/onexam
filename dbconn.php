<?php
        $host="localhost";
		$uname="aisysid_admin";
		$pas="aisysid2020";
		$db_name="aisysid_cman";
		$tbl_name="admin";

        mysql_connect("$host","$uname","$pas") or die ("KONEKSI KE DATABASE GAGAL");
        mysql_select_db("$db_name") or die ("cannot select db");
