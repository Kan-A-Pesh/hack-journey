<?php

if (!isset($_GET["index"])) die("error");
if (!isset($_GET["value"])) die("error");

$value = $_GET["value"];
switch ($_GET["index"]) {
    case "ch01":
        if ($value == "Tr0p_F4cile") die("success");
        break;
    case "ch02":
        if ($value == "PasLeCodeDansLeJS!!!!!") die("success");
        break;
    case "ch03":
        if ($value == "Encore?Comment??") die("success");
        break;
    case "ch04":
        if ($value == "SQL_1nj3ct10n_4dm1n") die("success");
        break;
    case "ch05":
        if ($value == "4ut0m4t1c_r3p0rt1ng_1s_4w3s0m3") die("success");
        break;
}

die("error");
