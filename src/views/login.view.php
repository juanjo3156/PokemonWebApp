<?php include('header_no_login.php'); ?>
<div class="container login">
    <h2>Log in</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" >
        <label for="username">Username</label>
        <div>
         <input type="text" id="username" name="username" class="login__input" placeholder="Enter your username">
        </div>
        <br>
        <label for="password">Password</label>
        <div>
        <input type="password" id="password" name="password" class="login__input" placeholder="Enter your password">
        </div>
        <br>
        <input class="login__btn"type="submit" value="Submit">
    </form>
    <?php if($error!=''):?>
        <div class="error">
            <ul>
                <?php echo $error?>
            </ul>
        </div>
    <?php endif;?>
</div>
<?php include('footer.php'); ?>