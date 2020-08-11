<?php
require('header.php');
?>
        <div id="grid_content">
                <div class="main_content">
                        <?php require('menu.php'); ?>
                        <h1>Admin</h1>
                         <form action="index.php" method="post">

                          <div class="container">
                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <button type="submit">Login</button>
                          </div>
                        </form>
                </div>

<?php require('sidebar.php'); ?>
</div>

<?php
require('footer.php');
?>
