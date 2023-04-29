<?php
error_reporting(E_ERROR | E_PARSE);
include "db_conn.php";

// ---------------Creating Database---------------
// $sql = "CREATE DATABASE Todo";
// $query = mysqli_query($conn, $sql);
// if($query){
//     echo "created database <br>";
// }else{
//     echo "could not create database <br>";
// }

// --------------Creating Table-------------------
// $sql = "CREATE TABLE notes(
//     ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     TITLE VARCHAR(30) NOT NULL,
//     DESCRIPTIONS VARCHAR(200) NOT NULL 
// )";
// $query = mysqli_query($conn, $sql);
// if($query){
//     echo "table created";
// }else{
//     echo "failed to create table";
// }


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $noteTitle = $_POST['name_title'];
    $noteDescription = $_POST['name_description'];
    $addNote = $_POST['name_add'];
    $displayNumOfNotes = $_POST['name_displayNum'];
    $displayNotes = $_POST['name_display'];


    // ------------Inserting Into Table-----------------
    if (isset($addNote)) {
        $sqlInsert = "INSERT INTO notes(title, descriptions) values('$noteTitle', '$noteDescription')";
        $query = mysqli_query($conn, $sqlInsert);
        if ($query) {
            echo "successfully inserted into table<br>";
            header("location: index.php");
        } else {
            echo "could not insert data into table<br>";
        }
    }
}

// ---------Editing the table-----------------------
    $edit = $_POST['name_edit'];
    $delete = $_POST['name_delete'];
    if(isset($edit)){
        echo 
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h2>Add Note</h2>
    <form action="./index.php" method="post">
        <label for="title">Note Title: </label>
        <input type="text" name="name_title" id="title">
        <label for="description">Note Description: </label>
        <textarea name="name_description" id="description"></textarea>
        <button id="add-note" name="name_add">Add Note</button>
        <p>
            <button name="name_display" id="display-button">Show</button>
            <input type="number" name="name_displayNum">
            <span>Entries</span>
        </p>

    </form>
    <div class="notes-list">
        <form action="./index.php" method="post">
        <button class="edit-note" name="name_edit">Edit</button>
        <button class="delete-note" name="name_delete">Delete</button>
        </form>
        <?php
            if (isset($displayNotes) and $displayNumOfNotes > 0) {
                $selectsql = "SELECT * FROM NOTES LIMIT " . $displayNumOfNotes;
                $query = mysqli_query($conn, $selectsql);
                while ($row = mysqli_fetch_assoc($query)) {
                    echo "<div>" . $row['ID'] . "<br>" . $row['TITLE'] . "<br>" . "</div>";
                }
            } else {
                $selectsql = "SELECT * FROM NOTES";
                $query = mysqli_query($conn, $selectsql);
                while ($row = mysqli_fetch_assoc($query)) {
                    echo "<div>" . $row['ID'] . "<br>" . $row['TITLE'] . "<br>" . "</div>";
                }
            }
        ?>
    </div>
</body>

</html>