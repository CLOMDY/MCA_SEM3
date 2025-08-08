<?php
echo"<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Program Page</title>
    <link rel='stylesheet' href='style.css'>
    </head>
    <body>
    <header>
        <h1>Welcome to the Program Page</h1>
        </header>
        <main>
        <section>
            <h2>Program Information</h2>
            <p>This page contains information about various programs.</p>
            <ul>
                <li>Program 1: Description of program 1.</li>
                <li>Program 2: Description of program 2.</li>
                <li>Program 3: Description of program 3.</li>
                <li>Program 4: Description of program 4.</li>
                <li>Program 5: Description of program 5.</li>
                </ul>
                <p>For more details, please contact us.</p>
                </section>
                <section>
                <h2>Contact Us</h2>
                <p>If you have any questions, feel free to reach out.</p>
                <form action='contact.php' method='post'>
                    <label for='name'>Name:</label>
                    <input type='text' id='name' name='name' required>
                    <label for='email'>Email:</label>
                    <input type='email' id='email' name='email' required>
                    <input type='submit' value='Submit'>
                    </form>
                    </section>
                    </main>
                    <footer>
                    <p>&copy; 2023 Program Page. All rights reserved.</p>
                    </footer>
                    </body>
                    </html>";
                    
?>