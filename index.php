<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/js/script.js"></script>
		<title>Тестовое задание Радаев</title>
	
	</head>
<body>

<?php
class Connect {
    public $mysqli;
    
    public function __construct() {
        $this->mysqli = new mysqli('localhost', 'root', '', 'testphpradaiev');
    }

   
    public function selectCategory() {
        $conn = mysqli_connect("localhost", "root", "", "testphpradaiev");
        $catmass = "SELECT * FROM category";
        $prodrow1 = "SELECT category FROM products";

        if($result1 = mysqli_query($conn, $prodrow1)){
            if(mysqli_num_rows($result1) > 0){
                foreach($result1 as $row){
                    $idcat[] = $row["category"];
                }
                $prodrow = array_count_values($idcat);
            }
            mysqli_free_result($result1);
               
            } 

       if($result = mysqli_query($conn, $catmass)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){
            $name = $row["name"];
            $id = $row["id_categ"];
            echo "
            <div class='name-cat' id='$id' onClick='loadcategory(this.id);var ourid = this.id;'>$name (Количество товара: $prodrow[$id])</div>
            ";
        }
    }
        mysqli_free_result($result);
        mysqli_close($conn);
       
        } 
    }

    public function productincart() {
        $conn = mysqli_connect("localhost", "root", "", "testphpradaiev");
        
          $incart = '<script type="text/javascript">document.writeln(jsVar)</script>';
          $sql = "SELECT * FROM products WHERE id_product = '$incart'";
         
          if($result = mysqli_query($conn, $sql)){
              if(mysqli_num_rows($result) > 0){
                  foreach($result as $row){
                      $name = $row["name"];
                      $image = $row["image"];
                      $price = $row["price"];
                      
                      echo "
                              <div class='product-box'>
                              <img src='/img/$image' alt='$name'></p>
                              <div class='name-product'>$name</div>
                              <div class='price-product'>$price грн</div>
                              
                              </div>
                         ";
                  }
              }         
              mysqli_free_result($result);
          } 
          mysqli_close($conn);      
    }         
}

?>


<div class="container">
<div class="category-inner">
    <?php 
    $connect = new Connect();
    $myrow1 = $connect->selectCategory();
    ?>
</div>

<div class="products-inner">
<div class="selectors-inner">
            <select id="sort-select" onchange="selectselect()">
                  <option id="firstasdcheaper" value='firstasdcheaper'>Сначала дешевле</option>
                  <option id="azsort" value='azsort'>По алфавиту</option>
                  <option id="firstlast" value='firstlast'>Сначала новые</option>
                  
              </select>
    
    
    </div>
        <div id="result"> 
           <div class="select-cat-tovara">Выберите категорию товара </div>
        </div>
    </div>
</div>
  
  
</body>
<footer>

<style>
.products-inner
{
    width:75%;
    float:left;
}
.category-inner
{
    width:25%;
    float:left;
    border:1px solid #f1f1f1;
    border-right: none;
    padding: 20px;
}
.product-box
{
    width:33.33%;
    float:left;
    padding:15px;
    border:1px solid #f1f1f1;
    margin:0 -1px 0 0;

}
.product-box img
{
    width:100%;
}
.name-cat
{
    padding:5px 5px 5px 0;
    cursor:pointer;
}

select
{
    float:left;
}
.selectors-inner
{
    float:left;
    width:100%;
    padding:15px;
    border:1px solid #f1f1f1;
    
}
.select-cat-tovara
{
    border:1px solid #f1f1f1;
    margin-top:-1px;
    padding: 66px 50px;
    width:100%;
    float:left;
}
.price-product
{
    font-weight: bold;
    margin:15px 0
}

</style>

</footer>
</html>

