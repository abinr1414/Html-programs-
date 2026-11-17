<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

echo "<br><h2 align='center'>CONNECTION SUCCESSFUL!</h2>";

if (isset($_POST['submit']))
{
    $ano = $_POST['ano'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $ed = $_POST['edition'];
    $pub = $_POST['publisher'];

    $query = "INSERT INTO book
    (ano, title, author, edition, publisher)
    VALUES (?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param(
        $stmt, "sssss", $ano, $title, $author, $ed, $pub
    );

    if (mysqli_stmt_execute($stmt))
    {
        echo "SUBMITTED SUCCESSFULLY";
    }
    else
    {
        echo "ERROR: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);

?>