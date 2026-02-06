<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="main">
        <div id="second">
            <div id="right">

                        <form method="post">
                            <fieldset>
                                <legend>
                                    Create an account
                                </legend>
                            <?php
                            include('db_com.php');
                                error_reporting (E_ALL);
                                if (isset ($_REQUEST["submit"])){
                                    $fullname =trim (addslashes($_REQUEST["fullname"]));
                                    $phonenumber = $_REQUEST["phonenumber"];
                                    $email = $_REQUEST["email"];
                                    $dob = $_REQUEST["dob"];
                                    $state = $_REQUEST["state"];
                                    $today = date ('Y-m-d');
                                    $age = $today - $dob;
                                    $hobbies = implode(",", $_REQUEST["hobbies"]);
                                    
                                    
                                    $gender = $_REQUEST["gender"];
                                    $add = $_REQUEST["add"];
                                    $address = $add ." ". $state;

                                    //inserting into table
                                    $sql = "INSERT INTO personal (fullname, dob, gender, phone, email, `address`, `state`, hobbies) VALUES ('$fullname','$dob','$gender','$phonenumber','$email','$add','$state','$hobbies')";

                                    $sql2 = "INSERT INTO public (fullname, dob, gender, phone, email, `address`, `state`, hobbies) VALUES ('$fullname','$dob','$gender','$phonenumber','$email','$add','$state','$hobbies')";

                                    mysqli_query ($conn, $sql) or die (mysqli_error($conn)); 
                                    $num = mysqli_insert_id($conn);
                                    if (mysqli_affected_rows($conn)!=1){
                                        $message = "error inserting record to database";
                                    }

                                    $result1 = mysqli_query($conn, $sql2);
                                    if ($result1){

                                    // $result2 = mysqli_query($conn, $sql2);
                                    // if ($result1 && $result2){

                                    
                                    

                                    if ($gender == "male"){
                                        echo "<script>alert('Dear sir $fullname, your phone number is $phonenumber, your email is $email, your age is $age years old, your home address is $address, Thank you!')</script>";
                                    }
                                    else{
                                        echo "<script>alert('Dear ma $fullname, your phone number is $phonenumber, your email is $email, your age is $age years old, your home address is $address, Thank you!')</script>";
                                    }


                                }
                                }
                                

                            ?>


                        
                        



                            <input type="text" name="fullname" id="fullname" required placeholder="Enter your fullname"><br><br>
                            <input type="number" name="phonenumber" id="number" required placeholder="Enter your phone number"><br><br>
                            <input type="text" name="email" id="email" required placeholder="Enter your email"><br><br>
                            <input type="date" name="dob" id="dob"><br><br>
                            <input type="radio" name="gender" value="male" id="">Male
                            <input type="radio" name="gender" value="female" id="">Female<br><br>
                            <input type="text" name="add" id="add" required placeholder="Enter your address"><br><br>


                            <select name="state" id="state"><br><br>
                                <option value="">Select State</option>
                            

                            <?php
                                $countrylist = "Abia, Adamawa, Akwa Ibom, Anambra, Bauchi, Bayelsa, Benue, Borno, Cross     River, Delta, Ebonyi, Edo, Ekiti, Enugu, Abuja, Gombe, Imo, Jigawa, Kaduna, Kano, Katsina, Kebbi, Kogi, Kwara, Lagos, Nasarawa, Niger, Ogun, Ondo, Osun, Oyo, Plateau, Rivers, Sokoto, Taraba, Yobe, Zamfara.";
                                $arrcountry = explode (",", $countrylist);
                                $countcountry = count ($arrcountry);
                                $maincount = $countcountry - 1;


                                for ($state = 0; $state <= $maincount; $state++){
                                    echo "<option value='$arrcountry[$state]'>$arrcountry[$state]</option>";
                                }
                            ?>
                            </select><br><br>


                            <label for="hobbies">hobbies</label> <br>
                            <input type="checkbox" name="hobbies[]" value="travelling" id="">Travelling
                            <input type="checkbox" name="hobbies[]" value="gaming" id="">Gaming
                            <input type="checkbox" name="hobbies[]" value="coding" id="">Coding
                            <input type="checkbox" name="hobbies[]" value="dancing" id="">Dancing
                            <input type="checkbox" name="hobbies[]" value="cooking" id="">Cooking <br><br>
                           




                            <button type="submit" name="submit" id="check" onclick="return confirm('are you sure to submit this form')">check</button>
                        </fieldset>  
                        </form>
                
            </div>

            <div id="left">

            </div>

        </div> 
    </div>
</body>
</html>