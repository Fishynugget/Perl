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
    <link rel="stylesheet" href="textedit.css">
    <link rel="stylesheet" href="../../prl.css">
    <script src="main.js" defer></script>
    <title>Document</title>
</head>

<body>
    <header>
        <h2>perl text editor</h2>
        <img id="perllogo" src="images/perl.png"></img>
    </header>
    <main>
        <section id="fileselect">
            <label for="myfile">Select an existing file:</label>
            <input type="file" id="myfile" name="myfile">
        </section>
        <section id="textsettings">
            <section>
                Spelling and grammar<br>
                <input type="radio" name="lang" id="en">
                <label for="en">English</label><br>
                <input type="radio" name="lang" id="nl">
                <label for="nl">Nederlands</label><br>
            </section>
            <section id="textdecoration">
                <section>
                    <div>
                        B
                        <input type="radio" name="textdec" value="standard">
                    </div>
                    <div>
                        <b>B</b>
                        <input type="radio" name="textdec" value="bold">
                    </div>
                    <div>
                        <i>B</i>
                        <input type="radio" name="textdec" value="schuin">
                    </div>
                    <div>
                        <ins>B</ins>
                        <input type="radio" name="textdec" value="onderstreept">
                    </div>
                    <div>
                        <del>B</del>
                        <input type="radio" name="textdec" value="Doorstreept">
                    </div>
                </section>
            </section>
            <section>
                choose a font(dropdown met fonts)<br>
                <label for="quantity">Font size</label>
                <input type="number" id="quantity" name="quantity" min="0" max="40" step="1" value="12">
            </section>
            <section>
            text alignment<br>
                <input type="radio" name="textalign" id="left">
                <label for="left">Left</label><br>
                <input type="radio" name="textalign" id="middle">
                <label for="middle">middle</label><br>
                <input type="radio" name="textalign" id="right">
                <label for="right">right</label><br>
            </section>
            <section>
                Voeg een pagina toe aan de<br>
                <section>
                    <input type="radio" name="page" id="Onderkant">
                    <label for="Onderkant">Onderkant</label><br>
                    <input type="radio" name="page" id="Bovenkant">
                    <label for="Bovenkant">Bovenkant</label><br>
                </section>
                van pagina<br>
                <input type="radio" name="pagenum" id="pagenumber">
                <label for="pagenumber">1</label><br>
            </section>
        </section>
        <section id="searchbar">
            <label for="wsearch">Search for a word:</label>
            <input type="search" id="wsearch" name="wsearch">
        </section>
        <section id="textbox">
            <input type="text" id="filetitle" placeholder="name of file">
            <input type="text" id="textcontent" placeholder="text" spellcheck="true">
        </section>
        <button id="savefile">save your file</button>
        <section id="download">
            Download options:
            <button>pdf</button>
            <button>epub</button>
            <button>markdown</button>
        </section>
        <section id="datafile">
            <button>Upload to database</button>
            <button>print file</button>
        </section>
    </main>
    <footer>
        <a id="select" href="../main.cgi">go back</a>
        <a id="select" href="../../prl/web-test.cgi">log out</a>
    </footer>
</body>

</html>
END
