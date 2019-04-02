<?php

class Girl {

    private $age;
    protected $complexion;

    public function __construct($age, $complexion) {
        $this->age = $age;
        $this->complexion = $complexion;
    }

    public function getAge() {
        return $this->age;
    }

    public function beSmart() {
        return "I'm smart";
    }

    public function beBeautiful() {
        return "I'm beautiful";
    }

}

class Girlfriend extends Girl {

    public function pistiProta() {
        return " ka ten palaikinai fb?";
    }

}

class Wife extends Girlfriend {

    public function pistiProta() {
        return "baigsi gert?";
    }

}

class HorribleWife extends Girlfriend {

    public function pistiProta() {
        return parent::pistiProta() . ' ' . 'štuka eurū arba nematai vaikū ' . $this->complexion;
    }

}

class Boy {

    public function winArgument() {
        return 'You\'ve won';
    }

}

class Boyfriend extends Boy {

    public function winArgument() {
        if (rand(0, 1)) {
            return parent::winArgument();
        }
        return 'Not this time';
    }

}

$girl = new HorribleWife(21, 'black');
$message = $girl->pistiProta();
print 'Amzius: ' . $girl->getAge();
print $message;
$boy = new Boyfriend();
print $boy->winArgument();
?>