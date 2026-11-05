<?php
class Mauvais {
    private $password = "admin123";

    public function calcul($a, $b, $c) {
        $inutile = 42;
        if ($a > 0) {
            if ($b > 0) {
                if ($c > 0) {
                    if ($a > $b) {
                        if ($b > $c) {
                            return $a;
                        }
                    }
                }
            }
        }
        return 0;
    }
}
