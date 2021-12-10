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
<div class="container">
<div class="row">
<div class="col-md-1">
		<?php include("sidebar.php")?> 
		</div>
		<div class="col-md-11">
	<div class="container">
		<div class=" text-center mt-5">
		<h2 style="color:rgb(31, 18, 64);">Envoyer une Newsletter</h2>
			</div>
			<div class="row ">
				<div class="col-lg-7 mx-auto">
					<div class="card mt-2 mx-auto p-4 bg-light">
						<div class="card-body bg-light">
							<div class="container">
								<form id="contact-form" role="form">
									<div class="controls">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group"> <label for="form_name">Objet</label> 
												  <input id="form_name" 
													type="text" name="nameProd" 
													class="form-control" 
													placeholder="Entrez le nom de l'offre *" 
													required="required"/>    
												</div>
											</div>
                                            <div class="col-md-6">
												<div class="form-group"> <label for="form_email">Image </label> 
												  <input id="file" 
													type="file" 
													name="photo"
													class="form-control" 
													placeholder="Entrez une image *" 
													required="required"
													fileName="photo"/>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group mt-3"> <label for="form_message">Description</label> 
												<textarea id="form_message" cols="33" rows="5" 
													name="description" 
													class="form-control"  
													placeholder="Entrez la description de votre offre."
													rows="4" required="required">
												</textarea> </div>
											</div>
											<div class="col-md-12"> 
											  <input type="submit" onClick={changeOnClick} encType="multipart/form-data" class="btn btn-success btn-send pt-2 btn-block col-md-12 mt-3 " value="Envoyer"/> 
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div> 
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

