<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("filter",$con);
    $query=mysql_query("select * from tabel where product LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['product'];
    }
    echo json_encode($array);
?>
