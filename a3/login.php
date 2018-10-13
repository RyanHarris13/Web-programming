<!DOCTYPE html>
<html lang='en'>
<?php
    session_start();
    include_once('tools.php');
    topModule('Exit and Bond cleaning- Home');
        ?>
<h2>Login Page</h2>
<div class="Login">
    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post" target="_blank">
        <div class="imgcontainer">
            <img src="../../media/img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <p><b>Username:</b></p>
            <label for="uname"></label>
            <input type="email" placeholder="Enter Email" name="email" required>
            <p><b>Password:</b></p>
            <label for="password"></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br>
            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

    </form>
</div>

<article id='Front page things'>

    <img src='../../media/' alt='' />
</article>
<?php
endModule();
?>
