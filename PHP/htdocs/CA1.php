<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $rating = $_POST["rating"];
    $comment = $_POST["comments"];

    $errors = [];

    if(empty($name)){
        $errors[] = "Name is required";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Invalid Email";
    }

    if(empty($course)){
        $errors[] = "Course is required";
    }

    if(empty($rating)){
        $errors[] = "Rating is required";
    }

    if(count($errors) > 0){
        echo "<h2> List of Errors </h2>";
        echo "<ul>";
        foreach ($errors as $error){
            echo "<li>$error</li>";
        }
        echo "</ul>";

        echo "<a href = 'CA1.html'>Go Back</a>";
    }
    else{
        echo "<h2> Thanks you for your feedback </h2>";
        echo "Name: $name <br>";
        echo "Course: $course <br>";
        echo "Rating: $rating <br>";
    }
?>