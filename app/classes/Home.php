<?php
namespace App\classes;
class Home
{
    protected $number;
    protected $i;
    protected $catch;

    public function __construct($POST = null)
    {
        $this->number = $_POST['given_number'];
    }

    public function index(){
        header('Location: action.php?pages=home');
    }

    public function primeNumber()
    {
        $this->catch = $this->primeCheck();

        if ($this->catch == 1)
            return " $this->number is Prime";
        else
            return " $this->number is not Prime";

    }


    public function primeCheck()
    {
        if ($this->number == 0 || $this->number == 1)
            return 1 ;
        for ($this->i = 2; $this->i <= $this->number / 2; $this->i++) {
            if ($this->number % $this->i == 0)
                return 0;
        }
        return 1;
    }




}
