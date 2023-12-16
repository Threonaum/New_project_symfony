<?php

namespace App\Service;

class PriceEstimate 
{
    public function EstimatePriceLocation (int $year, int $nbkm, int $nbdays): int {
        $totalPriceEstimate = (($year*0.5)/1000)*$nbkm*0.6+$nbdays*30;
        return $totalPriceEstimate;
    }





}