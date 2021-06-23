
    

    

    
    <!DOCTYPE html>
    <?php
session_start();

?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>
<!--<script src="https://www.paypal.com/sdk/js?client-id=test"></script>
<script>paypal.Buttons().render('body');</script>-->
<body>
  <script
    src="https://www.paypal.com/sdk/js?client-id=ASRbbZsSSeLQF7029JiyzjZrUfBmu_rsFYEMfYdHSABea5B6mTDaAytf2eT4rrAHyPTna3QBsVQDZ6s5&currency=USD"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
  </script>
</body>

<body>
  <script
    src="https://www.paypal.com/sdk/js?client-id=ASRbbZsSSeLQF7029JiyzjZrUfBmu_rsFYEMfYdHSABea5B6mTDaAytf2eT4rrAHyPTna3QBsVQDZ6s5&currency=USD"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
  </script>

  <div id="paypal-button-container"></div>

  <!--<script>
    paypal.Buttons().render('#paypal-button-container');
    // This function displays Smart Payment Buttons on your web page.
  </script> -->

</body>

<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value:  <?php echo $_SESSION["total"] ?>
          }
        }]
      });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            
            window.location.replace("http://localhost/phpstore/handler/success.php")
        })
    },
    onCancel: function (data) {
        window.location.replace("http://localhost/phpstore/handler/Oncancel.php")
    }
  }).render('#paypal-button-container');
</script>

