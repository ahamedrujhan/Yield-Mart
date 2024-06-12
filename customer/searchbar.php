<?Php

if(isset($_POST['submit-search'])){

$search=mysqli_real_escape_string($conn,$_POST['search']);
$sql= "SELECT* FROM products WHERE price LIKE '%$search%'";
$result=mysqli_query($conn,$sql);
$queryResult= mysqli_fetch_assoc($result);

if($queryResult>0){

   while($row=mysqli_fetch_assoc($result)){
      
echo "   
<div class='box-container'>
<div class='box'>
<img src='product_img/". $row['image']."alt=''>
<h3> ".$row['name']." </h3>
<div class='price'>Rs." .$row['price']."/-</div>
<input type='hidden' name='product_name' value=".$row['name'].">

<input type='hidden' name='product_price' value=". $row['price'].">
<input type='hidden' name='product_image' value=" .$row['image'].">
<input type='submit' class='btn' value='Add to Cart' name='add_to_cart'>
</div>


</div>";


   }

   }
else{

   echo "There are no results matching your search";
}




   
}

?>