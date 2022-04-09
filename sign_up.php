<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    /*// Inkripcija gesla
    $hashFormat = "$2y$10$";

    $salt = "22randomznakov12345678";

    $hashF_and_salt = $hashFormat . $salt;

    $password = crypt($password, $hashF_and_salt);
    //
*/
    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        $user_id = random_num(20);
        $query = "INSERT into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

        mysqli_query($connection, $query);
        header("Location: log_in.php");
        die;
    } else {
        echo "Prosimo vnesite potrebne podatke.";
    }
}
?>


<?php include "header.php" ?>

<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <h1>MY<br>PORTFOLIO</h1>
            </a>
        </div>
        <div class="header_nav">
            <ul>
                <li><a href="my_acc.php">Moj račun</a></li>
                <li><a href="sign_up.php">Registracija</a></li>
                <li><a href="log_in.php">Vpis</a></li>
                <li><a href="log_out.php">Izpis</a></li>
            </ul>
        </div>
    </header>
    <div id="box">
        <div style="font-size: 20px; margin:10px">Registracija</div>
        <form action="" method="POST">
            <input id="text" type="text" name="user_name"><br><br>
            <input id="text" type="password" name="password"><br><br>
            <input id="button" type="submit" value="Registracija"><br><br>
            <a id="klikni" href="log_in.php">Klikni za Vpis</a><br><br>
        </form>
    </div>

</body>

</html>
<?php include "footer.php" ?>