<?php include "connection.php"; ?>
<?php include "functions.php"; ?>
<?php update_table(); ?>
<?php include "header.php" ?>

<body>
    <div id="box">
        <div style="font-size: 20px; margin:10px">Posodobitev gesla</div>
        <form action="update_acc.php" method="POST">

            <label for="user_name">Uporabniško ime</label>
            <input id="text" type="text" name="user_name">


            <label for="password">Geslo</label>
            <input id="text" type="password" name="password">

            <br>
            <label for="id">ID</label>
            <select name="id" id="">
                <?php
                show_data();
                ?>
            </select>

            <br>
            <input id="button" type="submit" name="submit" value="POSODOBI">
        </form>
        <a id="nazaj" href="my_acc.php">Nazaj</a>
    </div>
</body>