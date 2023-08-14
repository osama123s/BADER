<?php

include 'conn.php';
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
        }
    
    </style>
</head>
<body>
    <style>
    
            body{
        background: #001219;
    }
        .page-header .h2{
            color: white;
        }
    
    </style>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>تسجيل شريك التطوع</h2>
                    </div>
                    <h2 style= "text-align: center";>املاء الفقرات للتسجيل  </h2>
                    <form action="/n/insertphp/insertnewcom.php" method="post">
                        <div class="form-group">
                            <label>اسم الشركة</label>
                            <input type="text" name="com_name" value="<?php echo $_SESSION['user_name'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>السجل التجاري  </label>
                            <input type="number" name="com_giv" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>ارقام التواصل مع الشركة</label>
                            <input type="number" name="com_cont" class="form-control">
                        </div>
                         <div class="form-group">
                            <label>اسم المسؤل </label>
                            <input type="text" name="com_admin" class="form-control">
                        </div>
                          <div class="form-group">
                            <label>الايميل </label>
                            <input type="email" name="com_email" class="form-control">
                        </div>
                        
                        
                       
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>