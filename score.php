<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" type="text/css" href="index2.css"> -->
  <link rel="stylesheet" type="text/css" href="score.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<?php include("header1.php"); ?>
<nav class="secondary">
   
        <span style="color:#000000">กรอกคะแนน</span>
        <span style="color:#a19668">*กรุณากรอกคะแนนลงในช่องผลงาน</span>
    
</nav>
<section>
  <div class="container">
    <?php
    // เลือก KPI 
    echo '<h2>รายละเอียดข้อตกลงคำรับรองการปฏิบัติงานประจำการงบประมาณ</h2>';
    ?>
  <table class="table">
    <thead>
      <tr>
        <th>ลำดับ</th>  
        <th>ตัวชี้วัด</th>
        <th>เป้าหมาย</th>
        <th>ผลงาน</th>
        <th>ยืนยัน</th>
        <th>สถานะ</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>$i</td>
        <td></td>
        <td></td>
        <td><input type="text" name="portfolio"></td>
        <td><button class="button" style="vertical-align:middle" type="submit"><span>ส่ง</span></button></td>
        <td></td>
      </tr>      
    </tbody>
  </table>
</div>
</section>
</body>
</html>