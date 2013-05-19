<?php
    $url=parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"],1);
    echo '1';
    mysql_connect('localhost', 'root','');
    echo '2';
    mysql_select_db('people');
    $rs=mysql_query("select * from people" );
    while($dat=mysql_fetch_assoc($rs)){echo "[id]:".$dat["id"]." [name]:".$dat["name"]."<br />";};


