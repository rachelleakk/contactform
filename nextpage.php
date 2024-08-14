<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php
    //retrieve data from the form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $issue = $_POST['issue'];
        $comment= $_POST['comment'];
    ?>   
<div class="display-container">
    <?php
     // display form data to the user
        echo "<p><strong> Name:</strong> $name </p>";
        echo "<p><strong> E-mail:</strong> $email </p>";
        echo "<p><strong> issue:</strong> $issue </p>";
        echo "<p><strong>comment:</strong> $comment </p>";
    ?>
      
<?php
     //edit form
        echo "<form action='index.html' method='get'>";
        echo "<input type='hidden' name='name' value='$name'>";
        echo "<input type='hidden' name='email' value='$email'>";
        echo "<input type='hidden' name='issue' value='$issue'>";
        echo "<input type='hidden' name='comment' value='$comment'>";
        echo "<input type='submit' value='Edit' id='edit-form'>";
        echo"</form>";
        ?>
   
<?php
        // save button form 
       echo "<form action='savedata.php' method='post'>";
        echo "<input type='hidden' name='name' value='$name'>";
        echo "<input type='hidden' name='email' value='$email'>";
        echo "<input type='hidden' name='issue' value='$issue'>";
        echo "<input type='hidden' name='comment' value='$comment'>";
        echo "<input type='submit' value='Submit' id='save-form'>";
        echo"</form>";
        ?>
        <form action="index.html" method="post">
            <input type="submit" value="Cancel" id="cancel">
        </form>
</div>
</body>
</html>
