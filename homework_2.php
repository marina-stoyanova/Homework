<?php
$arr = range(20, 1000, 37);

function is_prime($num)
{
 for($i = 2; $i < $num; $i++) {
  if($num % $i == 0) {
   return false;
  }

 }

return true;

}

function find_3_prime($arr)
{
 $primes = 0;
 foreach( $arr as $value )
    {
        if( is_prime( $value ) ) {
          
            $primes++;
        
      if( $primes == 3) {
            printf("%d ", $value);
           
        }
}
            
    }
    echo "<br />";
}



function check_exists($arr)
{
 if(in_array("146",$arr))
 echo "The number 146 exist in the array<br />";
 else 
 echo "The number 146 does not exist in the array<br />";

 if(in_array("284",$arr))
 echo "The number 284 exist in the array<br />";
 else 
 echo "The number 284 does not exist in the array<br />";

  if(in_array("871",$arr))
 echo "The number 871 exist in the array<br />";
 else 
 echo "The number 871 does not exist in the array<br />";
}

find_3_prime($arr);
check_exists($arr);
?>