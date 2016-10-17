<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <title>Superhero System</title>
    </head>
        <body>
            <header>
                <h1>The Super-Superhero System</h1>
                <h2>Seprhero Home PAe</h2>
            </header>
            <p>What would you like to do?</p>
            <ul>
                <li><a href="insertSuperhero.php">Insert a Superhero</a> </li>
                <li><a href="displaySuperheros.php">Display all Superhero</a> </li>
                <li><a href="battle.php">Insert a Battle</a> </li>
                <li><a href="displayBattles.php">Display all Superhero</a> </li>
                <ul>
                <?
                    include ("db_connect.php");
                    $sql_query = "SELECT * FROM superheros";
                    $result = $db->query($sql_query);
                    while($row = $result->fetch_array());
                    {
                        $firstname = $row['firstName'];
                        $lastname = $row['lastName'];
                        $id = $row['superheroID'];
                        echo"<li> <a href='displayBattles.php?id={$id}'>Battles for {$firstname} {lastname} </a></li>";
                    }
                ?>
                </ul>
            </ul>
        </body>

</html>


/**
 * Created by PhpStorm.
 * User: 1405466
 * Date: 03/10/2016
 * Time: 15:06
 */