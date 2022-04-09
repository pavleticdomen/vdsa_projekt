<?php
session_start();
include "connection.php";
include "functions.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        $query = "SELECT * FROM users WHERE user_name = '$user_name' limit 1";

        $result = mysqli_query($connection, $query);


        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: my_acc.php");
                    die;
                }
            }
        }
        echo "<script type='text/javascript'>alert('Napačno uporabniško ime ali geslo.')</script>";
    } else {
        echo "<script type='text/javascript'>alert('Napačno uporabniško ime ali geslo.')</script>";
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
        <div style="font-size: 20px; margin:10px">Vpis</div>
        <form action="" method="POST">
            <input id="text" type="text" name="user_name"><br><br>
            <input id="text" type="password" name="password"><br><br>
            <input id="button" type="submit" value="Vpiši me"><br><br>
            <a id="klikni" href="sign_up.php">Klikni za Registracijo</a><br><br>
        </form>
    </div>
</body>

</html>
<?php include "footer.php" ?>