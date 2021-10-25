<?php

class Card {
    protected $number;
    protected $date;
    protected $cvg;

    public function __construct ($_number, $_date, $_cvg) {
        $this->number = $_number;
        $this->date = $_date;
        $this->cvg = $_cvg;
    }
}

?>