<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	
	<link href="<?= base_url('codeigniter/public/assets/css/index.css'); ?>" rel="stylesheet" type="text/css">

	<title>Document</title>
</head>
<body>
	 <!-- Sidebar -->
	 <div id="sidebar-wrapper">

		<ul class="sidebar-nav">
		<li class="sidebar-brand">
				<a href="#">
				<i class="fa fa-user-md" aria-hidden="true"></i>&nbsp;Bienvenue yee
				</a>
			</li>
			<li class="sidebar-brand">
				<a href="#">
					<i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;Dashboard
				</a>
			</li>
			<li>
				<a href="#" class="hidden mb-4  mt-2">
					<i class="fa fa-line-chart" aria-hidden="true"></i>
				</a>
				<a href="/codeIgniter/public/loggedin" class="sidebar-brand"><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp;Offres</a>
			</li>
			<li>
				<a href="/codeIgniter/public/loggedin" class="hidden">
					<i class="fa fa-plus-square-o" aria-hidden="true"></i>
				</a>
				<a href="/codeIgniter/public/category" class="sidebar-brand"><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;Catégories</a>
			</li>
			<li>
				<a href="/codeIgniter/public/category" class="hidden">
					<i class="fa fa-file-text-o" aria-hidden="true"></i>
				</a>
				<a href="/codeIgniter/public/users" class="sidebar-brand"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Utilisateurs</a>
			</li>
			<li>
				<a href="/codeIgniter/public/users" class="hidden">
					<i class="fa fa-users" aria-hidden="true"></i>
				</a>
				<a href="/codeIgniter/public/newsletter" class="sidebar-brand"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;Newsletter</a>
			</li>
			<li>
				<a href="/codeIgniter/public/newsletter" class="hidden">
					<i class="fa fa-newspaper-o" aria-hidden="true"></i>
				</a>
				<a href="/codeIgniter/public/commande" class="sidebar-brand"><i class="fa fa-spinner" aria-hidden="true"></i>&nbsp;Commandes</a>
			</li>
			<li>
				<a href="/codeIgniter/public/commande" class="hidden">
					<i class="fa fa-spinner" aria-hidden="true"></i>
				</a>
				<a href="#" class="sidebar-brand" id="logout" style="position:absolute;top: 100%;"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Logout</a>
			</li>
			<li>
				<a href="#" class="hidden">
					<i class="fa fa-sign-out" aria-hidden="true" style="position:absolute;top: 168%;"></i>

				</a>
			</li>		
		</ul>
	</div>
    </body>
</html>