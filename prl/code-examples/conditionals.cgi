#!C:\xampp\perl\bin\perl.exe
print "Content-type: text/html\n\n";
use v5.14;
my $number1 = 4;
my $number2 = 6;
print "if, elsif, else: ";
if ($number1 + $number2 == 10) {
    print "correct";
}elsif(!$number1 + $number2 == 10) {
    print "incorrect";
} else {
    print "something went wrong";
}
print " | unless, unless else, unless elsif else(same as the above, it just means: if not instead of: if) | ";
print "given, when: ";
my $randnum = int(rand(3));
given($randnum) {
    when (0) {print "number is 0";}
    when (1) {print "number is 1";}
    when (2) {print "number is 2";}
}
print " | for and foreach: ";
for (my $i = 0; $i < 10; $i++) {
    print "+";
}
print " | ";
my @array = ('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');
foreach (@array) {
    print "$_" . "\n";
}

print "| while, until(while means while ... is true and until means until ... is true): ";
my $i = 0;
while ($i < 5) {
    print "i";
    $i++;
}
print " | ";
my $f = 5;
until ($f == 0) {
    print "f";
    $f--;
}
print " | do...while, do...until: these 2 are the same as the above except for that instead of checking the condition at the beginning of the loop, they check at the end";
print " | next, last, continue: ";

my $a = 0;
my $b = 0;
while ($a < 20) {
    $a++;
    print("|a|", $a, "|");
    next if $a == 20;
    if ($a > 30) {
        $b++;
        print("|b|", $b, "|");
        redo;
    }
    last if $a > 30;
}
continue {
    print("restarting while");
}
print("dropped out of while statement");
