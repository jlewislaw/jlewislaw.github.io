<?php
if($_POST["message"]) {
    mail("carolynpepsi@gmail.com", "Form to email message", $_POST["message"], "From: carolynpepsipromo@gmail.com");
}
?>
