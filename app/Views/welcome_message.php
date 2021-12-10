
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="<?= base_url(); ?>/public/assets/css/style.css" rel="stylesheet" type="text/css">
<?php include_once "navbar.php"; ?>
<?php
$session = session();
echo "Welcome back, ".$session->get('name');
?>
    <form action="logout" method="post">
        <input type="submit" value="logout" class="btn btn-danger mt-3" />
    </form>    
<html>