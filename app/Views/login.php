
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SignUp</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
  <style>
    #sinsc:hover {text-decoration:none !important;}
    #conx:hover {border-radius:5px !important;}
  </style>
	<!--Bootsrap JS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="<?= base_url(); ?>/public/assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body >
<?php include_once "navbar.php"; ?>
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="https://dummyimage.com/620x520/000/aaa" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-5" style="margin-top:60px">
              <h3>Se connecter</h3>
              <p class="mb-4">Connectez vous pour finaliser vos achats !</p>
            </div>
            <form action="auth" method="post">
							<?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
              <div class="form-group mb-5">
                <input type="email" class="form-control" placeholder="Email" id="email" name="email">
              </div>
              <div class="form-group mb-5" >
                <input type="password" class="form-control" placeholder="Mot de passe" name="password" id="password">
              </div>
			  <div class="mb-4">
				<a id="sinsc" style="color:black;" href="./inscription">S'<b>INSCRIRE</b></a>
              </div>
              <input type="submit" value="Connexion" style="background-color: #000;width:100%;color:white;border-radius:0px;" id="conx" class="btn btn-block">
                </a>
              </div>
            </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
