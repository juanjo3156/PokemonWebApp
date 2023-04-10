<?php include('header_no_login.php'); ?>
<div class="container">
    <h2>Sign up</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" class="login__input" placeholder="Enter your username">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password"name="password" class="login__input" placeholder="Enter your password">
        <input type="password" id="password"name="password2" class="login__input" placeholder="Repeat your password">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" class="login__input" placeholder="Enter your email">
        <input type="submit" value="Submit">
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