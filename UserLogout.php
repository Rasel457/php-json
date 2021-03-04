<?php
   SESSION_START();
   session_destroy();
   header('Location:Registration.html');
   exit;

?>