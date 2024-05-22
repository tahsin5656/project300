<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="info1.css">
  </head>
  <body>
    <table>
      <thead>
        <th>Course Name</th>
        <th>Course Code</th>
        <th>Course Credit</th>
        <th>Faculty Name</th>
        <th>Classroom Code</th>
        <th>Section</th>

      </thead>
      <tbody>
        <?php  
         session_start();
 $conn = mysqli_connect("localhost","root", "", "course_management");
 if(isset($_GET['batch']))
 $tableName = $_GET['batch'];
        $select_query = "SELECT * FROM $tableName";
    
    $result_query = mysqli_query($conn, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $COURSE_NAME = $row['COURSE_NAME'];
        $COURSE_CODE = $row['COURSE_CODE'];
        $COURSE_CREDIT = $row['COURSE_CREDIT'];
        $FACULTY_NAME = $row['FACULTY_NAME'];
        $CLASSROOM_CODE = $row['CLASSROOM_CODE'];
        $SECTION= $row['SECTION'];


        ?>
        <tr>
            <td><?php echo $COURSE_NAME ;?></td>
            <td><?php echo $COURSE_CODE ;?></td>
        <td><?php echo $COURSE_CREDIT ;?></td>
        <td><?php echo $FACULTY_NAME ;?></td>
        <td><?php echo $CLASSROOM_CODE ;?></td>
        <td><?php echo $SECTION ;?></td>
        </tr>
        

        <?php
    }?>
      </tbody>
    </table>
  </body>
</html>
