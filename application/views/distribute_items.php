<!DOCTYPE html>
<html>
<head>
   <!--  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/styles.css');?>">
</head>
<body>
    
    <div class="registration-form">
        
        <form>
           <center><h3> ADD DISTRIBUTED ITEM DETAILS </h3></center> </br>
            <!--<div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>-->
            <div class="form-group">
                <input type="text" class="form-control item" id="product_id" placeholder="Product ID">
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" id="qty_distributed" placeholder="Quantity Distributed">
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" id="qty_remaining" placeholder="Quantity Remaining">
            </div>

            <div class="form-group">
                <input type="date" class="form-control item" id="date_distributed" placeholder="Date of Distributed">
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" id="head_initials" placeholder="HOD Initials">
            </div>

            <div class="form-group">
            
            <label>&nbsp &nbsp DSR Photo:</label>
            <link rel="stylesheet" type= "text/css" href ="<?php echo base_url('/assets/css/styles.css');?>"/>
            <div id="content">

            <form method="POST" action="" enctype="multipart/form-data">
            <input type="file" class="form-control item" name="uploadfile" placeholder="Quantity Distributed" value=""/>
        </div>

        <div class="form-group">
                <button type="button" class="btn btn-block create-account">Submit</button>
        </div>
    <!-- 
        </form>
        <div class="social-media">
            <h5>Sign up with social media</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
                <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
            </div>
        </div>
    -->
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>