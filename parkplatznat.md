<?php
print "Hello, World!"\n;
<?php
print "Hello, Nata! \n ";
$vorname = "Nataliya Alkarim";
print "Hallo, " . $vorname . "\n";

//Palindrom-Checker

$word = "lagerregal";
$isPalindrome = strtolower($word) === strtolower(strrev($word));

if ($isPalindrome) {
    print "true" . PHP_EOL;
}
else {
    print "false" .  PHP_EOL;
    print "Das war kein Palindrom" . PHP_EOL;
}
//if elseif else

$lieblingsEssen = "Pizza";

if ($lieblingsEssen === "Pizza") {
    print "Mhhh, lecker!";
}
elseif ($lieblingsEssen === "Ungesundes") {
    print "Mhhh, lecker, aber ungesund!";
}
else {
    print "Wahrscheinlich gesund. Vielleicht auch lecker.";
}
print PHP_EOL;
?php

$land = "Syrien";
//switch case
switch ($land) {
    case "Syrien":
        print "Damaskus" . PHP_EOL;
        break;
    case "Russland":
        print "Moskau" . PHP_EOL;
        break;
    case "Ukraine":
        print "Kiew" . PHP_EOL;
        break;
    case "Kamerun":
        print "Yaoundé" . PHP_EOL;
        break;
    case "Deutschland":
        print "Berlin" . PHP_EOL;
        break;
    default:
        print "Sorry, dieses Land ist nicht mit im Videocall." . PHP_EOL;
}

//match
$land = "Russland";

$hauptstadt = match ($land) {
    "Syrien" => "Damaskus",
    "Russland" => "Moskau",
    "Ukraine" => "Kiew",
    "Kamerun" => "Yaoundé",
    "Deutschland" => "Berlin",
    default => "Sorry, dieses Land ist nicht mit im Videocall."
};

print $hauptstadt . PHP_EOL;

//konditional? true Pfad : false Pfad


$personAge = 3;

$oldEnough = $personAge >= 18
    ? "Du bist volljährig, komm rein!"
    : "Du bist zu jung.";

print $oldEnough . PHP_EOL;

// function


function which_is_smaller(int $n1, int $n2): int {
    if ($n1 < $n2) {
        return $n1;
    }
    else {
        return $n2;
    }
}

<?php
function which_is_smaller(int $n1, int $n2): string{
    if ($n1 == $n2) {
        return "Die Zahlen sind gleich groß";
    } elseif ($n1 < $n2) {
        return $n1;
    }
    else {
        return $n2;
    }
}

print which_is_smaller(13,13) . PHP_EOL;