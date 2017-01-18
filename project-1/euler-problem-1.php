<?php
/* Problem description:
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9.
The sum of these multiples is 23.

Find the sum of all the multiples of 3 or 5 below 1000.
*/
//not trying to do any fancy tdd or function building right off here - just want to solve the problem fist =]
for ($i=0; $i < 1000; $i++) {
  if ($i%5 == 0)
  {
    $sum_of_multiples += $i;
  }
  else if ($i%3 == 0)
  {
    $sum_of_multiples += $i;
  }

}
echo "the sum of all multiples of 3 or 5 below 1000 is: " . $sum_of_multiples ."\n";


/*comentary while I code this:

What am I not understanding about boolean logic here? I tried a couple of things to get the sorting down to a single
if statement as such:

if ($i%5 || $i%3 == 0)
{
  $sum_of_multiples += $i;
}

I also tried using the text 'or' operator, as well as the 'xor' operator
(though I figured that one would be issues with numbers like 15 which is a multiple of *both* 3 and 5)

but in all cases trying to use boolean logic in an if statement like this, I seem to get bad results :(

*/
