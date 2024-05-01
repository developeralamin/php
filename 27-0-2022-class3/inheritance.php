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
    
    public $amount;

    public function paymentRequest(){}
    public function setPassword(){}
    public function paymentAmount(){}
    public function paymentAmountCheck(){}
    public function paymentSuccess(){}
    public function paymentCancel(){}

    protected function paymentFail($amount){
      return  $this->amount =$amount; 
    }

}

class DuthcBangla extends PaymentGateway
{
    public $ID = 250;
    public function paymentFail($amount){
       echo parent::paymentFail($amount);
    }

    public function setValue()
    {
        echo $this->ID;
    }
    
}

class EBL extends DuthcBangla
{
    public function paymentAmountCheck(){
        echo "check payment acmount";
    }
}

$booth = NEW DuthcBangla();
$booth->paymentFail(500);
$booth->setValue();


// $ebl = NEW EBL;
// $ebl->paymentAmountCheck();