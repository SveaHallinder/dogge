 <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "argento");  
 if(isset($_POST["AddToCart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_POST["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'             =>     $_POST["id"],  
                     'item_name'           =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],
                     'item_quantity'       =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'             =>     $_POST["id"],  
                'item_name'           =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'       =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Varukorg</title>   
           <link rel="stylesheet" href="cart.css" />  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">
               <button class="button"><a href="webshop.php">⇦</a></button>
                <h3 align="center">KUNDVAGN</h3><br />    
                <div style="clear:both"></div>  
                <br />  
                <h3>ORDERDETALJER</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;   
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr> 
                              <?php
                               $bild = $values['id'];
                               $sql = "SELECT * FROM products WHERE id= '$bild';";
                               $result = mysqli_query($conn, $ql);
                              
                               if(mysqli_num_rows($result)>0){
                                    while ($row=mysqli_fetch_assoc($result)){
                               ?>
                              <img src="<?php $row['image']; ?>">
                                <?php
                                }
                              }
                                ?>
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td><?php echo $values["item_price"]; ?>kr</td>  
                               <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?>kr</td>  
                               <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right"><?php echo number_format($total, 2); ?>kr</td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          } else {
                              echo"DIN VARUKORG ÄR TOM!";
                          }
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>