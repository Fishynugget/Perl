#!C:\xampp\perl\bin\perl.exe
print "Content-type: text/html\n\n";
my $string = "Hello world\n";
print $string;
my @array = ("Hello");
my $array_reference = \@array;
my @num = (1,2,3,4,5,6,7,8,9,10);
my @inside_num = @num[1..$#num-1];
print @inside_num;
# Access beyond the end of the array yields undef, not an error
# There is no namespace conflict between scalars, arrays and hashes

# Assign an array to a scalar to get the length of the array
my $length_of_array = @chars_of_hello; # 5

# In Python you can say array[1:-1] to get all elements but first and last

# Setting elements beyond the end of an array does not result in an error
# The array is extended with undef's as necessary. This is "autovivification."
my @array;           # ()
my @array[3] = 'x';  # (undef, undef, undef, 'x')

# loop over the contents of an array
use v5.10; # necessary for 'say'
for my $number (@numbers_to_ten) {
  say $number ** 2;
}

# When used as booleans, arrays are true if they are not empty

# A typeglob *foo holds references to the contents of global variables with that name: $foo, @foo, $foo, &foo, etc. You
# can access it like an hash and assign to manipulate the symbol tables directly (evil!).

use v5.10; # necessary for say
our $foo = "foo";
our $bar;
say ref *foo{SCALAR};     # SCALAR
say ${ *foo{SCALAR} };    # bar
*bar = *foo;
say $bar;                 # bar
$bar = 'egg';
say $foo;                 # egg

# Perl has a number of sigils:
$scalar = 1; # individual value
@array = ( 1, 2, 3, 4, 5 ); # sequence of values
%hash = ('it', 'ciao', 'en', 'hello', 'fr', 'salut'); # unordered key-value pairs
&function('arguments'); # subroutine
*typeglob; # symbol table entry

# These look like sigils, but aren't:
\@array; # \ returns the reference of what's on the right (so, a reference to @array)
$#array; # this is the index of the last element of @array

# You can use braces after the sigil if you should be so inclined. Occasionally, this improves readability.
say ${value} = 5;

# While you use different sigils to define variables of different types, the same variable can be accessed in different
# ways based on what sigils you use.

%hash;            # we use % because we are looking at an entire hash
$hash{it};        # we want a single value, however, that's singular, so we use $
$array[0];        # likewise for an array. notice the change in brackets.
@array[0,3];      # we want multiple values of an array, so we instead use @
@hash{'it','en'}; # similarly for hashes (this gives the values: 'ciao', 'hello')
%hash{'it','fr'}; # we want an hash with just some of the keys, so we use %
                  # (this gives key-value pairs: 'it', 'ciao', 'fr', 'salut')

# pop does not like array references
pop $reference_to_an_array; # ERROR in Perl 5.20+
# but if we use @{}, then...
pop @{ $reference_to_an_array }; # this works!

# You can think of a method as the things that an object can do. If an object is a noun, then methods are its verbs (save, print, open)
# The arrow operator (->) tells Perl that we are calling a method
# When we make a method call, Perl arranges for the method's invocant to be passed as the first argument. Invocant is a fancy name for the thing on the left side of the arrow. The invocant can either be a class name or an object

# Inheritance lets you create a specialized version of an existing class. Inheritance lets the new class reuse the methods and attributes of another class.
# For example, we could create a File::MP3 class which inherits from File. A File::MP3 is-a more specific type of File. All mp3 files are files, but not all files are mp3 files

my %numbers = qw(one => 1, two => 2, three => 3);
for(keys %numbers){
  print("Number $_ is $numbers{$_}\n");
}