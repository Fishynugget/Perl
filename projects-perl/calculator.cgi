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
    <link rel="stylesheet" href="../css/calculator.css">
    <title>Document</title>
</head>

<body>
    <header><h3>calculator</h3></header>
    <main>
        <form action="" method="post">
            <section>
                <input type="text" name="number1">
                <input type="text" name="number2">
            </section>
            <section>
                <button type="submit" name="calculateType" value="add">add</button>
                <button type="submit" name="calculateType" value="subtract">subtract</button>
                <button type="submit" name="calculateType" value="divide">divide</button>
                <button type="submit" name="calculateType" value="multiply">multiply</button>
            </section>
        </form>
    </main>
    <footer>
        <a id="select" href="main.cgi">go back</a>
        <a id="select" href="../prl/web-test.cgi">log out</a>
    </footer>
</body>

</html>
END

my $number1 = $cgi->param('number1');
my $number2 = $cgi->param('number2');
my $calculateType = $cgi->param('calculateType');
given($calculateType) {
    when ('add') {print($number1 + $number2);}
    when ('subtract') {print($number1 - $number2);}
    when ('divide') {print($number1 / $number2);}
    when ('multiply') {print($number1 * $number2);}
}