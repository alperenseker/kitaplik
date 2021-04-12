<?php header("Location: iletisim.html"); 

include("baglanti.php");

$adi=$_POST['adi'];
$e_mail=$_POST['e_mail'];
$baslik=$_POST['baslik'];
$mesaj=$_POST['mesaj'];


$sql="INSERT INTO public.iletisim(adi, e_mail, baslik, mesaj) VALUES('$adi','$e_mail','$baslik','$mesaj')";

$kontrol=pg_query($connect, $sql);


?>    