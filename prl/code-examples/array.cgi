#!C:\xampp\perl\bin\perl.exe
print "Content-type: text/html\n\n";
my @array = ('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');
my $array_length = @array;
print "array length:\n" . $array_length . "\n|";
print(" access first array element:\n" . $array[0] . "\n|");
print " loop through an array with foreach:\n";
foreach (@array) {
    print "$_" . "\n";
}
print "| Add and remove things from the array with:\n";
print "shift:(remove and return the first element)\n";
my $shift = shift(@array);
print $shift . "\n|";
print " unshift:(opposite of shift)\n";
unshift(@array, "unshift");
foreach (@array) {
    print "$_" . "\n";
}
print "| push and pop are the same as shift and unshift but these add and remove the last element instead of the first";