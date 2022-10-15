<?php
    $sname = $_POST['sname'];
    $grade = $_POST['grade'];
    $department = $_POST['department'];
    $birthday = $_POST['birthday'];
    $reason = $_POST['reason'];
    $hobby = $_POST['hobby'];
    $speciality = $_POST['speciality'];
    $nsemester = $_POST['nsemester'];
    $RC = $_POST['RC'];
    $message = $_POST['message'];

    function callClasses(){
        if(isset($_POST['classes'])) {
            foreach($_POST['classes'] as $classes){
                echo $classes;
                echo ' ';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>form_ok 21700185</title>
    </head>
    <body>
        <h3>학생 정보</h3>
        <p>이름: <?php echo $sname ?></p>
        <p>학년: <?php echo $grade ?>학년</p>
        <p>소속 RC: <?php echo $RC ?> </p>
        <p>수강중인 과목: <?php callClasses(); ?></p>
        <p>소속 학부: <?php echo $department ?></p>
        <p>학부를 선택한 이유: <?php echo $reason ?> </p>
        <p>생일: <?php echo $birthday ?></p>
        <p>취미와 특기: <?php echo $hobby ?>, <?php echo $speciality ?> </p>
        <p>다음학기 수강 희망 과목: <?php echo $nsemester ?> </p>
        <p>자유의견: <?php echo $message ?></p>

    </body>
</html>