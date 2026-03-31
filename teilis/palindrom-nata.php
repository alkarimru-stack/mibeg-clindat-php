
<?php

// Palindrom-Checker
// Otto, Anna, Lagerregal

$testString = "Lagerregal";
$lower = strtolower($testString);
$isPalindrome = ($lower === strrev($lower));

// 
echo "erfahrung: ";
var_dump($isPalindrome);

//andere beispiel

$word = "Kaugummi";
$isPalindrome = strtolower($word) === strtolower(strrev($word));

print $isPalindrome . PHP_EOL;

//andere Losung

$word = "otto";
print $word === strrev($word);
//print var_dump($isPalindrome) . "\n";

if ($isPalindrome) {
    print "true" . "\n";
}
else {
    print "false" . "\n";
}


$word = "anna";
print $word === strrev($word);
//print var_dump($isPalindrome) . "\n";

if ($isPalindrome) {
    print "true" . "\n";
}
else {
    print "false" . "\n";
}