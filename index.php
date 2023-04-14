<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- change the image -->
	<link rel="icon" type="image/gif/png" href="img/z.png">
	
	<!-- Include Bootstrap CSS/JS/JQ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@484&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&family=EB+Garamond:wght@484&display=swap" rel="stylesheet">

	
	<!-- custom css -->
	<link rel="stylesheet" href="css/style_1.css">
	<link rel="stylesheet" href="css/style_2.css">

	<!-- Title -->
	<title>Home</title>
</head>

<body>

	<!-- The foolowing php code will produce the header file-->
    
    <?php $page_name = "index" ?>

    <?php include 'head_foot/header.php'; ?>

    <!-- End of the header code -->


<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel" data-interval="3000"> 
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class="active"></li>
	<li data-target="#slides" data-slide-to="0"></li>
	<li data-target="#slides" data-slide-to="0"></li>
</ul>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="img/mac3.png" class="mx-auto d-block" width=100%>
		<div class="carousel-caption">
			<h1 class="display-4">Description-1</h1>
		</div>
	</div>
	<div class="carousel-item">
		<img src="img/mac3.png" class="mx-auto d-block" width=100%>
		<div class="carousel-caption">
			<h1 class="display-4">Description-2</h1>
		</div>
	</div>
	<div class="carousel-item">
		<img src="img/mac3.png" class="mx-auto d-block" width=100%>
		<div class="carousel-caption">
			<h1 class="display-4">Description-3</h1>
		</div>
	</div>
</div>
</div>
<!--- End Image Slider -->

<!--- About Us (This may be optional to write here)-->
<br><br><br><br><br>
<button type="button" class="fun btn btn-lg btn-block btn-outline-primary col-8 offset-2" data-toggle="collapse" data-target="#about">	<h1 class="display-4">Wish to know</h1><h1 class="display-4">About Us?</h1></button>
<div id="about" class="collapse">
	<div class="container-fluid padding">
		<div class="row">
			<div class="col-8 offset-2">
				<p>
				    Our primary mission is to make every student study at good universities. We have taken a  step toward that. 
				    We are providing solutions for the GATE exams, and it is not just a solution; it is a kind of guide to solve a problem. 
				    You are provided with concepts, hints, and then finally, the solution. We are trying our best to make videos of these problems to benefit a larger community. 
				    Secondly, we are also trying to add different exams like CSIR-NET, JAM, NBHM, and even GRE Mathematics. For the time being, we have made a <a href="query.php" target="_balnk">query form</a>,
				    where you can ask your doubts, and we will try to solve those as soon as possible. Although it's just a google form, and we are trying to make a form on the webpage itself. 
				    We also have a <a href="daily_boost.php" target="_balnk">daily boost</a> page on which we will be providing a problem daily, and the solution will be on the very next day. 
				    The main thing is that it's totally FREE! Yeah, FREE, there is no cost, and we will not take any penny in the future. 
				    I hope you will enjoy solving problems, and if you want to give any feedback or suggestion, kindly mail us at <a href="mailto:sas@desiganit.com">sas@desiganit.com</a>. 
				    Also you can visit the <a href="contact_us.php" target="_balnk">contact us</a> page and submit the contact form.
				</p>			
			</div> 
		</div>  
	</div>  
</div>  
<!--- End About Us -->

<br><br><br><br><br>

<!--- Connect -->
<div class="container-fluid padding">
<div class="row text-center padding">

<div class="col-12">
	<h2 class="display-4">Connect</h2>
	<hr width="150px">
</div>
<div class="col-12 social padding">
<a href="#"><i class="fab fa-facebook"></i></a>
<a href="#"><i class="fab fa-google-plus-g"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-youtube"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
</div>

</div>
</div>
<!--- End Connect -->

<br><br><br><br><br>

<!--- Footer -->
    <?php include 'head_foot/footer.php'; ?>
    <!--- End Footer -->

</body>
</html>

