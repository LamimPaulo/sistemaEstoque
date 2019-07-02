<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?php echo BASE_URL?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL?>assets/font/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL?>assets/css/Login.css">
    <link rel="stylesheet" href="<?php echo BASE_URL?>assets/css/styles.css">
</head>

<body>
    <!-- Start: Login screen -->
    <div id="login-one" class="login-one">
        <form class="login-one-form" method="POST">
            <div class="col">
                <div class="login-one-ico"><i class="fa fa-unlock-alt" id="lockico"></i></div>
                <div class="form-group">
                    <div>
                        <h3 id="heading">Entrar:</h3>
                    </div><input class="form-control" type="text" id="input" placeholder="Seu numero" name="number">
                    <input class="form-control" type="password" id="input" placeholder="Sua Senha" name="password">
                    <button class="btn btn-primary" id="button" style="background-color:#007ac9;"
                        type="submit">Entrar</button></div>
            </div>
        </form>
        <?php if(!empty($msg)): ?>
            <div class="alert alert-warning beautiful" role="alert">
                <div>
                    <strong>Oops!   </strong><?php echo $msg; ?>
                </div>        
            </div>
        <?php endif ?>
        </div>    
        <!-- End: Login screen -->
        
    <script src="<?php echo BASE_URL?>assets/js/jquery.min.js"></script>
    <script src="<?php echo BASE_URL?>assets/js/bootstrap.min.js"></script>
</body>

</html>