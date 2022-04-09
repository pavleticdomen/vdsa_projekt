<?php include "connection.php"; ?>
<?php

function check_login($connection)
{
    if (isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];
        $query = " SELECT * from users where user_id = '$id' limit 1";

        $result = mysqli_query($connection, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location: log_in.php");
    die;
}


function random_num($length)
{
    $text = "";
    if ($length < 5) {
        $length = 5;
    }
    $len = rand(4, $length);
    for ($i = 0; $i < $len; $i++) {
        $text .= rand(0, 9);
    }
    return $text;
}

function show_data()
{

    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Poizvedba ni uspela!');
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function update_table()
{
    if (isset($_POST['submit'])) {
        //$id = $_POST['id'];
        global $connection;
        $id = '';
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        }
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];


        $query = "UPDATE users SET ";
        $query .= "user_name = '$user_name', ";
        $query .= "password = '$password' ";
        $query .= " WHERE id = $id ";


        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('<script type="text/javascript">alert("Posodobitev ni uspela!")</script>');
        } else {
            echo '<script type="text/javascript">alert("Posodobljeno.")</script>';
        }
    }
}


function delete_rows()
{
    if (isset($_POST['submit'])) {

        //$id = $_POST['id'];
        global $connection;
        $id = '';
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        }
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];


        $query = "DELETE FROM users ";
        $query .= " WHERE id = $id ";


        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('<script type="text/javascript">alert("Brisanje računa ni uspelo!")</script>');
        } else {
            echo '<script type="text/javascript">alert("Račun izbrisan.")</script>';
        }
    }
}
