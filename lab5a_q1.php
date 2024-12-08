<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 5a Q1</title> 
</head> 
<body> 
<?php  
// Defining variables with the required details
$name = "Hariz Idlan"; 
$matricNumber = "DI220006"; 
$course = "Bachelor of Software Engineering"; 
$yearOfStudy = "3rd Year"; 
$address = "Jalan Parit Haji Salleh Ros"; 
?> 
<table border="1" cellpadding="10"> 
    <tr> 
        <th>Detail</th> 
        <th>Information</th> 
    </tr> 
    <tr> 
        <td>Name</td> 
        <td><?php echo $name; ?></td>  
    </tr> 
    <tr> 
        <td>Matric Number</td> 
        <td><?php echo $matricNumber; ?></td>  
    </tr> 
    <tr> 
        <td>Course</td> 
        <td><?php echo $course; ?></td>  
    </tr> 
    <tr> 
        <td>Year of Study</td> 
        <td><?php echo $yearOfStudy; ?></td>  
    </tr> 
    <tr> 
        <td>Address</td> 
        <td><?php echo $address; ?></td>  
    </tr> 
</table> 
</body> 
</html>
