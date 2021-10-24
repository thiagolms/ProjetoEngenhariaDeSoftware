<?php
session_start();
foreach ($_SESSION as $key => $value) {
    echo "$key => $value<br>";
}