<?php

namespace App\Http\Controllers;

use HiFolks\Statistics\Freq;
use HiFolks\Statistics\Stat;

class StatisticsController extends Controller
{
    public function calculate() 
    {
        $numberAry1 = [-1.0, 2.5, 3.25, 5.75];
        $mean = Stat::mean($numberAry1);
        echo '1. ' . __('Arithmetic mean of :numbers: ', ['numbers' => implode("、", $numberAry1)]) . $mean . PHP_EOL;
        $numberAry2 = [1, 3, 5, 7];
        $median = Stat::median($numberAry2);
        echo '2. ' . __('Median of :numbers: ', ['numbers' => implode("、", $numberAry2)]) . $median . PHP_EOL;
        $numberAry3 = ['🍈', '🍈', '🍈', '🍉','🍉','🍉','🍉','🍉','🍌'];
        echo '3. ' . __('Frequencies of numbers: ', ['numbers' => implode("、", $numberAry3)]) . PHP_EOL;
        $freqTable = Freq::frequencies($numberAry3);
        print_r($freqTable);
    }
}
