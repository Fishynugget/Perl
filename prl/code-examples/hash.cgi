#!C:\xampp\perl\bin\perl.exe
print "Content-type: text/html\n\n";
my %numbers = (one => 'een', two => 'twee', three => 'drie');
for(keys %numbers){
  print("$_ is $numbers{$_}\n");
}