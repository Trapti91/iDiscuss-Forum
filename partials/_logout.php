<?php
session_start();
echo "Logging you in out. Please wait....";

session_destroy();
header("Location: /forum");
?>