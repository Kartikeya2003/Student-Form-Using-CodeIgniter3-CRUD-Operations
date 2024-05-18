<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Student Form</h1>
    <br><br>

    <form name="studentForm" method="POST" action="<?php echo base_url().'index.php/student/storeData'?>">
        Name<input type="text" name="s_name">
        <br><br>
        Age<input type="number" name="s_age">
        <br><br>
        Gender<select name="s_gender">
            Select  
            <option value="male">Male</option>
            <option value="female">Female</option>
            </select>
            <br><br>
            Email<input type="email" name="s_email"><span id="errorEmail"></span>
            <br><br>
            <button type="submit">Submit</button>

    </form>
    <a href="<?php echo base_url().'index.php/student/showData'?>">
    Show Data
    </a>
</body>
</html>