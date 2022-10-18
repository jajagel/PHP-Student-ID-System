<!DOCTYPE html>
<html>
<head>
    <title>Student ID System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color:#053012;">  
    <?php
            if(!empty($_GET)){
            $student = [];
            $student['first_name'] = $_GET['fname'];
            $student['last_name'] = $_GET['lname'];
            $student['middle_initial'] = $_GET['mname'];
            $student['course'] = $_GET['course'];
            $student['school_id'] = $_GET['skulid'];
            $student['address'] = $_GET['address'];
            $student['birthdate'] = $_GET['bday'];
            $student['cp_name'] = $_GET['cpname'];
            $student['cp_num'] = $_GET['cpnum'];
           
            
            $studentArray = [];
            array_push($studentArray, $student);
            $str = print_r($studentArray, true);
            file_put_contents('student.txt', $str, FILE_APPEND);
            }
        ?>
<div class="container">
    <div class=" text-center mx-auto p-5" style="background-color: #FFFFFF; max-width: 60%; vertical-align: middle;" >
        <h3>Form Submitted Successfully</h3>    
    </div>
</div>


</form>
</div>
</body>
</html>