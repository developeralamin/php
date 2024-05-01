<?php 
// interface class doesn't have body part
// we can use inheritace in interface implements keywords
// interface method must be public
// we can't create instance of  interface class


interface PaymentGateWay
{
    public function paymentMethod();
    public function cardPassword();
    public function cardUserName();
    public function paymentSucess();
    public function paymentFail();
}

interface Bank
{
    public function boothName();
    public function physicallAddress();
}


class DutchBanlgaBooth implements PaymentGateWay ,Bank
{
    public function paymentMethod(){

    }
    public function cardPassword(){

    }
    public function cardUserName(){

    }
    public function paymentSucess(){
        echo "Payment sucess";
    }
    public function paymentFail(){}

    public function boothName(){

    }
    public function physicallAddress(){}
}

$booth = new DutchBanlgaBooth;
$booth->paymentSucess();

// $gateway = new PaymentGateWay;
// $gateway->paymentSucess();