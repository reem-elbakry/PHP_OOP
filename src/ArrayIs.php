<?php

namespace app;

class ArrayIs {
    public static function associative(array $inpt_arr): bool {

        if ([] === $inpt_arr) {
          return true;
        }
        
        $n = count($inpt_arr);
        for ($i = 0; $i < $n; $i++) {
          if(!array_key_exists($i, $inpt_arr)) {
            return true;
          }
        }
      
        return false;
      }
}


