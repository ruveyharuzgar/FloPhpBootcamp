<?php
session_start();
if ($_SESSION["user"] != sha1(md5("ruveyharuzgar")) || $_COOKIE["user"] != "ruveyharuzgar") {
    header("cikis.php");
}