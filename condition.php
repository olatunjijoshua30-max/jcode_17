<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condition</title>
</head>
<body>
    <form method="post">
        <?php
            error_reporting (E_ALL);
            if (isset ($_REQUEST["submit"])){
                $fullname = $_REQUEST["fullname"];
                $dob = $_REQUEST["dob"];
                $today = date ('Y-m-d');
                $age = $today - $dob;
                $gender = $_REQUEST["gender"];

              if ($gender == "male"){
                    echo "<script>alert('dear sir $fullname, you are $age years old')</script>";
                } 
               else{
                    echo "<script>alert('dear ma $fullname, you are $age years old')</script>";
                }
                 }
        ?>
        <input type="text" name="fullname" placeholder="enter your fullname here" id="" required>
        <input type="date" name="dob" id="" required>
        
        <input type="radio" name="gender" value="male" id="" required> male
        <input type="radio" name="gender" value="female" id="" required>female
        <button type="submit" name="submit">check</button>



    </form>
</body>
</html>