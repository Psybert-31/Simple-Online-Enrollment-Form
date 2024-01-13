<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>High Five</title>
</head>
<nav>

</nav>
<body>
    <div class="box">
    <h1 class="ins">INSTRUCTION</h1>
    <p class="instruction">Make sure to fill out everything and be careful when making choices. It will reflect on your registration form. Good luck! </p>
    </div>
    <div class="box1">
    <h1 class="ins">CONTACT/ADDRESS</h1>
    <p class="instruction">Address: Boni Ave, Mandaluyong, 1550 Metro Manila
Hours: 
Closed ⋅ Opens 8 AM Mon
Phone: (02) 8534 8267
Campus: Urban; Main Campus: Mandaluyong City; Satellite: Pasig City; Baras, Rizal</p>
    </div>
    <div class="box2">
    <h1 class="ins">CREDITS TO</h1>
        <p  class="instruction">
            Leader: Alieca Santos <br>
            Member: <br>
            Ash Siebert Joloan <br>
            John Patrick Juni <br>
            Niel Ivan Montessa <br>
            Arkin Andrey Sana-ani <br>
        </p>
    </div>
    <div>
        <h1 class="tagline">RIZAL TECHNOLOGICAL UNIVERSITY</h1>
    </div>
    <div>
        <center><h1 class="tagline1">COLLEGE OF ENGINEERING, ARCHITECTURE AND TECHNOLOGY BONI CAMPUS</h1></center>
    </div>
<div class="logo1">
    <img src="rtu.PNG">
    </div>
    <div class="logo2">
    <img src="ceit.PNG">
    </div>
    <h2 class="g-name1">HIGH FIVE</h2>
    <h2 class="g-name">ONLINE STUDENT ENROLLMENT FORM</h2>
    <form action="index.php" method="post">
        
        <div class="applicant's-basic-info">
            <h1 class="b-i">BASIC INFORMATION</h1>
            <br>
            <div class="name-con">
                <div>
                    <br>     
                    <input class="input1" type="text" name="firstname" required/> 
                    <br>
                    <label class="label1"> First Name </label>  
                    <br>
                    <br>   
                    <input class="input1" type="text" name="middlename" required/>
                    <br>
                    <label class="label1"> Middle Name </label>  
                    
                </div>
                <div>
                    <br>         
                    <input class="input1" type="text" name="lastname" required/> 
                    <br>
                    <label class="label1" class="label1"> Last Name </label>
                    <br>
                    <br>
                    <input class="input1" type="date" name="birthdate" required>
                    <br>
                    <label class="label1">Birthdate </label>
                </div>
            </div>
            <br>
            <div class="gender-con">
                <label class="gender">Gender :</label><br> 
                <div class="gender-radio">
                    <div>
                        <input class="input2"  type="radio" name="gender" id="male" value="Male"/><label class="gen"  for="male">Male</label> 
                    </div>
                    <div>
                        <input class="input2" type="radio" name="gender" id="female" value="Female"/><label for="female">Female</label>
                    </div>
                    <div>
                        <input class="input2" type="radio" name="gender" id="other" value="Other"/> <label for="other">Other</label> 
                    </div>
                </div>
            </div>
        </div>
<br>
<br>
        <div class="contact">
            <h1 class="header">CONTACT INFORMATION</h1>
            <br>        
            <div class="contact-con">
                <div>
                    <label class="label1" >Email:</label>
                    <br>
                    <input class="input1" type="email" name="email" required/>    
                </div>
                <div>
                    <label class="label1">Mobile No. :</label>  
                    <br>
                    <input class="input1" type="tel" name="phone" required/>
                </div>
            </div>
        </div>
       
        <br>
        <br>
        
        <div class="applicant-course">
            <h1 class="header">COURSE</h1>
            <br>  
            <div class="course-con">
                <label>Year Level: </label>
                <br>
                <select class="input2" name="Year" required>
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                </select>
                <br><br>
                <label>Course (First Choice) :</label>   
                <br>
                <select class="input2" name="course1" required>  
                <option value="BSA">Bachelor of Science in Architecture</option>  
                <option value="BSCE">Bachelor of Science in Computer Engineering</option>  
                <option value="BSEE">Bachelor of Science in Electrical Engineering</option>  
                <option value="BSElecE">Bachelor of Science in Electronics Engineering	</option>  
                <option value="BSIE">Bachelor of Science in Industrial Engineering</option>  
                <option value="BSIT">Bachelor or Science in Information Technology</option>  
                <option value="BSICE">Bachelor of Science in Instrumentation and Control Engineering	</option>  
                <option value="BSA">Bachelor of Science in Accountancy	</option>  
                <option value="BSE">Bachelor of Science in Entrepreneurship	</option>  
                <option value="BSOA">Bachelor of Science in Office Administration	</option>
                <option value="BSBAMOM">Bachelor of Science in Business Administration Major in Operation Management</option>  
                <option value="BSBAMMM">Bachelor of Science in Business Administration Major in Marketing Management</option>  
                <option value="BSBAMFM">Bachelor of Science in Business Administration Major in Financial Management</option>  
                <option value="BSBAMHRDM">Bachelor or Science in Business Administration Major in Human Resource Development Management	</option>  
                <option value="BSP">Bachelor of Science in Psychology</option>  
                <option value="BSAPS">Bachelor of Arts in Political Science</option>  
                <option value="BSS">Bachelor of Science in Statistics</option>
                <option value="BSB">Bachelor of Science in Biology</option>  
                <option value="BSA">Bachelor of Science in Astronomy</option>
                <option value="BSSEME">Bachelor of Secondary Education Major in English</option>  
                <option value="BSEMM">Bachelor of Secondary Education Major in Math</option>  
                <option value="BSEMS">Bachelor of Secondary Education Major in Sciences</option>  
                <option value="BSEMSS">Bachelor of Secondary Education Major in Social Studies</option>  
                <option value="BSEMF">Bachelor of Secondary Education Major in Filipino</option>  
                <option value="BTVTEMA">Bachelor or Technical-Vocational Teacher Education Major in Animation</option>  
                <option value="BTVTEMCSS">Bachelor or Technical-Vocational Teacher Education Major in Computer System Servicing</option>  
                <option value="BTVTEMVCSS">Bachelor or Technical-Vocational Teacher Education Major in Visual Graphic Design</option>  
                <option value="BTVTEMGFD">Bachelor or Technical-Vocational Teacher Education Major in Garments Fashion and Design</option>  
                <option value="BTVTEMET">Bachelor or Technical-Vocational Teacher Education Major in Electronics Technology</option>  
                <option value="BTVTEMWFT">Bachelor or Technical-Vocational Teacher Education Major in Welding and Fabrications Technology</option> 
                <option value="BSPE">Bachelor of Science in Physical Education	</option>
                </select>  
                <br>
                <br>
                <label>Course (Second Choice) :</label>   
                <br>
                <select class="input2" name="course2" required>  
                <option value="BSA">Bachelor of Science in Architecture</option>  
                <option value="BSCE">Bachelor of Science in Computer Engineering</option>  
                <option value="BSEE">Bachelor of Science in Electrical Engineering</option>  
                <option value="BSElecE">Bachelor of Science in Electronics Engineering	</option>  
                <option value="BSIE">Bachelor of Science in Industrial Engineering</option>  
                <option value="BSIT">Bachelor or Science in Information Technology</option>  
                <option value="BSICE">Bachelor of Science in Instrumentation and Control Engineering	</option>  
                <option value="BSA">Bachelor of Science in Accountancy	</option>  
                <option value="BSE">Bachelor of Science in Entrepreneurship	</option>  
                <option value="BSOA">Bachelor of Science in Office Administration	</option>
                <option value="BSBAMOM">Bachelor of Science in Business Administration Major in Operation Management</option>  
                <option value="BSBAMMM">Bachelor of Science in Business Administration Major in Marketing Management</option>  
                <option value="BSBAMFM">Bachelor of Science in Business Administration Major in Financial Management</option>  
                <option value="BSBAMHRDM">Bachelor or Science in Business Administration Major in Human Resource Development Management	</option>  
                <option value="BSP">Bachelor of Science in Psychology</option>  
                <option value="BSAPS">Bachelor of Arts in Political Science</option>  
                <option value="BSS">Bachelor of Science in Statistics</option>
                <option value="BSB">Bachelor of Science in Biology</option>  
                <option value="BSA">Bachelor of Science in Astronomy</option>
                <option value="BSSEME">Bachelor of Secondary Education Major in English</option>  
                <option value="BSEMM">Bachelor of Secondary Education Major in Math</option>  
                <option value="BSEMS">Bachelor of Secondary Education Major in Sciences</option>  
                <option value="BSEMSS">Bachelor of Secondary Education Major in Social Studies</option>  
                <option value="BSEMF">Bachelor of Secondary Education Major in Filipino</option>  
                <option value="BTVTEMA">Bachelor or Technical-Vocational Teacher Education Major in Animation</option>  
                <option value="BTVTEMCSS">Bachelor or Technical-Vocational Teacher Education Major in Computer System Servicing</option>  
                <option value="BTVTEMVCSS">Bachelor or Technical-Vocational Teacher Education Major in Visual Graphic Design</option>  
                <option value="BTVTEMGFD">Bachelor or Technical-Vocational Teacher Education Major in Garments Fashion and Design</option>  
                <option value="BTVTEMET">Bachelor or Technical-Vocational Teacher Education Major in Electronics Technology</option>  
                <option value="BTVTEMWFT">Bachelor or Technical-Vocational Teacher Education Major in Welding and Fabrications Technology</option> 
                <option value="BSPE">Bachelor of Science in Physical Education	</option>
                </select>  
            </div>
        </div>
        <br>
        <br>
        <div class="applicant-address">
            <h1 class="header">ADDRESS</h1>
            <br>
            <div class="address-con">
                <div>
                    
                    <br>
                    <input class="input1" type="text" name="street" required/>
                    <br>
                    <label class="label1">Street: </label>
                    <br>
                    
                    <br>
                    <input  class="input1" type="text" name="city" required/>
                    <br>
                    <label class="label1">City: </label>
                    <br>
                    
                    <br>
                    <input class="input1" type="text" name="country" required/>
                    <br>
                    <label class="label1">Country: </label>
                </div>
                <div>
                    
                    <br>
                    <input class="input1" type="text" name="state" required/>
                    <br>
                    <label class="label1">State/Province: </label>
                    <br>
                    
                    <br>
                    <input class="input1" type="number" name="zip" required/>
                    <br>
                    <label class="label1">Postal/Zip Code: </label>
                </div>
            </div>
           
        </div>
        <br>
        <br>    
        <div class="applicant-guardian">
            <h1 class="header">GUARDIAN</h1>
            <br>
            <div class="guardian-con">
                <div>
                    <label class="label1">FirstName: </label>
                    <br>
                    <input class="input1" type="text" name="gfname" required/>
                    <br>
                    <br>
                    <label class="label1">PhoneNumber: </label>
                    <br>
                    <input class="input1" type="tel" name="gnum" required/>
                </div>
                
                <div>
                    <label class="label1">LastName: </label>
                    <br>
                    <input class="input1" type="text" name="glname" required/>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="botlane">
        <label>Do you have any scholarship? </label>
        <br>
        <br>  
        <input type="radio" id="yes" name="scholar" value="Yes"/> <label>Yes</label>  
        <input type="radio" id="no" name="scholar" value="No" checked/> <label>No</label>  
        <br><br>
        <input type="checkbox" name="agree" id="agree" required>
        <label for="agree">I agree with terms and conditions</label>
        </div>
        <br><br>
        <input class="submit" type="submit" name="Submit" value="Submit" class="submit">
        <div class="output">
        <br>
        <div class="output-con">
            <?php
                if(isset($_POST['Submit'])) {

                    function StudentInfo($fname,$mname,$lname,$birthdate,$gender,$email,$phone,$year,$fchoice,$schoice,$street,$state,$city,$country,$scholar) {
                        $Name = array();
                        array_push($Name, $fname,$mname,$lname,$birthdate,$gender,$email,$phone,$year,$fchoice,$schoice,$street,$state,$city,$country,$scholar);

                        echo "Applicant Name: ",  $Name[0] , " " , $Name[1] , " " , $Name[2];

                        
                        echo "<br>BirthDate: ".$Name[3];
                        echo "<br>Gender: ".$Name[4];
                        echo "<br>Email: ".$Name[5];
                        echo "<br>Mobile No. : ".$Name[6];
                        echo "<br>S.Y : ".$Name[7];
                        echo "<br>Course (First Choice): ".$Name[8];
                        echo "<br>Course (Second Choice): ".$Name[9];
                        echo "<br>Address: ".$Name[10]." ".$Name[11]." ".$Name[12]." ".$Name[13];
                        echo "<br>Have any Scholarship? : ".$Name[14];
                    }

                    function GuardianInfo($gfname,$glname,$gnum){
                        $Guardian = array();
                        array_push($Guardian, $gfname,$glname,$gnum);

                        echo "<br>Name of Guardian: ".$Guardian[0]." ".$Guardian[1];
                        echo "<br>Mobile No. of Guardian: ".$Guardian[2];

                    }

                    StudentInfo($_POST['firstname'],$_POST['middlename'], $_POST['lastname'], $_POST['birthdate'], $_POST['gender'], $_POST['email'], $_POST['phone'], $_POST['Year'], $_POST['course1'], $_POST['course2'], $_POST['street'], $_POST['state'], $_POST['city'], $_POST['country'],
                    $_POST['scholar']);
                    
                    GuardianInfo($_POST['gfname'], $_POST['glname'], $_POST['gnum']);
                
                }
            ?>
        </div>
      
    </form>
   
    
</body>



</html>