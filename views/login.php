<form method="post">
    Seu numero:<br>
    <input type="text" name="number"> <br><br>

    Sua senha:<br>
    <input type="password" name="password"><br><br>

    <input type="submit" value="entrar">
</form>


<?php if(!empty($msg)): ?>
<h2><?php echo $msg; ?></h2>
<?php endif ?>