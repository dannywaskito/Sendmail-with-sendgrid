<!DOCTYPE html> 
<html lang = "en"> 

   <head> 
      <meta charset = "utf-8"> 
      <title>Send Mail with Sendgrid</title> 
      <!-- Bootstrap 4 -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <!-- End Bootstrap 4 -->
   </head>

   <body> 
      <?php 
         echo $this->session->flashdata('notif'); 
         echo form_open('welcome/send_mail'); 
      ?> 

<div class="container">
   <h3>Send Email with Sendgrid By <span>M Danny Waskito</span></h3>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" placeholder="Enter email" required>
      </div>  
       <div class="form-group">
    <label for="exampleFormControlTextarea1">Enter Subject</label>
    <textarea class="form-control" rows="3" name="subject" placeholder="Enter Subject" required></textarea>
  </div>
          <div class="form-group">
    <label for="exampleFormControlTextarea1">Enter Message</label>
    <textarea class="form-control" rows="3" name="message" placeholder="Enter Message" required></textarea>
  </div>
      <input type = "submit" class="btn btn-primary" value = "Send Email"> 

      <?php 
         echo form_close(); 
      ?> 
   </div>
   </body>
   <!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- End Javascript -->
</html>