<!DOCTYPE HTML>
<html>

<head>
  <title>RAJAT GUPTA</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">RAJAT GUPTA</a></h1>
         
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="menu" id="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="resume.html">Resume</a></li>
            <li><a href="work.html">Work</a></li>
            <li><a href="interests.html">Interests</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
<div id="site_content">
      <div id="sidebar_container">
       <div class="sidebar">
          <img src="images/rajat pic0002.jpg" alt="Rajat Gupta" id="rajat">
             </div>
        <div class="sidebar">
          <h3>Project Links</h3>
          <ul>
            <li><a href="https://github.com/rajat26/Data-Warehousing" target="_blank">Data-Warehousing</a></li>
            <li><a href="https://github.com/rajat26/Password-Cracker--PHP" target="_blank">Password-Cracker-PHP</a></li>
            <li><a href="https://github.com/rajat26/Patch-for-PHP-random-number-Generator" target="_blank">Patch-for-PHP-random-number-Generator</a></li>
             <li><a href="https://github.com/rajat26/My-Website" target="_blank">This Website</a></li>
          </ul>
        </div>
        
      </div>
      <div class="content">
        <h1>Contact</h1>
        <?php
          // Set-up these 3 parameters
          // 1. Enter the email address you would like the enquiry sent to
          // 2. Enter the subject of the email you will receive, when someone contacts you
          // 3. Enter the text that you would like the user to see once they submit the contact form
          $to = 'info@rajat26.com';
          $subject = 'Enquiry from the website';
          $contact_submitted = 'Your message has been sent.';

          // Do not amend anything below here, unless you know PHP
          function email_is_valid($email) {
            return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
          }
          
          if (isset($_POST['contact_submitted'])) {
            $return = "\r";
            $youremail = trim(htmlspecialchars($_POST['your_email']));
            $yourname = stripslashes(strip_tags($_POST['your_name']));
            $yourmessage = stripslashes(strip_tags($_POST['your_message']));
            $contact_name = "Name: ".$yourname;
            $message_text = "Message: ".$yourmessage;
           // $user_answer = trim(htmlspecialchars($_POST['user_answer']));
          //  $answer = trim(htmlspecialchars($_POST['answer']));
            $message = $contact_name . $return . $message_text;
            $headers = "From: ".$youremail;
            if (email_is_valid($youremail)  && $yourname != "" && $yourmessage != "" ) {
              mail($to,$subject,$message,$headers);
              $yourname = '';
              $youremail = '';
              $yourmessage = '';
              echo '<p style="color: blue;">'.$contact_submitted.'</p>';
            }
          
          }
         // $number_1 = rand(1, 9);
         // $number_2 = rand(1, 9);
        //  $answer = substr(md5($number_1+$number_2),5,10);
        ?>
        <form id="contact" action="contact.php" method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="your_name" value="<?php echo $yourname; ?>" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="<?php echo $youremail; ?>" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="5" cols="50" name="your_message"><?php echo $yourmessage; ?></textarea></p>
            
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="send" /></p>
          </div>
        </form>
      </div>
	  
    </div>
   <footer>
      
<a href="contact.html">
<img border="0" src="images/call.jpg" alt="call" width="40" height="32" id="call">
</a><span id="call">Call&nbsp:&nbsp 438 938 8744</span>
<a href="contact.html">
<img border="0" src="images/contact.jpg" alt="contact" width="40" height="32" id="contact">
</a><span id="contactmail">Contact &nbsp:&nbsp&nbsp rajat26.gupta@gmail.com</span>
<a href="contact.html">
<img border="0" src="images/follow.jpg" alt="follow" width="40" height="32" id="follow">
</a><span id="follow">Follow Me &nbsp <a href="http://www.linkedin.com/pub/rajat-gupta/2a/76b/1b6" target="_blank">
<img border="0" src="images/linkedin.jpg" alt="linkedin" width="20" height="16" >
</a>&nbsp <a href="https://www.facebook.com/rajat.gupta.568" target="_blank">
<img border="0" src="images/facebook.jpg" alt="facebook" width="20" height="16" >
</a>&nbsp <a href="https://plus.google.com/u/0/112632221916308395879/posts" target="_blank">
<img border="0" src="images/g.jpg" alt="call" width="20" height="16" >
</a> </span>
    </footer>
  </div>
 
 
</body>
</html>
