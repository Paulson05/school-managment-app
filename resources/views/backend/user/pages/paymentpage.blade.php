@extends('backend.user.template.master')
@section('body')

<!-- Container-fluid starts-->

<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-xl-12-0">
            <div class="login-card">
                <div>
                    <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/login.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
                    <div class="login-main">
                        <form id="paymentForm" class="theme-form">
                            <h4>Create your account</h4>
                            <p>Enter your personal details to create account</p>
                            <div class="form-group">
                                <label class="col-form-label pt-0">Your Name</label>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <input class="form-control" type="text" required="" id="first-name" placeholder="First name">
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="text" required="" id="last-name" placeholder="Last name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input class="form-control" type="email" required="" id="email-address"  placeholder="Test@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Amount</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="number" name="amount" required="" id="amount" placeholder="Amount">

                                </div>
                            </div>
                            <div class="form-submit">
                                <button class="btn btn-secondary" type="submit" onclick="payWithPaystack()"> Pay </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('script')
<script src="https://js.paystack.co/v1/inline.js"></script>
<script>

    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);
    function payWithPaystack(e) {
        e.preventDefault();
        let handler = PaystackPop.setup({
            key: 'pk_test_f4d75082b401a553cdfb9ed7eb11ae2a7be9d099', // Replace with your public key
            email: document.getElementById("email-address").value,
            amount: document.getElementById("amount").value * 100,
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function(){
                alert('Window closed.');
            },
            callback: function(response){
                let reference = response.reference;
                alert(message);
                $.ajax({
                    type: "Get",
                    url: "{{URL::to('verify-payment')}}/"+reference,
                    success:function (reponse){
                        if (response.status === true){
                            $('form').prepend(`
                              <h2>${response.message}</h2>
                            `);
                        }else{
                            $('form').prepend(`
                              <h2>${response.message}</h2>
                            `);
                        }
                    }
                })
            }
        });
        handler.openIframe();
    }

</script>

@endsection
