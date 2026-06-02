#!C:\xampp\perl\bin\perl.exe
print "Content-type: text/html\n\n";
use strict;
use warnings;
use v5.14;
my @numbers = (1, 2, 3, 4, 5, 6);
my $randnum1 = rand(7);
print(@numbers[$randnum1], " | ");
foreach (@numbers) {
    print "$_" . "\n";
}
my $random1 = rand(500);
my $random2 = rand(500);
my $number = $random1 + $random2;
print($number);