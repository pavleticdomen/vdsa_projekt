<?php
session_start();
include "connection.php";
include "functions.php";

$user_data = check_login($connection);

?>
<?php include "header.php" ?>

<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <h1>MY<br>PORTFOLIO</h1>
            </a>
        </div>
    </header>
    <div class="moj_racun">
        <div class="osebno">
            <h1>Moj račun</h1>
            <img class="avatar_pic" src="slike/29213195-male-silhouette-avatar-profile-picture.webp" alt="avatar-pic" width="100" height="100">
            <h2>ID: <?php echo $user_data['id']; ?></h2>
            <h2>Uporabniško ime: <?php echo $user_data['user_name']; ?></h2>
            <p class="opozorilo">ID je potreben za izbris ali posodobitev računa.</p>
        </div>
        <div class="navigacija_profil">
            <ul>
                <li>
                    <a href="update_acc.php">Zamenjaj geslo</a>
                </li>
                <li>
                    <a href="delete_acc.php">Izbris računa</a>
                </li>
                <li>
                    <a href="log_out.php">Izpis</a>
                </li>
            </ul>
        </div>
    </div>

</body>

</html>

<?php include "footer.php" ?>