# PHP Foreach Loop and Null Handling

This repository demonstrates a potential issue in PHP when using foreach loops and handling null values.  The issue stems from PHP's loose comparison and how it interacts with null checks within loops.

## The Bug
The `bug.php` file contains a function that iterates through an array. If a null value is encountered, the function prematurely returns null. This might not be the intended behavior, especially if subsequent elements in the array are not null and should be processed.

## The Solution
The `bugSolution.php` file offers a corrected version of the function that uses strict comparison (`===`) to ensure accurate null value detection, avoiding premature termination if there are subsequent non-null elements.