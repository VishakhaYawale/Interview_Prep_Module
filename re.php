

<!DOCTYPE html>
<html lang="en">
<head>
   <?php
    include 'student_register.php';
    include 'mentor_register.php'; 
    include 'login.php';
    include 'navbar.php';
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link href="CSS/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link href="review_style.css" rel="stylesheet" type="text/css">
		<link href="reviews.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="CSS/index.css"  rel="stylesheet" >
    <link href="CSS/footer.css"  rel="stylesheet" >

    <title>Welcome | CareerTime</title>
</head>
<body>
<nav class="navtop">
	    	<div>
	    		<h1>Write your review for CareerTime</h1>
	    	</div>
	    </nav>
		<div class="content home">
			<h2>Reviews</h2>
			<p>Check out the below reviews for our website.</p>

            <div class="reviews"></div>
            <script>
            const reviews_page_id = 1;
            fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
                document.querySelector(".reviews").innerHTML = data;
                document.querySelector(".reviews .write_review_btn").onclick = event => {
                    event.preventDefault();
                    document.querySelector(".reviews .write_review").style.display = 'block';
                    document.querySelector(".reviews .write_review input[name='name']").focus();
                };
                document.querySelector(".reviews .write_review form").onsubmit = event => {
                    event.preventDefault();
                    fetch("reviews.php?page_id=" + reviews_page_id, {
                        method: 'POST',
                        body: new FormData(document.querySelector(".reviews .write_review form"))
                    }).then(response => response.text()).then(data => {
                        document.querySelector(".reviews .write_review").innerHTML = data;
                    });
                };
            });
            </script>

		</div>

    <?php
    include 'footer.php';
    ?>
    <script type="text/javascript" src="JS/jquery.js"></script>
    <script type="text/javascript" src="JS/bootstrap.min.js"></script>
    


</body>
</html>
