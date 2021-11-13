@extends('backend.user.template.master')
@section('body')

<!-- Container-fluid starts-->

<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-xl-12-0">


                        <div class="card-footer text-start">
                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                @csrf
                                <div class="row justify-content-center">

                                    <div class="col-xl-12-0">
                                        <div class="login-card">
                                            <div>

                                                <div class="login-main">
                                                    <form id="paymentForm" class="theme-form">
                                                        <h4>student payment detials</h4>
                                                        <div class="form-group">
                                                            <label class="col-form-label pt-0">Your Name</label>
                                                            <div class="row g-2">
                                                                <div class="col-6">
                                                                    <input class="form-control" disabled="" type="text"  id="first-name" placeholder="{{auth()->user()->first_name}}">
                                                                </div>
                                                                <div class="col-6">
                                                                    <input class="form-control" disabled="" type="text"  id="last-name" placeholder="{{auth()->user()->last_name}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="hidden" name="email" value="{{auth()->user()->email}}"> {{-- required --}}
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-form-label">Amount</label>
                                                            <select name="amount" id="amount" class="form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue" placeholder="#25,000">
                                                                <option>-----------------select fee-----------------</option>
                                                                <option value="25000">acceptance fee</option>
                                                                <option value="75000">School fee</option>
                                                                <option value="15000">Hostel fee</option>
                                                            </select>
                                                        </div>

                                                        <input type="hidden" name="orderID" value="345">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <input type="hidden" name="currency" value="NGN">
                                                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                                        <div class="form-submit m-2">
                                                            <button class="btn btn-success btn-lg mt-2" type="submit" value="Pay Now!">
                                                                Pay now
                                                            </button>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

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
