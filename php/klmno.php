<head>
    <link rel="stylesheet" href="../prl.css">
    <title>Document</title>
</head>
<body class="notmain">
    <section id="navbar">
        <a href="../prl.cgi">Go back</a>
        <a href="../prl/web-test.cgi">log out</a>
    </section>

    <section id="methods">
        <h1>methods<h1>
        <section class="lists">
            <section class="tussenkopjes">
                <h3></h3>
                <p></p>
            </section>
        </section>
    </section>
    <section id="nesting">
        <h1>nesting<h1>
        <section class="lists">
            <section class="tussenkopjes">
                <h3></h3>
                <p></p>
            </section>
        </section>
    </section>
    <section id="objects">
        <h1>objects<h1>
        <section class="lists">
            <section class="tussenkopjes">
                <h3></h3>
                <p></p>
            </section>
        </section>
    </section>
    <section id="operators">
        <h1>operators<h1>
        <section class="lists">
            <section class="tussenkopjes">
                <h3>Arithmetic</h3>
                <p>
                    + is plus. - is minus. * is times. / is divide. ** is exponentiate (2**3 is 2*2*2). % is modulo<br><br>
                    When you combine adding, subtracting, multiplying, and dividing operators together, Perl will perform the calculation in an order, which is known as operator precedence. 
                    The multiply and divide operators have higher precedence than add and subtract operators, therefore, Perl performs multiplying and dividing before adding and subtracting.<br><br>
                    You can use brackets () to force Perl to perform calculations based on the precedence you want: "print (((10 + 20)/2 - 5) * 2); # 20;"<br><br>
                    To get the remainder of the division of one number by another, you use the modulo operator (%). It is handy to use the modulo operator (%) to check if a number is odd or even by dividing it by 2 to get the remainder. If the remainder is zero, the number is even, otherwise, the number is odd.
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>Bitwise</h3>
                <p>
                    Bitwise operators allow you to operate on numbers one bit at a time. Think of a number as a series of bits e.g., 125 can be represented in binary form as 1111101. Perl provides all basic bitwise operators including and (&), or (|), exclusive or (^) , not (~) operators, shift right (>>), and shift left (<<) operators.<br><br>
                    The bitwise operators perform from right to left. In other words, bitwise operators perform from the rightmost bit to the leftmost bit.
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>Number comparison</h3>
                <p>
                    Equal is ==<br><br>
                    Not Equal is !=<br><br>
                    Comparison is <=> (it's often used in sorting numbers: "$a <=> $b" The number operator returns: 1 if $a is greater than $b, 0 if $a and $b are equal and -1 if $a is lower than $b)<br><br>
                    Less than is <<br><br>
                    Greater than is ><br><br>
                    Less than or equal is <=<br><br>
                    Greater than or equal is >=
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>string comparison</h3>
                <p>
                    Equal is eq<br><br>
                    Not Equal is ne<br><br>
                    Comparison is cmp<br><br>
                    Less than is lt<br><br>
                    Greater than is gt<br><br>
                    Less than or equal is le<br><br>
                    Greater than or equal is ge
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>string concatenation</h3>
                <p>
                    . is concat<br><br>
                    x is repetition<br><br>
                    The concatenation operator (.) combines two strings together.<br><br>
                    A string can be repeated with the repetition ( x) operator: (print "a message " x 4, "\n";)
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>chomp()</h3>
                <p>
                    removes the last character in a string and returns a number of characters that were removed. The chomp() operator is very useful when dealing with the user’s input because it helps you remove the new line character \n from the string that the user entered.<br><br>
                    example: "chomp($s = <STDIN>);"<br><br>
                    The <STDIN> is used to get input from users.
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>logical</h3>
                <p></p>
            </section>
        </section>
    </section>
</body>