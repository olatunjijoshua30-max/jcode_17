<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant Portal</title>
</head>
<body>
    <div>
        <div>
        <form method="post">
            <?php
            include ('db_com.php');
            error_reporting (E_ALL);
            if (isset($_REQUEST["submit"])){
                $fullname = trim (addslashes($_REQUEST["fullname"]));
                $dob = ($_REQUEST["dob"]);
                $gender = ($_REQUEST["gender"]);
                $phone = ($_REQUEST["phone"]);
                $email = ($_REQUEST["email"]);
                $married = ($_REQUEST["married"]);
                $employ = ($_REQUEST["employ"]);
                $income = ($_REQUEST["income"]);
                $occupant = ($_REQUEST["occupant"]);
                $location = ($_REQUEST["location"]);
                $bedroom = ($_REQUEST["bedroom"]);
                $movein = ($_REQUEST["movein"]);
                $confirm = ($_REQUEST["confirm"]);
                $signature = trim (addslashes($_REQUEST["signature"]));
                $date = ($_REQUEST["date"]);

            
                echo "<script>alert('Form submitted sucessfully, We will get back to you very soon.')</script>";

                  //inserting into table
                                    $sql = "INSERT INTO tenant (fullname, dob, gender, phone, email, married, employ, income, occupant, `location`, bedroom, movein, confirm, `signature`, `date`) VALUES ('$fullname','$dob','$gender','$phone','$email','$married','$employ','$income','$occupant','$location','$bedroom','$movein','$confirm','$signature','$date')";

                                    mysqli_query ($conn, $sql) or die (mysqli_error($conn)); 
                                    $num = mysqli_insert_id($conn);
                                    if (mysqli_affected_rows($conn)!=1){
                                        $message = "error inserting record to database";
                                    }
                    //insert finished

            }
            
            ?>

            <p>Applicant Personal Details </p>
            <input type="text" name="fullname" id="" placeholder="Enter your fullname" required><br><br>
            <input type="date" name="dob" id=""><br><br>
            <input type="radio" name="gender" id="" value="male">Male
            <input type="radio" name="gender" id="" value="female">Female <br><br>
            <input type="number" name="phone" id="" placeholder="Enter phone number" required><br><br>
            <input type="text" name="email" id="" placeholder="Enter email address" required><br><br>
            <span>Marital Status </span><br>
            <input type="radio" name="married" id="" value="married">Married
            <input type="radio" name="married" id="" value="unmarried">Unmarried


            <p>Employment/Income Details</p>
            <span>Employment Status</span><br>
            <input type="radio" name="employ" id="" value="employed">Employed
            <input type="radio" name="employ" id="" value="self employed">Self Employed
            <input type="radio" name="employ" id="" value="student">student <br><br>
            <select name="income" id="">
                <option value="">Select Montly Income</option>
                <?php
                $incomelist = "Below ₦50000, ₦50000 – ₦99999, ₦100000 – ₦199999, ₦200000 – ₦299999, ₦300000 – ₦499999, ₦500000 – ₦749999, ₦750000 – ₦999999, ₦1000000 and above.";
                $arrincome = explode (",", $incomelist);
                $countincome = count ($arrincome);
                $maincount = $countincome - 1;

                for ($x = 0; $x <= $maincount; $x++){
                    echo "<option value='$arrincome[$x]'>$arrincome[$x]</option>";
                }
                ?>
            </select>


            <p>Household Information</p>
            <select name="occupant" id="">
                <option value="">Select Number of Occupant</option>
                <?php
                $x=1;

                while ($x <= 10){
                    echo "<option value='$x'>$x</option>";
                $x++;
                }
                ?>
            </select>


            <p>Rental Property Details</p>
            <input type="text" name="location" id="" placeholder="Enter Preferred Location"><br><br>
            <select name="bedroom" id="" required>
                <option value="">Select Number of Bedrooms</option>
                <?php
                $x=1;

                while ($x <= 10){
                    echo "<option value='$x'>$x</option>";
                $x++;
                }
                ?>
            </select><br><br>
            <input type="date" name="movein" id="">


            <p>Delclaration & Agreement</p>
            <input type="checkbox" name="confirm" id="" value="confirm" required> I confirm that all information provided is true<br><br>
            <input type="text" name="signature" id="" placeholder="Enter your name" ><br><br>
            <input type="date" name="date" id=""><br><br>
            
            
            <button type="submit" name="submit" onclick="return confirm('are you sure to submit this form')">Submit</button>
        </form>

            


        </div>
    </div>
</body>
</html>