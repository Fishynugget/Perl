<head>
    <link rel="stylesheet" href="../prl.css">
    <title>Document</title>
</head>
<body class="notmain">
    <section id="navbar">
        <a href="#files">files</a>
        <a href="../prl.cgi">Go back</a>
        <a href="../prl/web-test.cgi">log out</a>
    </section>
    <section id="files">
        <h1>files<h1>
        <a href="#navbar">Back to top</a>
        <section class="lists">
            <section class="tussenkopjes">
                <h3>opening a file</h3>
                <p>You use open() function to open files. The open() function has three arguments:<br><br>
                    Filehandle that associates with the file<br><br>
                    Mode: you can open a file for reading, writing or appending.<br><br>
                    Filename: the path to the file that is being opened.<br><br>
                    The code as example: "open(filehandle,mode,filename)" which is: "open(FH, '<', 'c:\example.txt');"<br><br>If you use "open(FH, '<', 'c:\example.txt') or die $!;" it will tell you wat went wrong if something were to go wrong, the $! is a special variable that conveys the error message telling why the open() function failed. It could be something like “No such file or directory” or “Permission denied”. In case the file c:\temp\test.txt does not exist, you get an error message “No such file or directory”.
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>filemode</h3>
                <p>Read mode (<): you only can read the file but cannot change its content.<br><br>
                    Write mode (>): If the file does not exist, a new file is created. If the file already exists, the content of the file is wipe out, therefore, you should use the write mode with extra cautious.<br><br>
                    Append mode ( >>): as its name implied, you can open the file for appending new content to the existing content of the file. However, you cannot change the existing content in the file.
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>closing a file</h3>
                <p>
                    Perl will automatically close the file for you, however, it is not a good programming practice. The filehandle should always be closed explicitly.<br><br>
                    example: "close(FH);"
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>write to a file</h3>
                <p>
                    WARNING: If you write to a file that already contains text then Perl will delete that content, you should use the mode Append instead of Write in this case.
                    example code: "print FH $stringOfWhatYouWantToWriteToTheFile;"
                </p>
            </section>
            <section class="tussenkopjes">
                <h3>save a file</h3>
                <p></p>
            </section>
            <section class="tussenkopjes">
                <h3>file test operators</h3>
                <p>-e is used to check if a file exists: "if(-e $filenam){example}<br><br>
                    the other options are:<br><br>
                    -r: check if the file is readable<br><br>
                    -w: check if the file is writable<br><br>
                    -x: check if the file is executable<br><br>
                    -o: check if the file is owned by effective uid.<br><br>
                    -R: check if file is readable<br><br>
                    -W: check if file is writable<br><br>
                    -X: check if file is executable<br><br>
                    -O: check if the file is owned by real uid.<br><br>
                    -e: check if the file exists.<br><br>
                    -z: check if the file is empty.<br><br>
                    -s: check if the file has nonzero size (returns size in bytes).<br><br>
                    -f: check if the file is a plain file.<br><br>
                    -d: check if the file is a directory.<br><br>
                    -l: check if the file is a symbolic link.<br><br>
                    -p: check if the file is a named pipe (FIFO): or Filehandle is a pipe.<br><br>
                    -S: check if the file is a socket.<br><br>
                    -b: check if the file is a block special file.<br><br>
                    -c: check if the file is a character special file.<br><br>
                    -t: check if the file handle is opened to a tty.<br><br>
                    -u: check if the file has setuid bit set.<br><br>
                    -g: check if the file has setgid bit set.<br><br>
                    -k: check if the file has sticky bit set.<br><br>
                    -T: check if the file is an ASCII text file (heuristic guess).<br><br>
                    -B: check if the file is a “binary” file (opposite of -T).<br><br>
                    <strong>If you want to use more than one just do: "if(-e $filename && -f _ && -r _ ){print("File $filename exists and readable\n");}"</strong><br><br>
                    Whenever you use the file test operator, Perl will make a new call of stat(), which can be expensive. However, Perl stores the result from the last stat() call to a special filehandle named _, so the subsequent file test operators can use the result that stores in the _ filehandle.<br><br>
                    Since Perl version 5.9.1 you can stack file test operators as follows: "if(-e -f -r $filename){print("File $filename exists and readable\n");}"
                </p>
            </section>
            <section class="tussenkopjes">
                <h3></h3>
                <p></p>
            </section>
        </section>
    </section>
    <section id="functions">
        <h1>functions<h1>
        <section class="lists">
            <section class="tussenkopjes">
                <h3></h3>
                <p></p>
            </section>
        </section>
    </section>
    <section id="inheritance">
        <h1>inheritance<h1>
        <section class="lists">
            <section class="tussenkopjes">
                <h3></h3>
                <p></p>
            </section>
        </section>
    </section>
</body>