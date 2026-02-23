<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facebook</title>
    <link rel="shortcut icon" href="fbfavi.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="me">
        <div class="her">
        <form action="" method="post">
            <p class="she">
                facebook 
            </p>
            <label class="ail">Email or Phone</label>
            <input type="text" name="" id="ema">
            <label class="ssw">password</label>
            <input type="text" name="" id="abel">
            <input type="submit" value="Log In" class="ogi">
            <a href="" class="rgo">Forgot password?</a>
        </form>
        </div>
        <div class="pe">
            <p class="cea">
                Thanks for stopping by!
            </p>
            <p class="rea">
                We hope to see you again soon.
            </p>
        </div>
        <div class="nike">
        <form action="" method="post">
            <p class="unt">
                Create an account
            </p>
            <p class="ron">
                It's free and always will be.
            </p>
            <input type="text" name="" id="show" placeholder="First name" class="bag">
           <input type="text" name="" id="rizz" placeholder="Surname" class="jab">
           <input type="text" name="" id="ned" placeholder="Mobile number or email address" class="gab">
           <input type="password" name="" id="ord" placeholder="New password" class="der">
           <label for="" class="day">Birthday</label>
           

           <select name="" id="">
                <option value="">Day</option>
                <?php
                    $day = 1;
                    $x = $day;

                    while ($x <= 31){
                        echo "<option value='$x'>$x</option>";
                       
                    $x++;
                     }
                ?>
           </select>

            <select name="" id="">
                <option value="">month</option>
                <?php
                    $monthlist = "January, Feburary, March, April, May, June, July, August, September,  October, November, December,";
                    $arrmonth = explode (",", $monthlist);
                    $countmonth = count ($arrmonth);
                    $maincount = $countmonth - 2;

                    for ($x = 0; $x <= $maincount; $x++){

                        echo "<option value='$arrmonth[$x]'>$arrmonth[$x]</option>";
                    }
                ?>
            </select>

            <select name="" id="">
                <option value="">Year</option>
                <?php
                    $year = 1970;
                    $date = date ('Y');
                    $x = $year;
                    $y = $date;

                    while ($x <= $y){
                        echo "<option value='$x'>$x</option>";

                        $x++;
                    }


                ?>
            </select>








           <a href="" class="rth">why do i need to provide my <br> date of birth?</a>
           <input type="checkbox" name="" id="ale">
           <label class="bel">Female</label>
           <input type="checkbox" name="" id="box">
           <label class="ris">Male</label>
           <p class="ing">
            By clicking sign up, you agree to our Terms, Data policy and Cookie <br>
            policy. you may receive sms notification from us and can opt out at <br>
            anytime.
           </p>
           <input type="submit" value="Signup" class="lue">
           <p class="bmit">
            create a page for a celebrity, band or business
           </p>
        </form>
        </div>

    </div>
    
</body>
</html>