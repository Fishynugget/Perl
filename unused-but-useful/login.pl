#!C:\xampp\perl\bin\perl.exe
print "Content-type: text/html\n\n";



my $log = @ARGV[0];
my $use = @ARGV[1];

if ($log == "1997" && $use == "S") {
    print "$result = header('Location: prl.php');";
} else {
    print "not allowed!";
}