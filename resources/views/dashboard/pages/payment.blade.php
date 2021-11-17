<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paystack Payment Gateway</title>
</head>
<body>
    <form id="paymentForm">
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email-address" required />
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="tel" id="amount" required />
        </div>
        <div class="form-group">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" />
        </div>
        <div class="form-group">
            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" />
        </div>
        <div class="form-submit">
            <button type="submit" onclick="payWithPaystack()"> Pay </button>
        </div>
    </form>
    <script src="https://js.paystack.co/v1/inline.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        const paymentForm = document.getElementById('paymentForm');
        const payWithPaystack = (e) => {
            e.preventDefault();
            let handler = PaystackPop.setup({
                key: 'pk_test_fb0a1ece6a8fe738d7e03cdf5b0772104c94cde4', // Replace with your public key
                email: document.getElementById("email-address").value,
                amount: document.getElementById("amount").value * 100,
                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                onClose: function(){
                alert('Window closed.');
                },
                callback: function(response){
                    const reference = response.reference;
                    //Verify Payment
                    $.ajax({
                       type  : "GET",
                       url   : "{{URL::to('verify-payment')}}/"+ reference,
                       success : function(response){
                            if(response[0].status === true){
                                $('form').prepend(`<h2>${response[0].message}</h2>`);
                            }else{
                                $('form').prepend(`<h2>Failed to Verify Payment</h2>`);
                            }
                       }
                    })
                }
            });
            handler.openIframe();
        }
        paymentForm.addEventListener("submit", payWithPaystack, false);
       
    </script>
</body>
</html>