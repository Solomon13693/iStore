<?php
session_start();
$_SESSION["cart"];
$total = 0;
 foreach($_SESSION["cart"] as $key => $value ){
    $total = $total + $value['item_price'];
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body>

<form class="" id="paymentForm">
  <div class="form-group">
    <input type="email" hidden id="email-address" value="<?php echo $_SESSION["customer"] ?>" required />
  </div>
  <div class="form-group">
    <input type="text" hidden id="amount" value="<?php echo $total ?>" required />
  </div>
  <!-- <div class="form-group">
    <label for="first-name">First Name</label>
    <input type="text" id="first-name" />
  </div> -->
  <!-- <div class="form-group">
    <label for="last-name">Last Name</label>
    <input type="text" id="last-name" />
  </div> -->

    <div class="container">
    <button class="btn btn-dark w-50 text-center mt-5 py-4 m-auto " type="submit" onclick="payWithPaystack()"> Pay </button>
    </div>

</form>
<script src="./paystack.js"></script> 

<script>
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_abe1d77be487b8ffa04cd42d8eb05e5f9093a759', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });
  handler.openIframe();
}
</script>
    
</body>
</html>
