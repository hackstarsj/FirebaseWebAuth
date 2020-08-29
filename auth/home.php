<?php
session_start();
echo "<h1>Welcome ";
echo $_SESSION["email"];
echo "Login Successfull </h1>";