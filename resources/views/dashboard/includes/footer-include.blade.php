<footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Starwars.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay--> 
        <div class="rightbar-overlay"></div>
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="https://js.paystack.co/v1/inline.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        const paymentForm = document.getElementById('paymentForm');
        const payWithPaystack = (e) => {
            e.preventDefault();
            let handler = PaystackPop.setup({
                key: 'pk_test_fb0a1ece6a8fe738d7e03cdf5b0772104c94cde4', // Replace with your public key
                email: document.getElementById("email-address").value,
                amount: 1500 * 100,
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
                                window.location.href = '/success'
                                
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
     @livewireScripts
    </body>


</html>