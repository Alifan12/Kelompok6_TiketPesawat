<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>Sign In</title>
  </head>
 
  <body>
      <div class="container">
        <div class="row justify-content-md-center">
 
            <div class="col-6">
                <h1>Sign In</h1>
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                <form action="/loginController/auth" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" value="<?= set_value('username') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <p>
                    Belum punya akun? Buat disini
                    <a href="/RegisterController"></a>

                </p>
            </div>
             <div id="pwOut"></div>
        </div>
    </div>
    <script>
        var pw=document.getElementById('password').value;
        console.log(password);
        document.getElementById('pwOut').innerHTML=pw;
    </script>


  </body>
</html>
