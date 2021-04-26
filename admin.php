<?php

require './header.php';

$loggedIn = false;

if ($_POST) {

    
    if ($_POST['username'] == 'admin' || $_POST['pass'] == 'admin') {
        $loggedIn = true;
    } else {
        $error = 'username or password is not correct';
    }
}

if (!$loggedIn) {

?>
    <form action="" method="post">
        username: <input type="text" name="username" id="username">
            <br>
        password: <input type="password" name="pass" id="pass">
            <br>
                <a class="login-error"><?= $error ?></a>
            <br>
        <input type="submit" value="login">
    </form>

<?php

} else {

?>

<div class="container">

</div>

<?php

}

require './footer.php';

?>