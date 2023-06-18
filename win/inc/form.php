<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

if(isset($_POST['submit'])){


//تحقق الاسم الأول

if(empty($firstName)){
    $errors['firstNameError'] = 'يرجى إدخال الإسم الأول';

}
//تحقق الاسم الخير
if(empty($lastName)){
    $errors['lastNameError'] = 'أدخل الاسم الأخير';
    
    }
    //تحقق الايميل
    if(empty($email)){
        $errors['emailError'] = 'أدخل الايميل';
        
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['emailError'] = 'يرجى ادخال الايميل الصحيح';
           
        }
        //تحقق لا يوجد أخطاء
        if(!array_filter($errors)){
            $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

$sql = "INSERT INTO users(firstName, lastName, email) 
        VALUES ('$firstName', '$lastName', '$email')";


        
        
if(mysqli_query($conn, $sql)){

header('location:' . $_SERVER['PHP_SELF']);
}else{

    echo 'Error ' . mysqli_connect_error($conn);
}
        }

    }

?>
