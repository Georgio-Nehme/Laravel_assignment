<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class palindromeController extends Controller {
    public function countPalindromes() {
        $count = 0;
        $words=array("dad", "teta", 1221);
        for ($i=0 ; $i<count($words); $i+=1) {
        
            if (strrev($words[$i]) == $words[$i]){ 
                $count+= 1; 
            }
            else{
                $count = $count;
            }
        }
    return $count; 
    }
}
