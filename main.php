<?php
    session_start();
    $conn = mysqli_connect("localhost","root", "", "course_management");

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $id = $_POST["id"];

        $duplicate = mysqli_query($conn, "SELECT * FROM `login` WHERE id='$id'");
        
        if(mysqli_num_rows($duplicate) > 0){
            echo "<script> alert('Id has already registered.') </script>";
           
        }
        else{ 
            $query = "INSERT INTO `login` (`username`, `id`) VALUES ('$username', '$id');";
            mysqli_query($conn, $query);
            echo "<script> alert('Registration Successful.') </script>";
            $_SESSION['loggedin'] = true;
            header('Location: main.php'); // Redirect to main.php
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management</title>
    <link rel="stylesheet" href="front.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">

</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="logo.PNG" alt="Varsity logo">
            <h1>Course <span>Management</span></h1>
            <h2>Department of Computer Science & Engineering</h2>
        </div>
        </div>
        
        <div class="Courses">
            
            
        <div class="course-box">
              
               <img src="graduation (1).png" alt="course logo">
               <a href="info.php?batch=batch_51">   <h4>Batch-51</h4></a>
              
            </div> 
             <div class="course-box">
                <img src="checklist.png" alt="course logo">
                <a href="info.php?batch=batch_52"><h4>Batch-52</h4></a>
            </div>
           <div class="course-box">
                <img src="books.png" alt="course logo">
                <a href="info.php?batch=batch_53">  <h4>Batch-53</h4></a>
            </div>
            <div class="course-box">
                <img src="courses.png" alt="course logo">
                <a href="info.php?batch=batch_54">  <h4>Batch-54</h4></a>
            </div>
           <div class="course-box">
                <img src="document.png" alt="course logo">
                <a href="info.php?batch=batch_55">  <h4>Batch-55</h4></a>
            </div>
                <div class="course-box">
                <img src="open-book.png" alt="course logo">
                <a href="info.php?batch=batch_56">  <h4>Batch-56</h4></a>
            </div>
            <div class="course-box">
                <img src="online-course.png" alt="course logo">
                <a href="info.php?batch=batch_57"><h4>Batch-57</h4></a>
            </div>
           <div class="course-box">
                <img src="studying.png" alt="course logo">
                <a href="info.php?batch=batch_58">  <h4>Batch-58</h4></a>
            </div>
            <div class="course-box">
                <img src="to-do-list.png" alt="course logo">
                <a href="info.php?batch=batch_59">  <h4>Batch-59</h4></a>
            </div>
           <div class="course-box">
                <img src="education.png" alt="course logo">
                <a href="info.php?batch=batch_60">   <h4>Batch-60</h4> </a>  
            </div> 
        </div>

        <footer>
            <div class="Contact-info">
                <h2>Contact Info</h2>
            </div>
            <div class="Contact">
                <p><i class="fa-solid fa-location-dot"></i>Bateshwar, Sylhet-3104, Bangladesh</p>
                <p><i class="fa-solid fa-tty"></i>Telephone: +88 02996642907-09</p>
                <p><i class="fa-solid fa-phone"></i>Mobile: +88 01313 050044, +88 01313 050066</p>
                <p><i class="fa-solid fa-fax"></i>Fax: +88 02996642910</p>
                <p><i class="fa-regular fa-envelope"></i>Email: info@metrouni.edu.bd</p>
            </div>
        </footer>
        
    

    </body>
</html>