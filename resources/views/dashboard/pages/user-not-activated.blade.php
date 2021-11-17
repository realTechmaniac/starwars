<div class="container-fluid">
    <div class = "col-md-12">
    <div class="card">
            <div class="card-body">
                <div class ="text-center">
                     <h3 class = "pt-3">Welcome to Starwars</h3>
                     <p class = "pt-2">Hello, {{auth()->user()->firstname.' '.auth()->user()->lastname }} You need to activate your account by paying the sum of &#8358;1500 to proceed and enjoy the awesome things we have in stock for you. Kindly click the button below to make payment. Gracias... We can't wait to have you</p> 
                     <div class = "text-center">
                        <a href = "/paymentpage" class = "btn btn-dark">Activate Account</a>
                     </div>  
                </div>
            </div>
        </div>
    </div>
</div>