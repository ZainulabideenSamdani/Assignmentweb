<?php
    if( isset( $_POST['Submitt_btn'] ) ):
        $firstname = $_POST['firstName_box'];
        $lastname = $_POST['lastName_box'];
        $address = $_POST['address_box'];
        $phone = $_POST['phone_box'];
        $email = $_POST['email_box'];
        $date1 = $_POST['date1_box'];
        $job1 = $_POST['jobtitle1_box'];
        $description1 = $_POST['description1_box'];
        $date2 = $_POST['date2_box'];
        $job2 = $_POST['jobtitle2_box'];
        $description2 = $_POST['description2_box'];
        $month1 = $_POST['month1_box'];
        $degreetitle1 = $_POST['degreetitle1_box'];
        $description3 = $_POST['description3_box'];
        $month2 = $_POST['month2_box'];
        $degreetitle2 = $_POST['degreetitle2_box'];
        $description4 = $_POST['description4_box'];
        $skill1 = $_POST['skill1_box'];
        $skill2 = $_POST['skill2_box'];
        $skill3 = $_POST['skill3_box'];
        $skill4 = $_POST['skill4_box'];
        $skill5 = $_POST['skill5_box'];
        $activity = $_POST['activity_box'];

        $hostname = 'localhost';
        $db_username = 'root';
        $db_password = '';
        $db_name = 'cv-database';

        $conn = mysqli_connect($hostname, $db_username, $db_password, $db_name);
        if(!$conn){
            die("Connection Failed.." .mysqli_error($conn));
        }
        else{
            echo "Connected Successfully.";
        }

        $query = "INSERT INTO `Sample1`(`First_Name`, `Last_Name`, `Adrss`, `Phone`, `Email`, `Date1`, `Job_Title1`, `Description1`, `Date2`, `Job_Title2`, `Description2`, `Month1`, `Degree_Title1`, `Description3`, `Month2`, `Degree_Title2`, `Description4`, `Skill_One`, `Skill_Two`, `Skill_Three`, `Skill_Four`,
                                  `Skill_Five`, `Activities`) VALUES ( '$firstname', '$lastname', '$address', '$phone', '$email', '$date1', '$job1', '$description1', '$date2', '$job2', '$description2', '$month1', '$degreetitle1', '$description3', '$month2', '$degreetitle2', '$description4', '$skill1',
                                    '$skill2','$skill3', '$skill4', '$skill5', '$activity' )";
        $result = mysqli_query($conn, $query);
        if(!$result){
           die("Query Failed!" .mysqli_error($conn, $query));
        }
        else{
            echo "Data Submitted Successfully.";
        }

    endif;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <title>Sample1</title>
</head>
<body>
<div class="jumbotron">
    <h1 class="container ">Enter your data here </h1>
    <form action="" method="post" class="container">
    <div class="form-inline justify-content-center align-items-center">
<label for="fName"><b>First Name</b></label>
<input type="text" name="firstName_box" class="form-control" placeholder="Enter First Name here">
<label for="lName"><b>Last Name</b></label>
<input type="text" name="lastName_box" class="form-control" placeholder="Enter Last Name here">
</div>
<div class="form-inline justify-content-center align-items-center" >
<label for="address"><b>Address</b></label>
<input type="text" name="address_box" class="form-control" placeholder="Enter Address here">
<label for="phone"><b>Phone</b></label>
<input type="text" name="phone_box" class="form-control" placeholder="Enter Phone Number here">
</div>
<div class="form-inline justify-content-center align-items-center">
<label for="email"><b>Email</b></label>
<input type="email" name="email_box" class="form-control" placeholder="Enter Email Address here">
</div>
<p>To replace this text with your own, just click it and start typing. Briefly state your career objective, or summarize what makes you stand out. Use language from the job description as keywords.
</p>
<h2 >Experience</h2>
<div class="container-fluid">
<label for="date"><b>Date From-To</b></label>
<input type="date" name="date1_box" class="form-control" placeholder="Enter Date here">
<label for="jobTitle"><b>Job Title, Company</b></label>
<input type="text" name="jobtitle_box" class="form-control" placeholder="Enter Job Title here">
<label for="descrition"><b>Description</b></label>
<input type="text" name="description_box" class="form-control" placeholder="Enter Job Description here">
<label for="date"><b>Date From-To</b></label>
<input type="date" name="date1_box" class="form-control" placeholder="Enter Date here">
<label for="jobTitle"><b>Job Title, Company</b></label>
<input type="text" name="jobtitle_box" class="form-control" placeholder="Enter Job Title here">
<label for="descrition"><b>Description</b></label>
<input type="text" name="description_box" class="form-control" placeholder="Enter  Job Description here">
</div>
<h2>Education</h2>
<div class="container-fluid">
<label for="month"><b>Month Year</b></label>
<input type="month" name="month_box" class="form-control" placeholder="Enter Month here">
<label for="degreeTitle"><b>Degree Title, School</b></label>
<input type="text" name="degreetitle_box" class="form-control" placeholder="Enter Degree Title, School here">
<label for="descrition"><b>Description</b></label>
<input type="text" name="description_box" class="form-control" placeholder="Enter Description here">
<label for="month"><b>Month Year</b></label>
<input type="month" name="month_box" class="form-control" placeholder="Enter Month here">
<label for="degreeTitle"><b>Degree Title, School</b></label>
<input type="text" name="degreetitle_box" class="form-control" placeholder="Enter Degree Title, School here">
<label for="descrition"><b>Description</b></label>
<input type="text" name="description_box" class="form-control" placeholder="Enter Description here">
</div>
<h2>Skills</h2>
<h4>Enter your skills here!</h4>
<div class="container">
<div class="row" >
<div class="col">
&nbsp;<input type="text" name="skill_box" class="form-control" placeholder="Enter Skill # 1 here"></br>
&nbsp;<input type="text" name="skill_box" class="form-control" placeholder="Enter Skill # 2 here"></br>
</div>
<div class="col">
<input type="text" name="skill_box" class="form-control" placeholder="Enter Skill # 3 here"></br>
<input type="text" name="skill_box" class="form-control" placeholder="Enter Skill # 4 here"></br>

<input type="text" name="skill_box" class="form-control" placeholder="Enter Skill # 5 here"></br>
</div>
</div>
</div>
<h2>Activities</h2>
<div class="container">
<input type="text" name="activity_box" class="form-control" placeholder="Enter Activities here"></br>

<div class="btn-group float-right mt-2">
    <button key="isset"  class="btn btn-outline-primary" name="Submitt_btn">Submitt</button>

    <button   class="btn btn-outline-primary" name="Generate_btn">Generate</button>
</div>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</form>

</body>
</html>
