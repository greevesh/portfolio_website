

<!DOCTYPE html>
  <html lang="en">
    <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178486694-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-178486694-1');
    </script>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <meta name="description" content="Contact and enquire further about getting more clients for your counselling business. Please fill in the form if you have any other questions.">
        <!-- Meta Description -->

    
    <title>Clients for Counsellors: Contact</title>

        <!-- CSS Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/navbar.css" />
    <link rel="stylesheet" type="text/css" href="css/contact-page-styling.css" />
   


      <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Lato|Raleway" rel="stylesheet">
    
   <!-- Favicon -->
   <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
   <link rel="manifest" href="favicon_io/site.webmanifest">


  </head>


 <body>


 <div class="contact-banner">


 <nav class="navbar navbar-default navbar-static navbar-transparent" role="navigation">
        <div class="container">
          <!-- Start navbar-header -->
          <div class="navbar-header">
    
            <a class="navbar-brand" href="/">
    
            <img alt="clients-for-counsellors-logo" src="images/clients-for-counsellors-logo.png" class="logo"></a>
    
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=" .navbar-collapse">
              <span class="sr-only">Toggle navigation </span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div> <!-- End navbar-header-->
    
          <!-- Start navbar collapse -->
          <div class="collapse navbar-collapse" align="center">
            <ul class="nav navbar-nav">
              <li align="center"> <a href="contact.php">Contact</a></li>
            </ul>
          </div><!-- End navbar-collapse-->
      </div>
    </nav>


        <div class="row" id="contact-heading">

            <div class="col-md-4 col-md-offset-4">

                  <h3 align="center">CONTACT</h3><br /><br />

                  

            </div><!--- /.col-md-->

        </div><!--- /#contact-heading-->

</div><!--end contact-banner-->









        <div id="con" class="col-md-12 emailForm" align="center">

        <br><br>

              <h4 align="center"> If you have any questions, please fill in the form and I will get back to you ASAP.</h4>
              
                <form method="post">

                    <div class="form-group">

                                <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>" />
                                <?php
                $name = htmlspecialchars($_POST['name']);
                if (isset($_POST['submit']) && empty($name)) {
                  $warning = "<span style='color: red'>Please enter your name</span>";
                  echo $warning;
                }
              ?>

                    </div><!--end form-group-->

                    <div class="form-group">

                                <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>" />
                                <?php
                $email = htmlspecialchars($_POST['email']);
                if (isset($_POST['submit']) && empty($email)) {
                  $warning = "<span style='color: red'>Please enter your email</span>";
                  echo $warning;
                }
                elseif (isset($_POST['submit']) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $warning = "<span style='color: red;'>Please enter a valid email</span>";
                  echo $warning;
                }
              ?>
                    </div><!--end form-group-->

                    <div class="form-group center-block">

                    <div align="center" class="form-group center-block">
              <textarea class="form-control" name="message"><?php echo $_POST['message']; ?></textarea><br><br>
            </div>

                    </div><!--end form-group-->   
                    

                    <?php 
              if (isset($_POST['submit']) && !$warning) {
                $to = 'harrigreeves@clientsformentalhealthspecialists.com';
                $subject = 'Message request from: ' . $name;
                $body = 'Message Request' . '<br><br>' .
                        'Name: '  . $name . '<br><br>' .
                        'Email: ' . $email . '<br><br>' .
                        'Message: ' . $message;

                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

                // Optional headers
                $headers .= 'To: Harri <harrigreeves@clientsformentalhealthspecialists.com>';
                $headers .= 'From: Message Request <$email>';

                if (!mail($to, $subject, $body, $headers)) {
                  echo "<div style='margin-bottom: 60px;' class='alert alert-danger'>Sorry. Something went wrong :(</div>";
                }
                else
                  echo "<div style='margin-bottom: 60px;' class='alert alert-success'>Message sent. I will get back to you ASAP :)</div>";
              }   
            ?>

                    <p align="center" ><input type="submit" name="submit" class="btn-lg submit" value="Send Message" /></p><br />


                  </form>

        </div><!--end emailForm-->

    </div><!--end row-->

</div><!--end contactusform-->

<div id="footer" align="center">

    <div>
        <a target="_blank" href="https://www.linkedin.com/in/harrisongreeves/">
        <svg style="margin-top: 20px;" width="70" height="70" viewBox="0 0 24 24">
        <path fill="white" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
    </div>



</div><!--end of footer-->


<b><p align="center" class="text-muted copyright">&copy; clientsformentalhealthspecialists.com</p></b>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

 

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/bootstrap.min.js"></script>



  </body>

</html>