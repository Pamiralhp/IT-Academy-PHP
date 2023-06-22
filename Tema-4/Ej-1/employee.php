<?php
class Employee
{
    // Attribute
    private $name;
    private $salary;

    // Methods
    public function initialize($name, $payment)
    {
        $this->name = $name;
        $this->salary = $payment;
    }

    public function print()
    {
        if ($this->salary <= 6000) {
            echo $this->name . " No necesitas pagar impuestos <br>";
        } else {
            echo $this->name . " Necesitas pagar impuestos <br>";
        }
    }
}

?>