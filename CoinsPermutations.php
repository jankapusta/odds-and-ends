<?php

class CoinsPermutations {

    protected $totalAmount;

    protected $existingCoinValues = array(
        1, 5, 10, 25
    );

    /**
     * @param int $amount
     */
    public function setTotalAmount($amount){

        $this->totalAmount = $amount;
    }

    /**
     * @return array
     */
    public function getPermutations() {

        return $this->generatePermutations($this->totalAmount);
    }

    /**
     * @param int $amount
     * @return array
     */
    protected function generatePermutations($inputAmount) {

        $permutationsToReturn = array();

        foreach($this->existingCoinValues as $coinValue) {

            if($inputAmount > $coinValue) {
                $permutationsFromSmallerAmount = $this->generatePermutations($inputAmount - $coinValue);
                foreach ($permutationsFromSmallerAmount as $index => $onePermutation) {
                    if($coinValue <= end($onePermutation)) {
                        array_push($onePermutation, $coinValue);
                        $permutationsToReturn[] = $onePermutation;
                    }
                }
            } elseif ($inputAmount == $coinValue) {
                $permutationsToReturn[] = array($coinValue);
            }

        }

        return $permutationsToReturn;
    }

}

