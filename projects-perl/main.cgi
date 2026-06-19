#!C:\xampp\perl\bin\perl.exe
#C:\xampp\cgi-bin
use strict;
use warnings;

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
        <h2>perl</h2>
    </header>
    <main>
        <section>
            <h3>list of projects:</h3>
        </section>
        <section>
            <a id="select" href="calculator.cgi">Calculator</a>
            <a id="select" href="list.cgi">Make a list</a>
        </section>
    </main>
    <footer>
        <a id="select" href="../prl.cgi">go back</a>
        <a id="select" href="../prl/web-test.cgi">log out</a>
    </footer>
</body>

</html>
END