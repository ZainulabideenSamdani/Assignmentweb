<!DOCKTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<header style="margin-top:70px;">
<img src="./Sample4.png" alt="Picture" style="width:1250px; margin-left:70px;"/>
</header>
<form action="" method="post">
<section class="container" style="margin-top:40px;">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<hr style="padding: 1px;background-color:#45b7b7;" class="form-control">
<input type="text" id="Name1" name="Name" class="form-control" style="height:60px; font-weight:bold;" placeholder="Enter Your Name">
<hr style="padding: 1px;background-color:#45b7b7;" class="form-control">
<div>
<div style="text-align:center;">
  <img src="./Message.png" alt="EMAIL" style="width:100px;"/></div>
  <input type="email" id="Email1" name="Email" style="font-family:Gill Sans MT; text-align:center; margin-top:-40px;" class="form-control" placeholder="EMAIL">
<div style="text-align:center;">
  <img src="./Phone1.png" alt="PHONE" style="width:170px;"/></div>
  <input type="text" id="Phone1" name="Phone" style="font-family:Gill Sans MT; text-align:center; margin-top:-40px;" class="form-control" placeholder="PHONE">
<div style="text-align:center;">
  <img src="./Linkedin1.png" alt="LinkedIn" style="width:210px;"/></div>
  <input type="text" id="Linkedin1" name="Linkedin" style="font-family:Gill Sans MT; text-align:center; margin-top:-40px;" class="form-control" placeholder="LINKEDIN URL">

<textarea name="Linkedweb" class="form-control" style="margin-top:30px;" placeholder="LINK TO OTHER ONLINE PROPERTIES: PORTFOLIO/WEBSITE/BLOG"></textarea>
</div>
<hr style="padding: 1px;background-color:#45b7b7;" class="form-control">

<div style="text-align:center;">
 <h5 style="font-family:Gill Sans MT">OBJECTIVE</h5>
 <hr style="padding: 0.5px;background-color:#45b7b7; width:35px;">
 <textarea name="Objective" class="form-control" placeholder="To get started, click placeholder text and start typing. Be brief: one or two sentences."></textarea>
</div>
<hr style="padding: 1px;background-color:#45b7b7;" class="form-control">

<div style="text-align:center;">
 <h5 style="font-family:Gill Sans MT">SKILLS</h5>
 <hr style="padding: 0.5px;background-color:#45b7b7; width:35px;">
 <textarea name="Skills" class="form-control" placeholder="Explain what you are especially good at. What sets you apart? Use your own language—not jargon."></textarea>
</div>
<hr style="padding: 1px;background-color:#45b7b7;" class="form-control">
</div>



<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="text-align:center;">
<hr style="padding: 1px;background-color:#45b7b7;" class="form-control">
<h4 style="font-family:Gill Sans MT;">EXPERIENCE</h4>
<hr style="padding: 1px;background-color:#45b7b7;" class="form-control">
<div style="line-hieght:2px;">
  <input type="text" id="job1" name="Job1" style="font-family:Gill Sans MT; width:450px; text-align:center; font-weight:bold;" placeholder="JOB TITLE/COMPANY">
    <input type="text" id="Date1" name="Date1" style="font-family:Gill Sans MT; width:350px; text-align:center;" placeholder="Dates From – To">
    <textarea name="job11" class="form-control" placeholder="Summarize your key responsibilities, leadership, and most stellar accomplishments. Don’t list everything; keep it relevant and include data that shows the impact you made."></textarea>
</div>
<div style="line-hieght:2px; margin-top:50px;">
  <input type="text" id="Job2" name="Job2" style="font-family:Gill Sans MT; width:450px; text-align:center; font-weight:bold;" placeholder="JOB TITLE/COMPANY">
    <input type="text" id="date2" name="Date2" style="font-family:Gill Sans MT; width:350px; text-align:center;" placeholder="Dates From – To">
    <textarea name="job22" class="form-control" placeholder="Summarize your key responsibilities, leadership, and most stellar accomplishments. Don’t list everything; keep it relevant and include data that shows the impact you made."></textarea>
</div>
<div style="margin-top:50px;">
<hr style="padding: 1px;background-color:#45b7b7;" class="form-control">
<h4 style="font-family:Gill Sans MT;">EDUCATION</h4>
<hr style="padding: 0.5px;background-color:#45b7b7; color:#45b7b7;" class="form-control">
</div>
<div style="line-hieght:2px;">
  <input type="text" id="Education1" name="Education" style="font-family:Gill Sans MT; width:450px; text-align:center; font-weight:bold;" placeholder="DEGREE / DATE EARNED"/>
    <input type="text" id="School1" name="School" style="font-family:Gill Sans MT; width:350px; text-align:center;" placeholder="School">
    <textarea name="GPA" class="form-control" placeholder="You might want to include your GPA and a summary of relevant coursework, awards, and honors."></textarea>
</div>

<div style="margin-top:158px;">
<hr style="padding: 1px;background-color:#45b7b7;" class="form-control">
<h4 style="font-family:Gill Sans MT;">VOLUNTEER EXPERIENCE OR LEADERSHIP</h4>
<hr style="padding: 0.5px;background-color:#45b7b7; color:#45b7b7;" class="form-control">
</div>
<div style="line-hieght:2px; margin-bottom:50px; margin-bottom">
    <textarea name="Voluntry" class="form-control" placeholder="Did you manage a team for your club, lead a project for your favorite charity, or edit your school newspaper? Go ahead and describe experiences that illustrate your leadership abilities."></textarea>
</div>
</div>
</div>
<div>
  <button type="submit" value="submit" class="btn btn-primary" style="background-color:#45b7b7; margin-left:800px;" name="submit_btn">Submit</button>
  <button type="button" class="btn btn-primary" style="background-color:#45b7b7;  margin-left:80px;" name="recieve_btn">Retrieve</button>
</div>
</section>
</form>
<?php
  if(isset($_POST['submit_btn'])){
  $FirstName = $_POST['Name'];
  $Email = $_POST['Email'];
  $Phone = $_POST['Phone'];
  $Linkedin = $_POST['Linkedin'];
  $Linkedweb = $_POST['Linkedweb'];
  $Objectives = $_POST['Objective'];
  $Skills = $_POST['Skills'];
  $job1 = $_POST['Job1'];
  $Date1 = $_POST['Date1'];
  $job11 = $_POST['job11'];
  $job2 = $_POST['Job2'];
  $Date2 = $_POST['Date2'];
  $job22 = $_POST['job22'];
  $Education = $_POST['Education'];
  $School = $_POST['School'];
  $GPA = $_POST['GPA'];
  $Voluntry = $_POST['Voluntry'];
  // create connection
   $hostname = 'localhost';
   $db_username = 'root';
   $db_passward = '';
   $db_name = 'cv-database';

   //Create connection
   $conn =mysqli_connect($hostname,$db_username,$db_passward,$db_name);
   //if connection is not established then we use if statement

   if(!$conn){
   die("Connection Failed :".mysqli_error($conn));
   }

   //query
   $query = "INSERT INTO `Sample4`(`Name`, `Email`, `Phone`, `LinkedinURL`, `OtherWeb`, `Objectives`, `Skills`, `JobT1`, `Date1`, `Experiance1`, `JobT2`, `Date2`, `Experiance2`, `Degree`, `School`, `Education`, `volunteer`) VALUES ('$FirstName','$Email','$Phone',
     '$Linkedin','$Linkedweb','$Objectives','$Skills','$job1','$Date1','$job11','$job2','$Date2','$job22','$Education','$School','$GPA','$Voluntry')";
   //INSERT will be capital or smaller alphabets and avoid spaces in columns for string use sigle course in sql

  //execute query
  $result = mysqli_query($conn , $query);//if error then change its position
  if(!$result){
  die("query Failed :".mysqli_error($conn));
  }
  else{
  echo "Data Inserted Succesfully...";
  $submit_btn = '';

  }
}
else {
  echo "Please Click Submit Button";
}
  //click browse to check data;
?>
<footer style="margin-top:150px; margin-bottom:60px;">
<img src="./Sample4.png" alt="Picture" style="width:1250px; margin-left:70px;"/>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
