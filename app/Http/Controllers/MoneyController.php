<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoneyController extends Controller
{
    public function swap($currency){
        // available language in template array
        $currencies=[
            'AMD'=> [
                'name' => 'Armenian Dram',
              ],
                'EUR'=> [
                    'name' => 'Euro',
                ],
                'RUB'=> [
                    'name' => 'Russian Ruble',
                ],
                'USD'=> [
                    'name' => 'US Dollar',
                ],
        ];
        
        if(array_key_exists(
            $currency,
            $currencies
        
        )){
            session()->put(
                'currency',
                $currency
            
            );
        }
        return redirect()->back();
    }
}
