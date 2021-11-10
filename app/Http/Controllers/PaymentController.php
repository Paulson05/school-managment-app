<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Paystack;
class PaymentController extends Controller
{
    public function getPayment(){
        return view('backend.user.pages.paymentpage');
    }
    public function verify($reference){
        return $reference;
    }

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {

        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

//        dd($paymentDetails);
        $payment = new Payment();

        $payment->email = $paymentDetails['data']['customer']['email'];
        $payment->status = $paymentDetails['data']['status'];
        $payment->amount = $paymentDetails['data']['amount'];
        $payment->trans_id = $paymentDetails['data']['id'];
        $payment->ref_id = $paymentDetails['data']['reference'];
        $payment->users_id = auth()->user()->id;

//        $plan = Payment::create(collect($request->only(['amount','status','trans_id','ref_id', 'email']))->all());
//        $status =    $plan->save();
        if ($payment->save()){
            return redirect()->back();
        }
        return redirect()->route('pay');
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
