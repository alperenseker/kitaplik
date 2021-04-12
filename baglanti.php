<?php

$connect= pg_connect("host=localhost port=5432 dbname=kitaplik user=postgres password=alperen") or die ("Bağlantı Hatası".pg_last_error());

if(!$connect){
 echo "Sunucuya bağlanılamadı";
}

?>
