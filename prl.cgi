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
    <link rel="stylesheet" href="prl.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h2>perl</h2>
    </header>
    <main>
        <section>
            <h3>Important add ons:</h3>
            <section>
                <p>
                    include a perl file in php or the perl output:<br><br>
                    include the whole thing: include_once '../prl/test.cgi';<br><br>
                    include just the output: virtual('../prl/test.cgi');
                </p>
                <p>
                    Always add this to the file to ensure that the file knows that it's perl!:<br><br>
                    #!C:\xampp\perl\bin\perl.exe<br><br>
                    print "Content-type: text/html\n\n";
                </p>
            </section>
        </section>
        <section>
            <a id="select" href="php/abcde.php">a through e</a>
        </section>
        <section>
            <a id="select" href="php/fghij.php">f through j</a>
        </section>
        <section>
            <a id="select" href="php/klmno.php">k through o</a>
        </section>
        <section>
            <a id="select" href="php/pqrst.php">p through t</a>
        </section>
        <section>
            <a id="select" href="php/uvwxyz.php">u through z</a>
        </section>
        <section>
            <a id="select" href="projects-perl/main.cgi">fun little projects</a>
        </section>
    </main>
    <footer>
        <a id="select" href="prl/web-test.cgi">log out</a>
    </footer>
</body>

</html>
END