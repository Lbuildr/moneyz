<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>USER-TOEVOEGEN</title>
</head>

<body>

    <?php

    // importeer
    include_once 'Database.php';

    if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $sql = "INSERT INTO user VALUES (:code, :Username, :Password)";

        //associative array
        $placeholders = [
            'code' => NULL,
            'Username' => $_POST['Username'],
            'Password' => $_POST['Password']
        ];

        $db = new database();
        $db->insert($sql, $placeholders, 'moneyz.php');
    }
    ?>

    <form class="nieuwUser" action="nieuw_User.php" method="post">
        <input class="input" type="text" name="Username" placeholder="Username">
        <input class="input" type="text" name="Password" placeholder="Password">
        <input class="voegtoe" type="submit" name="submit" value="Aanmelden">
    </form>

</body>