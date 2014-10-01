<?php

include 'CoinsPermutations.php';

/*
class CoinsPermutationsTest extends PHPUnit_Framework_TestCase {


    public function testOneCent(){

        $calculator = new CoinsPermutations();
        $calculator->setTotalAmount(1);
        $this->assertNumber(count($calculator->getPermutations()), 1 );

    }
}
*/


// ---------------------------------------

$calculator = new CoinsPermutations();
$calculator->setTotalAmount(15);
$mutations = $calculator->getPermutations();

print_r($mutations);
