<?php
session_start();
unset($_SESSION['ACCESS_TYPE']);
header("location: ../");
die();
