#!C:\xampp\perl\bin\perl.exe
#C:\xampp\cgi-bin
use strict;
use warnings;

use CGI qw(:standard);
my $cgi=new CGI;

print <<'END';
Status: 200
Content-type: text/html

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../web-test.css">
        <title>Document</title>
    </head>
    <body>
        perl web-page
        <h3>?</h3>
        <form action="check.pl" method="post">
            <section id="form-input">
                enter:
                <input type="text" id="input-use" name="use">
                <input type="text" id="input-log" name="log">
            </section>
            <input type="submit" name="submit" value="confirm">
        </form>
    </body>
</html>
END



