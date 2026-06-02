#!C:\xampp\perl\bin\perl.exe
print "Content-type: text/html\n\n";
my @array = ("Hello");
my $array_reference = \@array;
my @num = (1,2,3,4,5,6,7,8,9,10);
my @inside_num = @num[1..$#num-1];
print @inside_num;
# Access beyond the end of the array yields undef, not an error
# There is no namespace conflict between scalars, arrays and hashes

# Assign an array to a scalar to get the length of the array
my $length_of_array = @chars_of_hello; # 5