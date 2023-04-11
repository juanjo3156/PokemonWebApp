<?php include('header_no_login.php'); ?>
<div class="container login">
    <h2>Sign up</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" class="login__input" placeholder="Enter your username">
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password"name="password" class="login__input" placeholder="Enter your password">
        <input type="password" id="password"name="password2" class="login__input" placeholder="Repeat your password">
        <br>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="login__input" placeholder="Enter your email">
        <br>
        <br>
        <input class="login__btn" type="submit" value="Submit">
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