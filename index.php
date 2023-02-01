<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bongo</title>
    <link rel="stylesheet" href="./css/_style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div id="direction">
     <div class="card">
          <div class="card-img"><img name="image_src" id="image_src" value="./Laptops/first.png" src="./Laptops/first.png"></img></div>
               <div class="card-info">
               <p class="text-title" name="item_name" id="item_name" value="Product 1">Product 1 </p>
               <p class="text-body">Product description and details</p>
          </div>
          <div class="card-footer">
               <span class="text-title" name="price"  id="price" value="35,000.00 &euro;">35,000.00 &euro;</span>
               <div class="card-button">
                    <input type="submit" name="submit" value="payer" class="buy_now"></input>
               </div>
          </div>
     </div>
     <div class="card">
          <div class="card-img"><img name="image_src" id="image_src" value="./Laptops/fourth.jpg" src="./Laptops/fourth.jpg"></img></div>
               <div class="card-info">
               <p class="text-title">product 2 </p>
               <p class="text-body">Product description and details</p>
          </div>
          <div class="card-footer">
               <span class="text-title">35,000.00 &euro;</span>
               <div class="card-button">
                    <input type="submit" name="submit" value="payer" class="buy_now"></input>
               </div>
          </div>
     </div>
     <div class="card">
          <div class="card-img"><img src="./Laptops/first.png"></img></div>
               <div class="card-info">
               <p class="text-title">product 3 </p>
               <p class="text-body">Product description and details</p>
          </div>
          <div class="card-footer">
               <span class="text-title">35,000.00 &euro;</span>
               <div class="card-button">
                    <input type="submit" name="submit" value="payer" class="buy_now"></input>
               </div>
          </div>
     </div>
     <div class="card">
          <div class="card-img"><img src="./Laptops/first.png"></img></div>
               <div class="card-info">
               <p class="text-title">product 4 </p>
               <p class="text-body">Product description and details</p>
          </div>
          <div class="card-footer">
               <span class="text-title">35,000.00 &euro;</span>
               <div class="card-button">
                    <input type="submit" name="submit" value="payer" class="buy_now"></input>
               </div>
          </div>
     </div>
</div>
   <script>
        $(document).ready(function(){
           $(".buy_now").on('click',function(e){
                e.preventDefault();
                    var image_src = $(this).closest(".card").find("#image_src").attr("value");
                    var item_name = $(this).closest(".card").find("#item_name").attr("value");
                    var price = $(this).closest(".card").find("#price").attr("value");
                    var dt = '&image='+image_src+'&item_name='+item_name+'&price='+price;
                    var url = 'http://localhost/stripe/checkout.php?'+dt; 
                    
                    $.ajax({
                         url:url,
                         method:'GET',
                         success:function(){
                              window.location.href=url;
                         }
                    });
                   
                    
           });
          
        });
   </script>
</body>
</html>