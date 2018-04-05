<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <meta name="description" content="Private Dining in Aberdeen">
    <meta name="keywords" content="aberdeen, private, dining, restaurant, catering, food, parties, didier, dejean, dominique, mancellon, aberdeen, seafood, silver, darling, cafe, boheme">
    <meta name="author" content="Peter Wronski">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/header_style.css">
    <link rel="stylesheet" href="../styles/slideshow_style.css">
    <link rel="stylesheet" href="../styles/body_style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>


    <title>Froggies - Private Dining by Didier and Dominique</title>
</head>

<body>
<?php include("header.php") ?>

<div class="container">

    <?php include("slideshow.php"); ?>
    <hr/>
    <?php include("ourbackground.php"); ?>
    <hr/>
    <?php include("ourwork.php") ?>

</div>

</body>
</html>