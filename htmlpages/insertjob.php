<?php

@include 'conn.php';
include 'session.php';

?>



<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <title>طلب متطوعين </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
            color: white;
            
        
    </style>
</head>

    
<body>
<style>
    
    body{
        background: #001219;
    }
    </style>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>تقديم على الوظيفه</h2>
                    </div>
                    <h2 style= "text-align: center";>املاء النموذج </h2>
                    <form action="/n/insertphp/insertjob.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>الاسم بالكامل </label>
                            <input type="text" name="n_job" value="<?php echo $_SESSION['user_name'] ?>" class="form-control">
                        </div>
                           <div class="form-group">
                            <label>التخصص</label>
                            <input type="text" name="T_job" class="form-control">
                        </div>
                   
                        <div class="form-group">
                            <label>رقم الجوال</label>
                            <input type="number" name="f_info" class="form-control">
                        </div>
                        
                         <div class="form-group">
                            <label>رقم الهويه </label>
                            <input type="number" name="i_job" class="form-control">
                        </div>
                   
                         <div class="form-group">
                            <label>الايميل </label>
                            <input type="email" name="emp_email" class="form-control">
                        </div>
                        

                        
                         
                        
                        <input type="submit" class="btn btn-primary" name="submitt" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>