<?php

namespace App\Http\Controllers;

use HiFolks\Statistics\Freq;
use HiFolks\Statistics\Stat;

class StatisticsController extends Controller
{
    public function calculate() 
    {
        $mean = Stat::mean([-1.0, 2.5, 3.25, 5.75]);
        echo '1. -1.0、2.5、3.25、5.75 的算術平均：' . $mean . PHP_EOL;
        $median = Stat::median([1, 3, 5, 7]);
        echo '2. 1、3、5、7 的中位數：' . $median . PHP_EOL;
        echo '3. 🍈、🍈、🍈、🍉、🍉、🍉、🍉、🍉、🍌 的頻率：' . PHP_EOL;
        $fruits = ['🍈', '🍈', '🍈', '🍉','🍉','🍉','🍉','🍉','🍌'];
        $freqTable = Freq::frequencies($fruits);
        print_r($freqTable);
    }
}
