<?php include('header_no_login.php'); ?>
<div class="container">
    <h2>Log in</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" class="login__input" placeholder="Enter your username">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password"name="password" class="login__input" placeholder="Enter your password">
        <br>
        <input type="submit" value="Submit">
    </form>
</div>
<?php include('footer.php'); ?>