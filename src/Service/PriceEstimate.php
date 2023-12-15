<?php

namespace App\Service;

class PriceEstimate 
{
    public function EstimatePriceLocation (int $year, int $nbkm, int $nbdays): int {
        $totalPrice = $year*0.5+$nbkm*0.6+$nbdays*30;
        return $totalPrice;
    }





}