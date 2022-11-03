<?php
    $sname = $_POST['sname'];
    $grade = $_POST['grade'];
    $RC = $_POST['RC'];
    $department = $_POST['department'];
    $birthday = $_POST['birthday'];
?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <link rel="stylesheet" href="my.css">
    <style>
        * {
            box-sizing: border-box;
        }
        #header{
            background-color: #dddddd;
            color: #ffffff;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        #tname{
            height: 40px;
            line-height: 40px;
            font-size: 20px;
            margin-bottom: 10px;
            border-top: 1px solid #dddddd;
            border-bottom: 1px solid #dddddd;
        }

        #students td, #students th {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: center;
        }

        tr:nth-child(odd){
            background-color: #dddddd;
        }
    </style>
    <body>
        <div>
        <div class="col-1 col-s-1" id="header">
            <h1>21700185 김태홍</h1>
        </div>
        <div class="col-2 col-s-2" id="tname">
            <b>추가된 학생 정보</b>
        </div>
        <div class="col-3 col-s-3">
          <table class="col-4 col-s-4" id="students">
            <tbody>
              <tr>
                <th>이름</th><th>학년</th><th>RC</th><th>학부</th><th>생일</th>
              </tr>
              <tr>
                <td> <?php echo $sname ?> </td>
                <td> <?php echo $grade ?> </td>
                <td> <?php echo $RC ?> </td>
                <td> <?php echo $department ?> </td>
                <td> <?php echo $birthday ?> </td>
              </tr>
            </tbody>
          </table>
        </div>
    </body>
</html>