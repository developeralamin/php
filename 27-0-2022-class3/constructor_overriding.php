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

    public $branchName;
    public $branchID;

    public function paymentRequest(){}
    public function setPassword(){}
    public function paymentAmount(){}
    public function paymentAmountCheck(){}
    public function paymentSuccess(){}
    public function paymentCancel(){}
    protected function paymentFail(){
        echo "Failed";
    }

    public function __construct($branchName,$branchID)
    {
         $this->branchName = $branchName;
         $this->branchID = $branchID ;
    }

    public function disPlay()
    {
        echo $this->branchName;
        echo $this->branchID;
    }

}

class DuthcBangla extends PaymentGateway
{
    public function __construct($branchName,$branchID,$regNo)
    {
        parent::__construct($branchName,$branchID);
        echo $this->regNo = $regNo;
    }

    public function failed(){
       echo parent::paymentFail();
    }
    
}

// class EBL extends DuthcBangla
// {
//     public function paymentAmountCheck(){
//         echo "check payment acmount";
//     }
// }

// $data = new PaymentGateway("Mirpur",12);
// $data->disPlay();

$booth = NEW DuthcBangla('dhaka',10,45545);

$booth->display();

// $ebl = NEW EBL;
// $ebl->paymentAmountCheck();