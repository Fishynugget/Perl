<head>
    <link rel="stylesheet" href="../prl.css">
    <title>Document</title>
</head>

<body class="notmain">
    <section id="navbar">
        <a href="#array">array</a>
        <a href="#attributes">attributes</a>
        <a href="#blessing">blessing</a>
        <a href="#class">class</a>
        <a href="#composition">composition</a>
        <a href="#conditionals">conditionals</a>
        <a href="#constructor">constructor</a>
        <a href="#dataStructures">data structures</a>
        <a href="#encapsulation">encapsulation</a>
        <a href="../prl.php">Go back</a>
    </section>

    <section id="array">
        <h1>array</h1>
        <a href="#navbar">Back to top</a>
        <section class="lists">
            <section class="tussenkopjes">
                <h3>Creating an array</h3>
                <p>In Perl variables are identified using sigils. Arrays use @ (as in ‘a’ for array), so the format is: @any_name_you_choose_here.<br><br>
                    Arrays are initialised by assigning a list of values (comma separated values between parentheses).<br><br>Unlike more formal languages, Perl arrays can contain a mix of numbers, strings, objects and references.</p>
            </section>
            <section class="tussenkopjes">
                <h3>Finding the array length / size</h3>
                <p>The length of an array (aka the ‘size’) is the count of the number of elements in the array.<br><br>To find the array length, use the array in a scalar context</p>
            </section>
            <section class="tussenkopjes">
                <h3>Accessing array elements directly</h3>
                <p>Arrays can be accessed in a variety of ways: by directly accessing an element, slicing a group of elements or looping through the entire array, accessing one element at a time.<br><br>
                    When directly accessing an array element, use the array name prefaced with the scalar sigil ($) instead of (@) and the index number of the element enclosed in square brackets.<br><br>
                    Arrays are zero-based, which means that the first element’s index number is 0 (not 1!)<br><br>
                    The implication of zero-based indexing is that the index number of the last element in an array is equal to the length of the array minus one.</p>
            </section>
            <section class="tussenkopjes">
                <h3>Loop through an array with foreach</h3>
                <p>Arrays elements can be accessed sequentially using a foreach loop to iterate through the array one element at a time.<br><br>Other common functions for looping through arrays are grep and map.</p>
            </section>
            <section class="tussenkopjes">
                <h3>shift, unshift, push and pop</h3>
                <p>Perl arrays are dynamic in length, which means that elements can be added to and removed from the array as required. Perl provides four functions for this: shift, unshift, push and pop.<br><br>
                    shift removes and returns the first element from the array, reducing the array length by 1. If no array is passed to shift, it will operate on @_. This makes it useful in subroutines and methods where by default @_ contains the arguments from the subroutine / method call. E.G.
                    The other three array functions work similarly to shift.<br><br>unshift receives and inserts a new element into the front of the array increasing the array length by 1.<br><br>push receives and inserts a new element to the end of the array, increasing the array length by 1.
                    <br><br>pop removes and returns the last element in the array, reducing the array length by 1.</p>
            </section>
            <section class="tussenkopjes">
                <h3>Check an array is null or undefined</h3>
                <p>A simple way to check if an array is null or defined is to examine it in a scalar context to obtain the number of elements in the array. If the array is empty, it will return 0, which Perl will also evaluate as boolean false.
                    Bear in mind that this is not quite the same thing as undefined, as it is possible to have an empty array.</p>
            </section>
            <section class="tussenkopjes">
                <h3>Special array</h3>
                <p>@ARGV<br><br>
                   Basically the same as the php $argv array.<br><br>
                   is an array for holding arguments that are passed to the script.
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>extra facts</h3>
                <p>Access beyond the end of the array yields undef, not an error <br><br>
                   There is no namespace conflict between scalars, arrays and hashes<br><br>
                   Assign an array to a scalar to get the length of the array<br><br>
                   In Python you can say array[1:-1] to get all elements but first and last<br><br>
                   Setting elements beyond the end of an array does not result in an error<br><br>
                   The array is extended with undef's as necessary. This is "autovivification."<br><br>
                   When used as booleans, arrays are true if they are not empty<br><br></p>
            </section>
            <section class="tussenkopjes">
                <section id="prl-code">
                    <p>Sample code for arrays:<br><br></p>
                    <p><?php include_once '../prl/code-examples/array.cgi'; ?><br><br></p>
                    <p>it's output is:<br><br></p>
                    <p><?php virtual('../prl/code-examples/array.cgi'); ?></p>
                </section>
            </section>
        </section>
    </section>

    <section id="attributes">
        <h1>attributes</h1>
        <a href="#navbar">Back to top</a>
        <section class="lists">
            <section class="tussenkopjes"></section>
        </section>
    </section>

    <section id="blessing">
        <h1>blessing</h1>
        <a href="#navbar">Back to top</a>
        <section class="lists"></section>
    </section>

    <section id="class">
        <h1>class</h1>
        <a href="#navbar">Back to top</a>
        <section class="lists"></section>
    </section>

    <section id="composition">
        <h1>composition</h1>
        <a href="#navbar">Back to top</a>
        <section class="lists"></section>
    </section>

    <section id="conditionals">
        <h1>conditionals</h1>
        <a href="#navbar">Back to top</a>
        <section class="lists">
            <section class="tussenkopjes">
                <h3>if/else/elsif</h3>
                <p>Perl if statement allows you to control the execution of your code based on conditions.<br><br>
                   Noticed that the curly braces {} are required even if you have a single statement to execute.<br><br>
                   Perl provides the if else statement that allows you to execute a code block if the expression evaluates to true, otherwise, the code block inside the else branch will execute.<br><br>
                   In some cases, you want to test more than one condition<br><br>
                   Perl provides the if elsif statement for checking multiple conditions and executing the corresponding code block
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>unless/unless else/unless elsif else</h3>
                <p>Perl always provides you with an alternative way to achieve what you need to do.<br><br>

                   For example, Perl has the if statement that allows you to control the execution of a code block conditionally.<br><br>

                   It also provides the unless statement that is similar to the if statement.<br><br>

                   In programming, you often hear something like this:<br><br>

                   If it’s not true, then do this (use if not statement).<br><br>
                   or unless it’s true, then do this (use unless statement).<br><br>
                   The effect is the same but the philosophy is different. That’s why Perl invented the unless statement to increase the readability of code when you use it properly.<br><br>
                   Note that the Perl unless statement is equivalent to the if not statement.
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>given/when(aka switch statement)</h3>
                <p>To use this statement, you need to use Perl v5.10. or type in: use feature "switch";<br><br>
                   The Perl given statement is similar to the switch case statement in other languages such as C/C++, Python, or PHP.<br><br>
                   There are several new keywords introduced along with the given such as: when, break and continue.<br><br>
                   Both given and when accept arguments in a scalar context.<br><br>
                   The type of argument you pass to the given clause determines the kind of pattern matching that Perl will use to perform matching. If the argument appears to be a Boolean expression, Perl evaluates it directly. Otherwise, Perl will use the smart match operator to evaluate the argument, something like $_ ~~ expr<br><br>
                   To break out a when block, you use the break statement. Perl uses break statement implicitly for all when blocks so you don’t have to explicitly specify it.<br><br>
                   To fall through from one case to the next, you use the continue statement.
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>for loop/foreach</h3>
                <p>The Perl for loop statement allows you to loop over elements of a list. In each iteration, you can process each element of the list separately. This is why the for loop statement is sometimes referred to as foreach loop.<br><br>
                    In Perl, the for and foreach loop are interchangeable, therefore, you can use the foreach keyword in where you use the for keyword.<br><br>
                    If we don’t supply an explicit iterator to the loop, Perl will use a special variable called default variable with the name $_ as the iterator. In each iteration, Perl assigns each element of the array @a to the default variable $_.<br><br>
                    If you declare an iterator before entering the loop, Perl will restore its original value after the loop is terminated.<br><br>
                    In each iteration of the loop, Perl creates an alias instead of a value. In other words, if you make any changes to the iterator, the changes also reflect in the elements of the array.<br><br>
                    Perl also supports for loop in C-style. However, it is not a good practice to use the C-style for loop because to code will become less readable.
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>while</h3>
                <p>
                    The Perl while loop statement executes a code block repeatedly as long as the test condition remains true. The test condition is checked at the beginning of each iteration.<br><br>
                    If the condition evaluates to true, the code block inside while loop executes.<br><br>
                    At the beginning of each iteration, the condition is reevaluated. The loop is terminated if the condition evaluates to false.<br><br>
                    At some point in the loop, you have to change some variables that make the condition false to stop the loop. Otherwise, you will have an indefinite loop that makes your program execute until the stack overflow error occurs.<br><br>
                    The while loop statement has an optional block: continue, which executes after each current iteration. In practice, the continue block is rarely used.<br><br>
                    You often use the while loop statement with the diamond operator <> to get the user’s input from the command line.<br><br>
                    Perl evaluates the statements from right to left.
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>do...while</h3>
                <p>
                    The Perl do...while loop statement executes a code block repeatedly as long as a test condition is true.<br><br>
                    Both while and do...while statements terminate the loop if the test condition is false.<br><br>
                    Unlike the while statement that checks the condition at the beginning of each iteration, the do...while statement checks the condition at the end of each iteration.<br><br>
                    Because do...while loop statement checks the condition at the end of each iteration, the code block inside the loop always executes at least once.<br><br>
                    Also, do is not a loop block. Therefore, you need to use other statements to control the loop including next, last and redo statements.<br><br>
                    In practice, you use the do...while loop statement when you want the loop executes at least one before the condition is checked.<br><br>
                    A typical example of this is the command-line program that requests users for input until an exit command is provided.<br><br>
                    To use the next statement inside the do...while statement, you have to define an additional loop block for the next statement.<br><br>
                    The last statement exits the do...while loop immediately. It acts as the break statement in C/C++.<br><br>
                    To use do...while statement with the last statement, you need to add another block to the do...while statements.
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>until</h3>
                <p>
                    The while loop statement executes a block of code repeatedly as long as a condition is true.<br><br>
                    If you replace the keyword while by the keyword until, the test is reversed i.e., it executes a block of code as long as the condition is false.<br><br>
                    Both until and while statements evaluate the condition at the beginning of each iteration.<br><br>
                    Perl provides an optional block for the until statement: continue.<br><br>
                    The continue block is executed after each current iteration. The continue block is rarely used in practice.<br><br>
                    Different from the for loop statement, the until loop statement does not have the special loop variable i.e., $_. To use a loop variable, you must declare it explicitly before entering the loop or in the test condition.
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>do...until</h3>
                <p>
                    Perl do...until statement allows you to execute a block of code repeatedly as long as a test condition is false.<br><br>
                    Both do...until and do...while statements check the condition at the end of each iteration.<br><br>
                    Unlike the until or while statement, the do...until statement executes the code block at least once regardless of the result of the condition.<br><br>
                    The next statement allows you to start the next iteration of the loop. It works like the continue statement in C/C++. However, the next statement will not work with the do...until statement directly.<br><br>
                    To work around this, you have to place another block inside of the do...until statement for next statement.<br><br>
                    To use last statement with the do...until statement, you have to place another block inside the do...until statement for the last statement.
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>next</h3>
                <p>
                    The next statement allows you to start the next iteration of the loop and skips the rest of the code below it.<br><br>
                    In practice, you often use the next statement in conjunction with the if statement to specify a condition to start the next iteration.<br><br>
                    Typically, you use the next statement in the while and for loop statement, also in the until loop statement.<br><br>
                    The next statement is like the continue statement in C.<br><br>
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>last</h3>
                <p>
                    The last statement exits the loop immediately. It’s like the break statement in other programming languages such as C/C++ and Java.<br><br>
                    In practice, you often use the last statement to exit a loop if a condition is satisfied e.g., you find an array element that matches a search key, therefore, it is not necessary to examine other elements.<br><br>
                    Because of this, you typically use the last statement in conjunction with a conditional statement such as if or unless .<br><br>
                    For the do while and do until statement, you have to use an additional block<br><br>
                    If you use the last command alone, it exits only the innermost loop. In case, you have a nested loop that is a loop, called inner loop, nested inside another loop, called outer loop. If you want to exit both the inner and outer loop you need to:<br><br>
                    Put a label in the outer loop.<br><br>
                    Pass the label to the last statement.
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>extra facts</h3>
                <p>
                    If you want to execute a code block as long as the condition is false, you can use until statement.<br><br>
                    In case you want to check the condition at the end of each iteration, you use the do…while or do…until statement.<br><br>
                    To control the loop, you use the next and last statements.
                </p>
            </section>
            <section class="tussenkopjes">
                <section id="prl-code">
                    <p>Sample code:<br><br></p>
                    <p><?php include_once '../prl/code-examples/conditionals.cgi'; ?><br><br></p>
                    <p>it's output is:<br><br></p>
                    <p><?php virtual('../prl/code-examples/conditionals.cgi'); ?></p>
                </section>
            </section>
        </section>
    </section>

    <section id="constructor">
        <h1>constructor</h1>
        <a href="#navbar">Back to top</a>
        <section class="lists"></section>
    </section>

    <section id="dataStructures">
        <h1>data structures</h1>
        <a href="#navbar">Back to top</a>
        <section class="lists">
            <section class="tussenkopjes">
                <h3>list</h3>
                <p>
                    A Perl list is a sequence of scalar values. You use parenthesis and comma operators to construct a list. Each value is the list is called list element. List elements are indexed and ordered. You can refer to each element by its position.<br><br>
                    Each element in a list is separated by a comma.<br><br>
                    The print operator is a list operator, so you can display your list with that.<br><br>
                    A Perl list may contain elements that have different data types. This kind of list is called a complex list.<br><br>
                    Perl provides the qw() function that allows you to get a list by extracting words out of a string using the space as a delimiter. The qw stands for quote word.<br><br>
                    Similar to the q/ and q// operators, you can use any non-alphanumeric character as a delimiter.<br><br>
                    If you put a list, called an internal list, inside another list, Perl automatically flattens the internal list (which means that the list is part of the main list and doesnt count as a seperate one).<br><br>
                    The order of a list works in the same way as an array (0 is 1st element, 1 is 2nd, etc)<br><br>
                    To get multiple elements of a list at a time, you can put a list inside square brackets. This feature is called list slice. You can omit the parenthesis of the list inside the square bracket.<br><br>
                    Perl allows you to build a list based on a range of numbers or characters e.g., a list of numbers from 1 to 100, a list of characters from a to z.<br><br>
                    A list is immutable so you cannot change it directly. In order to change a list, you need to store it in an array variable.
                </p>
            </section>

            <section class="tussenkopjes">
                <h3>array</h3>
                <p><a href="#array">see array</a></p>
            </section>

            <section class="tussenkopjes">
                <h3>hash</h3>
                <p>
                    A hash is sometimes referred to as an associative array. (and works just like one in languages such as php)<br><br>
                    Like a scalar or an array variable, a hash variable has its own prefix. A hash variable must begin with a percent sign ( %). The prefix % looks like key/value pair so remember this trick to name the hash variables.<br><br>
                    To make the code easier to read, Perl provides the => operator as an alternative to a comma (,). It helps differentiate between keys and values and makes the code more elegant. (same thing in php)<br><br>
                    Perl requires the keys of a hash to be strings, meanwhile, the values can be any scalars. If you use non-string values as the keys, you may get an unexpected result.<br><br>
                    In addition, a hash key must be unique. If you try to add a new key-value pair with the key that already exists, the value of the existing key will be over-written.<br><br>
                    Perl provides the keys() function that allows you to get a list of keys in scalars. You can use the keys() function in a for loop statement to iterate the hash elements<br><br>
                </p>
            </section>
            <section class="tussenkopjes">
                <section id="prl-code">
                    <p>Sample code:<br><br></p>
                    <p><?php include_once '../prl/code-examples/hash.cgi'; ?><br><br></p>
                    <p>it's output is:<br><br></p>
                    <p><?php virtual('../prl/code-examples/hash.cgi'); ?></p>
                </section>
            </section>
        </section>
    </section>

    <section id="encapsulation">
        <h1>encapsulation</h1>
        <a href="#navbar">Back to top</a>
        <section class="lists"></section>
    </section>
</body>