#!C:\xampp\perl\bin\perl.exe
#C:\xampp\cgi-bin
use strict;
use warnings;
use CGI;
my $cgi = CGI->new();

my $use = $cgi->param('use');
my $log = $cgi->param('log');

if ($log eq "1997" && $use eq "S") {
    print redirect(-url => 'http://localhost/perl/Perl/prl.cgi');
} else {
    print "something went wrong";
}