<?php
session_start();
include("connection.php");
include("functions.php");

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
    <div class="main">
        <div class="pie" data-pie="#fab484 5, #fe8e3f 3, #f96b07 3, #b45919 3, #7f4319 1"></div>
        <div class="cta">
            <h2>Ustvari si svoj<br> finančni portfelj</h2>
        </div>
    </div>
    <script src="app.js"></script>

</body>

</html>
<?php include "footer.php" ?>