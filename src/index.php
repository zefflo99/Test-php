<?php

if (isset($_POST["addButton"])) {
    $newNote = htmlspecialchars($_POST["inputName"]);

    if (file_exists('note.json')) {
        $notes = json_decode(file_get_contents('note.json'), true);
    }

    $notes[] = $newNote;
    file_put_contents('note.json', json_encode($notes));
    echo "Note added: " . $newNote;

} elseif (isset($_POST["deleteButton"])) {

    file_put_contents('note.json', '');
    echo "Content delete";
}

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Add Note</h1>
<form method="post" action="index.php">

    <label for="">
        <input type="text" name="inputName" />
    </label>
    <button type="submit" name="addButton">submit</button>

    <button type="submit" name="deleteButton">Delete</button>

</form>

</body>
</html>









