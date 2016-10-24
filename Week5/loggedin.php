<?php

session_start();
$accesslevel = $_COOKIE['access_level_cookie'];

displayAccessLevelInformation($accesslevel);

function displayAccessLevelInformation($accessLevel)
{
    if($accessLevel == "standarduser"){
        echo "<p style = \"background-colour: lightgreen\">You are currently logged in as a standard user</p>";
    }
    elseif($accessLevel == "root"){
        echo"<p style = \"background-colour: red\">You are currently logged in as a root user</p>";
        echo"<p style = \"background-colour: red\">You now have access to additional features</p>";
    }
}
/**
 * Created by PhpStorm.
 * User: 1405466
 * Date: 24/10/2016
 * Time: 14:27
 */