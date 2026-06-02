#!C:\xampp\perl\bin\perl.exe
use strict;
use warnings;
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
        <form method="post">
            <section>
                enter:
                <input type="text" name="use">
                <input type="text" name="log">
            </section>
            <input type="submit" name="submit" value="confirm">
        </form>
    </body>
</html>
END

my $php_output = `php /../enter.php -param1 -param2 -param3`;
