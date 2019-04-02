<?php
class Girl {
    public function beSmart(){
        return "I'm smart";
    }
    public function beBeautiful() {
        return "I'm beautiful";
    }
    
}

class Girlfriend extends Girl {
    public function pistiProta() {
        return "ka ten palaikinai fb?";
    }
}

class Wife extends Girlfriend {
    public function pistiProta() {
        return "baigsi gert?";
    }
}

class HorribleWife extends Girlfriend {
    public function pistiProta(){
        return parent::pistiProta(). ' ' . 'štuka eurū arba nematai vaikū';
    }
}
$girl = new HorribleWife;
$message = $girl->pistiProta();
print $message;
?>