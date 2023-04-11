<?php
$to = "libourki.fst@uhp.ac.ma";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: libourki.fst@uhp.ac.ma" . "\r\n" .
"CC: talibi.fst@uhp.ac.ma";
mail($to,$subject,$txt,$headers);
?>