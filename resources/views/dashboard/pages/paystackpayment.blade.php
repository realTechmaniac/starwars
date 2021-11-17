@extends('dashboard.layout.dashboardApp')

@section('content')
     
    <div class = "offset-md-3 col-md-6 offset-md-3">
            <div class="card">
            <div class="card-body">
                <div class = "text-center">
                    <h4 class="card-title">Paystack Payment Form</h4>
                    <p class="card-title-desc">Provide all payment information as required below .</p>
                </div>
                <form class="needs-validation" id="paymentForm" novalidate>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="validationCustom01">Email</label>
                            <input type="email" class="form-control" id="email-address" placeholder="Email Address" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="validationCustom02">First Name</label>
                            <input type="text" class="form-control" id="first-name" placeholder="First name" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                 
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="validationCustom02">Last Name</label>
                            <input type="text" class="form-control" id="last-name" placeholder="Last name" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class = "text-center">
                        <button class="btn btn-dark" type="submit" onclick="payWithPaystack()">Pay 1500</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end card -->
    </div>

@endsection