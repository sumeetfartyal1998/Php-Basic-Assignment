<?php
    include("nav.php");
    $products=[
            ["id"=>1,"pname"=>"One Plus Nord 2","price"=>"29,000","quantity"=>4,"image"=>"1_opnord2.png"],
            ["id"=>2,"pname"=>"One Plus Nord CE 5G","price"=>"24,999","quantity"=>4,"image"=>"2_OnePlus Nord CE 5G.png"],
            ["id"=>3,"pname"=>"One Plus 9 PRO","price"=>"49,999","quantity"=>4,"image"=>"3_OP9PRO.jpg"],
            ["id"=>4,"pname"=>"One Plus 9R","price"=>"39,999","quantity"=>4,"image"=>"4_OP9R.jpg"],
            ["id"=>5,"pname"=>"One Plus 9","price"=>"44,999","quantity"=>4,"image"=>"5_OP9.png"],
            ["id"=>6,"pname"=>"One Plus 8 Pro","price"=>"39,999","quantity"=>4,"image"=>"6_op8pro.png"],
    ]
?>
<!doctype html>
<html lang="en">
  <head>
    <?php include("head.php");?>
    <title>Products</title>
  </head>
  <body style="background-color:whitesmoke">
    <div class="container">
        <div class="row">
            <?php
                foreach($products as $p){
                    ?>
                    <div class="col-sm-4">
                        <div class="m-3 p-3">
                            <div class="card" style="border: 0;">
                                <img src="Media/<?php echo $p['image'];?>" class="card-img-top p-3">
                                <div class="card-body text-center">
                                    <h4><b><?php echo $p['pname'];?></b></h4>
                                    <h5><?php echo "₹ ".$p['price'];?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
         </div>
    </div>
    <?php include("foot.php");?>
   </body>
</html>