
<?php

require_once('config.php');

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
 <title>Payment Page</title>
 <style>

 
  body{
    padding-top:400px;
    background-size:100%;
    background-repeat:no-repeat;
    background-position:center;
    align-content:center;
   text-align:center;
  }
  
 </style>
 </head>
 <body background="images/pay.png">
 <h1 style="text-align: center; margin-top: 0px">Make payment to complete Booking! </h1>
      

     <form action="charge.php" method="post">
       
       <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
               data-key="<?php echo $stripe['publishable_key']; ?>"
               data-description="Pay Rs999 using card"
              data-currency="INR"
               data-amount=99900
               data-locale="auto"
               ></script>
     </form>
     <br><br><br><br><br><br><br><br><br><br><br><br>
     <div id="footer">
     <p style="text-align:center; color:red">© copyright reserved 2019

</p></div>
   
 </html>
</body>