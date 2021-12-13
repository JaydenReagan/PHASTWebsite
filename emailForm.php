<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4fdbebe7f3.js" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <p class="navbar-brand">
        <img src="PHASTLogo.jpg" alt="PHAST Phone Repair" height="50">
        P.H.A.S.T. Phone & Screen Repair
      </p>
      <div class="d-flex">
        <a class="navbar-brand" target="_blank" href="https://www.facebook.com/phastphonerepair">
          <i class="fab fa-facebook-square"></i>
        </a>
        <a class="navbar-brand" target="_blank" href="https://www.instagram.com/phastrepairs/?hl=en">
          <i class="fab fa-instagram-square"></i>
        </a>
        <a class="btn btn-outline-secondary me-2" href="#">Contact Us</a>
      </div>
    </div>
  </nav>
  <div class="thankyou">
      <img src="storefront.png" alt="...">
      <div class="text">
        <h2>Thank you for choosing PHAST Phone Repair! Your email is very important to us, and we'll get back to you as soon as we can!</h2>
        <a href="index.html">
          <h3>Click here to return to the main page.</h3>
        </a>
      </div>
  </div>

    <?php
        if (isset($_POST['email']))
        {
            // in the quotations enter the email you want to send the form data to
            $to = "jr0965566@otc.edu";

            // Change this to reflect what you want to appear in the Subject line of the email
            $subject = "My subject";

            //*************  DON'T CHANGE THIS!!!!!  ***************************************
            $from = "otcwebdev@gmail.com";

            // To send HTML mail, the Content-type header must be set
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            // Create email headers
            $headers .= 'From: '.$from."\r\n".
                'Reply-To: '.$from."\r\n" .
                'X-Mailer: PHP/' . phpversion();
            //************* ******************** DON'T CHANGE THIS!!!!!***********************

            // Compose a simple HTML email message
            // Add to this message your content - follow the pattern below
            // use   $_POST['datafield']    this datafield is the name attribute in  your form field!
            $message = "<html><body>";
            $message .= "<h1 style='color:#f40;'>Email: " . $_POST['email'] . "</h1>";
            $message .= "<p style='color:#080;font-size:18px;'>Hi Maverick!</p>";
            $message .= "<p style='color:#080;font-size:18px;'>" . $_Post['fname'] . "</p>";
            $message .= "</body></html>";

            mail($to,$subject, $message ,$headers);

        }

?>

<!-- This needs to be in your form  -->

</body>
</html>
