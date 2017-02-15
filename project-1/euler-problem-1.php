<?php
/* Problem description:
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9.
The sum of these multiples is 23.

Find the sum of all the multiples of 3 or 5 below 1000.
*/
//not trying to do any fancy tdd or function building right off here - just want to solve the problem fist =]
$sum_of_multiples = 0;
for ($i=0; $i < 1000; $i++) {
  if ($i%5 == 0 || $i%3 == 0) // Thanks for the correction here!
  {
    $sum_of_multiples += $i;
  }
}
echo "the sum of all multiples of 3 or 5 below 1000 is: " . $sum_of_multiples ."\n";
