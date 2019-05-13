<?php
  require "header.php";
?>

  <main>
      <div class="wrapper-main">
         <section class="section-default">
           <?php
              if (isset($_GET['error']) == "wrongpwd" || isset( $_GET['error']) == "nouser"){
              echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                       <div class = "form-group" style ="text-align:center">
                          <p class="danger" style="color: red; font-size:2rem;">WRONG PASSWORD OR USERNAME!</p>
                       </div>
                    </div>';
              }
              else if (isset($_GET['signup']) == "success"){
                echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                         <div class = "form-group" style ="text-align:center">
                            <p class="danger" style="color: green; font-size:2rem;">SIGNUP WAS SUCCESSFUL!</p>
                         </div>
                      </div>';
              }
              else if (isset($_GET['update']) == "failed"){
                echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                         <div class = "form-group" style ="text-align:center">
                            <p class="danger" style="color: red; font-size:2rem;">UPDATE FAILED, TRY AGAIN LATER!</p>
                         </div>
                      </div>';
              }
              else if (isset($_SESSION['userId'])) {
                ?>
                <div class = "container"  style = "margin: 0 auto; width: 40%;">
                   <div class = "form-group" style ="text-align:center">
                     <p class="login-status" style ="color:green; font-size:2rem;">WELCOME, YOU ARE LOGGED IN<?php echo " " .ucfirst($_SESSION['userUid'])."."." " ."Today is"." ".date('l')." ".date('d-m-Y'); ?>!</p>
                   </div>
                </div>    

                <?php
              }
              else if ( isset($_GET['logout'])== "success"){
                echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                        <div class = "form-group" style ="text-align:center">
                          <p class="login-status" style ="color:red; font-size:2rem;">YOU ARE LOGGED OUT</p>
                        </div>
                      </div>';
              }
              else if ( !isset($_GET['logout'])== "success") {
                echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                         <div class = "form-group" style ="text-align:center">
                            <p class="login-status text-info" style="font-size:2rem;">WELCOME, TO VIEW ALL PAGE CONTENT, KINDLY REGISTER OR LOGIN</p>
                          </div>
                      </div>';
              }
            ?>
         </section>
      </div>

  </main>




<?php
// session_start();
require_once "header.php";
$product_ids = array();
//session_destroy();

//check if add to cart button has been submitted
if (filter_input(INPUT_POST, 'add_to_cart')) {
    if (isset($_SESSION['shopping_cart'])) {
      
        //keep track of how ay products are in the shopping cart
        $count = count($_SESSION['shopping_cart']);
        //create sequential array for matching array keys to product ids 
        $product_ids = array_column($_SESSION['shopping_cart'], 'id');

        if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)) {
            $_SESSION['shopping_cart'][$count]=array
            (
                'id'=> filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name' ),
                'price' => filter_input(INPUT_POST, 'price'),
                'quantity' => filter_input(INPUT_POST, 'quantity')
            );  
        }
        else { //product already exist, increase quantity
            //match array key to the id of the product being added to the cart
            for ($i =0; $i <count($product_ids); $i++) {
                if ($product_ids[$i]==filter_input(INPUT_GET, 'id') ) {
                    //add item quantity to the existing product in the array
                    $_SESSION['shopping_cart'][$i]['quantity']+= filter_input(INPUT_POST, 'quantity');
                }
            }
        }
    }
    else {//if shopping cart doesn't exist, create first product with array key 0
        //crate an arrray using submitted form data, start from key 0 and fill it with values
        $_SESSION['shopping_cart'][0]=array
        (
            'id'=> filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name' ),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );

    }
}

if (filter_input(INPUT_GET, 'action')=='delete') {
    //loop through all products in the shopping cart until it matches with GET id variable
    foreach($_SESSION['shopping_cart'] as $key => $product) {
        if ($product['id']==filter_input(INPUT_GET, 'id')){
            //remove product from the shopping cart when it matches wit the GET id
          unset($_SESSION['shopping_cart'][$key]);   
        }
    }
   // reset session array keys so they match with $product_ids numeric array 
   $_SESSION['shopping_cart']== array_values($_SESSION['shopping_cart']);
}

//pre_r($_SESSION);

function pre_r ($array) {
    echo '<pre>';
    print_r($array);
    echo'</pre>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>myCart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel ="stylesheet" href = "assets/cart.css">
</head>
<body style ="background-color:black;">
      <div class="container">
        <?php 
        $conn = mysqli_connect('localhost', 'root', '', 'cart');
        $query = 'SELECT * FROM products ORDER by id ASC';
        $results = mysqli_query($conn, $query);

        if ($results) :
            if (mysqli_num_rows($results)>0):
                while ($products = mysqli_fetch_assoc($results)):
                   // print_r($products);
                    ?>
                     <div class="col-sm-4 col-md-3" style="margin-top:2rem;">
                         <form method ="post" action ="index.php?action=add&id=<?php echo $products['id']; ?>">
                            <div class="products">
                            <img src = "<?php echo $products['image'];?>" class="img-responsive" id="images">
                            <h4 class = "text-info"><?php echo $products['name'];?></h4>
                            <h4 class="text-danger">&#x20A6 <?php echo number_format($products['price']);?></h4>
                            <div class="form-group">
                            <input type ="text" class = "form-control" name="quantity" value="1">
                            </div>
                            <input type ="hidden" class = "form-control" name="name" value="<?php echo $products['name'];?>">                            
                            <input type ="hidden" class = "form-control" name="price" value="<?php echo $products['price'];?>">
                            <div class="form-group"  style ="margin-top:1.5rem;">
                            <input type = "submit" class= "btn btn-primary" name="add_to_cart" value ="Add To Cart">                                                       
                            </div>
                            </div>
                         </form>
                     </div> 
                    <?php
                endwhile;
            endif;
        endif; 
        ?> 

   <div style="clear:both"></div>
   <br/>
  
   <?php
    if (!empty($_SESSION['shopping_cart'])):
?>



<div class="table-responsive" >
   <table class="table">
   <tr style="color:skyblue;"><th colspan ="5"><h3>Order Details</h3></th></tr>
  <tr>
      <th width="40%" style="color:skyblue;">Product Name</th>
      <th width="10%" style="color:skyblue;">Quantity</th>
      <th width="20%" class="text-danger">Price</th>
      <th width="15%" class="text-danger">Total</th>
      <th width="5%">Action</th>
   </tr>
<?php
        $total = 0;
        foreach ($_SESSION['shopping_cart'] as $key =>$product):
   ?>
 
   
     <tr>
        <td style="color:skyblue;"><?php echo $product['name']; ?></td>
        <td style="color:skyblue;"><?php echo $product['quantity']; ?></td>
        <td class="text-danger">&#x20A6; <?php echo number_format( $product['price']); ?></td>
        <td class="text-danger">&#x20A6; <?php echo number_format( $product['quantity']* $product['price'], 2); ?></td>
        <td>
            <a href="index.php?action=delete&id=<?php echo $product['id'];?>">
                 <div class="btn btn-danger">Remove</div>
            </a>
        </td>
        </tr>
        <?php
             $total= $total + ($product['quantity'] * $product['price']);
        endforeach;
        ?>
        <tr>
            <td colspan="3" align="right"class="text-danger">Total</td>
            <td align="right" class="text-danger">&#x20A6; <?php echo number_format($total, 2); ?></td>
            <td></td>
        </tr>
        <tr>
             <!--show checkout button only if the shopping cart is not empty -->
             <td colspan="5">
             <?php
               if (isset($_SESSION['shopping_cart'])):
               if (count($_SESSION['shopping_cart']) > 0 ):
           ?>
            <a href ="#" class="btn btn-info form-control" style="margin-top:1rem;">Checkout</a>
               <?php endif; endif; ?>
            </td>
            </tr>
               <?php
               endif;
               //echo json_encode($_SESSION['shopping_cart']);
               ?>   











</div>
</div>
</body>
</html>
