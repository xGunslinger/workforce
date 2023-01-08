<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Workforce</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <h2>Login in</h2>
            <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif;?>
            <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                <div class="form-group mb-3">
                    <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control" >
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">SignIn</button>
                </div>
<!--                <br/> -->
<!--                <div class="d-grid" >-->
<!--                    <a class="btn btn-success" href = "https://www.youtube.com/watch?v=5wY6SyKBi5U&ab_channel=m00nsterz">Войти в камеру</a>-->
<!--                </div>-->
            </form>
        </div>
    </div>
</div>
</body>
</html>
