<?php


if($_POST["message"]) {


mail("jaclynsabo27gmail.com", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="masthead">
        <div class="container">
            <nav class="nav">
                <a class="nav-item" href="index.html">Home</a>
                <a class="nav-item" href="about.html">About</a>
                <a class="nav-item" href="resume.html">Resume</a>
                <a class="nav-item" href="contact.html">Contact</a>

            </nav>
        </div>
    </div>
    <div class="image-item">
        <div class="d-flex justify-content-center">
            <img class=image src="Photos/contact.jpg">
        </div>
    </div>

    <div class="content">
        <h1>Contact</h1>

        <!--source: https://www.w3schools.com/howto/howto_css_social_media_buttons.asp-->
        <div>

            <a href="https://www.linkedin.com/in/mannja" class="fa fa-linkedin"></a>
            <a href="https://github.com/jaclynpgh" class="fa fa-github"></a>
        </div>
        <p>Connect with me on LinkedIn, check out my Github Respositories, or email me at jaclynsabo27@gmail.com. You can also send me a message via the following form.
        </p>
        <br>
    </div>

    <div class="container2">
        <form action="contact.php" method="POST">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="First Name">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Last Name">
            <label for="Email">Email</label>
            <input type="text" id="email" name="email" placeholder="name@example.com">



            <label for="subject">Message</label>
            <textarea id="message" name="message" placeholder="Send me a message" style="height:170px"></textarea>

            <input type="submit" value="Submit" id="submit">

        </form>
    </div>



    <footer class="blog-footer" style="text-align: center;">
        <a href="#">Back to top</a>
    </footer>


</body>

</html>