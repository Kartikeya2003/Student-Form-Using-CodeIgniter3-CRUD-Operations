<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wIDth=device-wIDth, initial-scale=1.0">
    <title>Student Records</title>
</head>
<body>
    <h1>Student List</h1>
    <!-- <?php print_r($students) ?> -->

    <table>
        <thead>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Edit</th>
        </thead>

        <?php foreach ($students as $student):?>
            <tr>
                <td><?php echo $student['s_name']?></td>
                <td><?php echo $student['s_age']?></td>
                <td><?php echo $student['s_gender']?></td>
                <td><?php echo $student['s_email']?></td>
                <td> 
                    <a href="<?php echo base_url('index.php/student/updateData/'.$student['ID']) ?>">
                    <button>Update</button></a>
                    <a href="<?php echo base_url('index.php/student/deleteData/'.$student['ID']) ?>">
                    <button>Delete</button>
                    </a>
                </td>

            </tr>
            <?php endforeach?>
    </table>
    <a  href="<?php echo base_url().'index.php/student' ?>">
    Add Student Data</a>
            
            
</body>
</html>