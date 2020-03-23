<?php
    include 'init.php';
    include $tpl . 'header.php';
?>
<form class="login">
    <h4 class="text-center">Welcome Sir ..!</h4>
    <input class="form-control input-lg" type="text" name="user" placeholder="Username" autocomplete="off"/>
    <input class="form-control input-lg" type="password" name="pass" placeholder="Password" autocomplete="new-password"/>
    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login"/>
</form>
<?php
    include $tpl . 'footer.php';
?>
