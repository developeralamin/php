<?php 
// inheritance - when a class derives to another class
// method & proterties will be public and protected
// use exnteds keywords

// public function paymentRequest();
// 	public function paymentAccess();
// 	public function paymentSuccess();
// 	public function paymentFail();
// 	public function paymentCancel();
 
class PaymentGateway{

    public function paymentRequest(){}
    public function setPassword(){}
    public function paymentAmount(){}
    public function paymentAmountCheck(){}
    public function paymentSuccess(){}
    public function paymentCancel(){}
    protected function paymentFail(){
        echo "Failed";
    }

}

class DuthcBangla extends PaymentGateway
{

    public function failed(){
       echo parent::paymentFail();
    }
    
}

class EBL extends DuthcBangla
{
    public function paymentAmountCheck(){
        echo "check payment acmount";
    }
}

$booth = NEW DuthcBangla();



$ebl = NEW EBL;
$ebl->paymentAmountCheck();