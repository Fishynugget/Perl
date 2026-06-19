#!C:\xampp\perl\bin\perl.exe
#C:\xampp\cgi-bin
use strict;
use warnings;
use v5.14;
use CGI qw(:standard);
my $cgi=new CGI;

print <<'END';
Status: 200
Content-type: text/html

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../prl.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h3>Make a list</h3>
    </header>
    <main>
        <form action="" method="post">
            <input type="text" name="number">
        </form>
    </main>
    <footer>
        <a id="select" href="main.cgi">go back</a>
        <a id="select" href="../prl/web-test.cgi">log out</a>
    </footer>
</body>

</html>
END

my $number = $cgi->param('number');
print($number);