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
           <center><h3> ADD PRODUCT DETAILS </h3></center> </br>
            <!--<div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>-->
            <div class="form-group">
                <input type="text" class="form-control item" id="Org_id" placeholder="Organization ID">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="dsr_no" placeholder="DSR No.">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="product_id" placeholder="Product ID">
            </div>
            <div class="form-group">
                <input type="date" class="form-control item" id="purchase_date" placeholder="Purchase Date">
            </div>
           
            <div class="form-group">
                      <select name="pur_auth" class="form-control item" id="pur_auth" placeholder="Choose Authority" >
                        <option value="Principal">Principal</option>
                        <option value="DTE">DTE</option>
                        <option value="JD">JD</option>
                      </select>
            </div>

            <div class="form-group">
                <input type="txt" class="form-control item" id="supplier_name" placeholder="Supplier Name">
            </div>

            <div class="form-group">
                <textarea class="form-control item" id="supp_addr" placeholder="Supplier Address" name="supp_addr" rows="2" cols="50"></textarea>
            </div>

            <div class="form-group">
                <input type="txt" class="form-control item" id="product_name" placeholder="Product Name">
            </div>

            <div class="form-group">
                <textarea class="form-control item" id="product_desc" placeholder="Product Name" name="product_desc" rows="2" cols="50"></textarea>
            </div>

            <div class="form-group">
                <input type="txt" class="form-control item" id="qty" placeholder="Quantity">
            </div>

            <div class="form-group">
                <input type="txt" class="form-control item" id="price_per_qty" placeholder="Price Per Quantity">
            </div>

            <div class="form-group">
                <input type="txt" class="form-control item" id="total_price" placeholder="Total Price">
            </div>

            <div class="form-group">
                <select name="initial_hod" class="form-control item" id="initial_hod">
                    <option value="computer">Computer</option>
                    <option value="civil">Civil</option>
                    <option value="electrical">Electrical</option>
                    <option value="electronics">Electronics</option>
                    <option value="mechanical">Mechanical</option>
                    <option value="IT">IT</option>
                    <option value="pharmacy">Pharmacy</option>
                    <option value="chemical">Chemical</option>
                    <option value="plastic_polymer">Plastic Polymer</option>
                    <option value="girls_hostel1">Girls Hostel 1</option>
                    <option value="girls_hostel2">Girls Hostel 2</option>
                    <option value="boys_hostel">Boys Hostel</option>
                    <option value="office">Office</option>
                    <option value="library">Library</option>

                  </select>
            </div>

            <div class="form-group">
                <input type="txt" class="form-control item" id="qty_distributed" placeholder="Quantity Distributed">
            </div>

            <div class="form-group">
            
                    <label>&nbsp &nbsp Stamp / Sign of Central Store:</label>
                    <link rel="stylesheet" type= "text/css" href ="<?php echo base_url('/assets/css/styles.css');?>"/>
                    <div id="content">

                    <form method="POST" action="" enctype="multipart/form-data">
	                <input type="file" class="form-control item" name="uploadfile" placeholder="Quantity Distributed" value=""/>
            </div>

            
            <div class="form-group">
                <input type="txt" class="form-control item" id="qty_remaining" placeholder="Quantity Remaining">
            </div>

            <div class="form-group">
                <textarea class="form-control item" id="remarks" placeholder="Remarks" name="product_desc" rows="2" cols="50"></textarea>
            </div>

            <div class="form-group">
            
                <label>&nbsp &nbsp Bill photo:</label>
                <link rel="stylesheet" type= "text/css" href ="<?php echo base_url('/assets/css/styles.css');?>"/>
                <div id="content">

                <form method="POST" action="" enctype="multipart/form-data">
                <input type="file" class="form-control item" name="uploadfile" placeholder="Quantity Distributed" value=""/>
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
