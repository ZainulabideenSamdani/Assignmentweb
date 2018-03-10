<!DOCKTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <form action="" method="post">
  <header class="container">
    <div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div>
    <img src="ZAIN.jpg" style="margin-left:20%; top:60; right:252; border: 7px solid #f45555; position: relative;" class="rounded-circle" height="300" width="300">
  </div>
  <div style="background-color: #f45555; margin-top:-150px; margin-bottom:120px; padding:20px; text-align:right;" class="form-group">
    <h5><strong>Name:<input type="text" name="Name" id="Name" /></strong></label>
    <h5><strong>Manager at Telenor Office|Tel: 1234-5678909:<input type="text" name="Tel-no" id="TELL-NO" /><br> Link/Website:<input type="text" name="Website" id="WEBSITE" /></strong></h5>

</div>
</div>
</div>
  </header>
  <section class="container" style="font-family:Rockwell; font-weight:inherit; font-size:20px;">
  <div class="row">
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
     <h3><strong>OBJECTIVE</strong><hr style="padding: 5px;background-color:#f45555;"></h3>
     <P style="font-size:15px text-align:justify;">To get started, click place holdertext and start typing. Be brief: one or two sentences.</P>
     <textarea name="Objectives" class="form-control"></textarea>
     <h3><strong>SKILLS</strong><hr style="padding: 5px;background-color:#f45555;"></h3>
     <p style="font-size:15px text-align:justify;">Explain what you’re especially good at. What sets you apart? Use your own language—not jargon.</p>
     <textarea name="Skills" class="form-control"></textarea>
   </div>
   <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
     <h3><strong>EXPERIENCE</strong><hr style="padding: 5px;background-color:#f45555;"></h3>
     <p style="font-size:15px text-align:justify;"><strong>JOB TITLE • COMPANY • DATES FROM – TO</strong>
     </br>Summarize your key responsibilities, leadership, and most stellar accomplishments. Don’t list everything; keep it relevant and include data that shows the impact you made.</p>
     <textarea name="Experience-leadership" class="form-control"></textarea>
     <p style="font-size:15px text-align:justify;"><strong>JOB TITLE • COMPANY • DATES FROM – TO</strong>
     </br>Think about the size of the team you led, the number of projects you balanced, or the number of articles you wrote.</p>
     <textarea name="Experience-think" class="form-control"></textarea>
     <h3><strong>EDUCATION</strong><hr style="padding: 5px;background-color:#f45555;"></h3>
     <p style="font-size:15px text-align:justify;"><strong>DEGREE • DATE EARNED • SCHOOL</strong>
     </br>You might want to include your GPA and a summary of relevant coursework, awards, and honors.</p>
     <textarea name="Education-gpa" class="form-control"></textarea>
     <p style="font-size:15px text-align:justify;"><strong>DEGREE • DATE EARNED • SCHOOL</strong>
     </br>On the Home tab of the ribbon, check out Styles to apply the formatting you need with just a click.</p>
     <textarea name="Education-ribbon" class="form-control"></textarea>
     <h3><strong>VOLUNTEER EXPERIENCE OR LEADERSHIP</strong><hr style="padding: 5px;background-color:#f45555;"></h3>
     <p style="font-size:15px text-align:justify;">Did you manage a team for your club, lead a project for your favorite charity, or edit your school newspaper? Go ahead and describe experiences that illustrate your leadership abilities.</p>
     <textarea name="Voluntry" class="form-control"></textarea>
   </div>
  </div>
  </section>
  <footer align="center" class="container" >
    <div style="padding:30px; margin-bottom:30px;" class="row">
      <div class="btn-lg-12">
   <button type="submit" value="submit" class="btn btn-primary" style="background-color:red; margin-left:800px;" name="submit_btn">Submit</button>
   <button type="button" class="btn btn-primary" style="background-color:red;  margin-left:80px;" name="recieve_btn">Retrieve</button>
 </div>
</form>
<?php
  if(isset($_POST['submit_btn'])){
  $FirstName = $_POST['Name'];
  $Passward = $_POST['Tel-no'];
  $Email = $_POST['Website'];
  $Objectives = $_POST['Objectives'];
  $Skills = $_POST['Skills'];
  $Experienceleadership = $_POST['Experience-leadership'];
  $Experiencethink = $_POST['Experience-think'];
  $Educationgpa = $_POST['Education-gpa'];
  $Educationribbon = $_POST['Education-ribbon'];
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
   $query = "INSERT INTO `cv-table`(`Name`, `Tell-No`, `Email`, `Objective`, `skills`, `Experience-leader`, `Experience-project`, `Education-gpa`, `Education-ribbon`, `Volunteer`)
    VALUES ('$FirstName','$Passward','$Email','$Objectives','$Skills','$Experienceleadership','$Experiencethink','$Educationgpa','$Educationribbon','$Voluntry')";
   //INSERT will be capital or smaller alphabets and avoid spaces in columns for string use sigle course in sql

  //execute query
  $result = mysqli_query($conn , $query);//if error then change its position
  if(!$result){
  die("query Failed :".mysqli_error($conn));
  }
  else{
  echo "Course Inserted Succesfully...";
  $submit_btn = '';

  }
}
else {
  echo "Please Click Submit Button";
}
  //click browse to check data;
?>
 </div>
     <div class="row">
       <div class="col-lg-3 col-md-3 col-sm-3 col-xs-1">
   <a href="">
     <img style="height:50px" text="Email" alt="EMAIL" src="email.png"><br/>Email</img>
   </a>
 </div>
   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-1">
   <a href="ww.twitter.com">
     <img style="height:50px" alt="TWITTER" src="twitter.png"><br/>Twitter</img>
   </a>
 </div>
   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-1">
   <a href="">
     <img style="height:50px" alt="TELEPHONE" src=" phonep.png"><br/>Telephone</img>
   </a>
 </div>
   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-1">
   <a href="">
     <img style="height:50px" alt="LINKETIN" src=" linkedin.png"><br/>Linkedin</img>
   </a>
 </div>
 </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
