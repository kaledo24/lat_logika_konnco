<?php

    function bubble_Sort($array) {
        do{
          $swapped = false;
         for( $i = 0, $c = count( $array ) - 1; $i < $c; $i++ ) {
            
            if( $array[$i] > $array[$i + 1] ){
                list( $array[$i + 1], $array[$i] ) = array( $array[$i], $array[$i + 1] );
                $swapped = true;
            }
         }
        }
        while( $swapped );
      return $array;
      }

        $bilangan = array(99, 2, 64, 8, 111, 33, 65, 11, 102, 50);
        echo "Bilangan sebelum diurutkan: ";
        echo implode(' , ',$bilangan );

        echo "<br/> <br/> Bilangan setelah diurutkan: ";
        echo implode(' , ',bubble_Sort($bilangan));
?>