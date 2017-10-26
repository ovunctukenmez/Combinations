<?php
require_once("Combinations.php");

// elements
$elements = array('A', 'B', 'C', 'D');

// initialize Combinations class
$Combinations = new Combinations($elements);

// get permutations with two elements (no repetition is allowed)
$permutations = $Combinations->getPermutations(2, false);

/* $permutations value:
,[A,B]
,[A,C]
,[A,D]
,[B,A]
,[B,C]
,[B,D]
,[C,A]
,[C,B]
,[C,D]
,[D,A]
,[D,B]
,[D,C]
*/

// get permutations with two elements (repetition is allowed)
$permutations = $Combinations->getPermutations(2, true);

/* $permutations value:
[[A,A]
,[A,B]
,[A,C]
,[A,D]
,[B,A]
,[B,B]
,[B,C]
,[B,D]
,[C,A]
,[C,B]
,[C,C]
,[C,D]
,[D,A]
,[D,B]
,[D,C]
,[D,D]]
*/

// get combinations with two elements (no repetition is allowed)
$combinations = $Combinations->getCombinations(2, false);

/* $combinations value:
[[A,B]
,[A,C]
,[A,D]
,[B,C]
,[B,D]
,[C,D]]
*/

// get combinations with two elements (repetition is allowed)
$combinations = $Combinations->getCombinations(2, true);

/* $combinations value:
[[A,A]
,[A,B]
,[A,C]
,[A,D]
,[B,B]
,[B,C]
,[B,D]
,[C,C]
,[C,D]
,[D,D]]
*/
