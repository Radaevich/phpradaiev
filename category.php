<?php
  $conn = mysqli_connect("localhost", "root", "", "testphpradaiev");
  $category = mysqli_real_escape_string($conn, $_GET["category"]);
  $sort = mysqli_real_escape_string($conn, $_GET["sort"]);
     
    if(isset($_GET["category"], $_GET["sort"]))
    {
        if ($sort == 'firstcheaper')
        {
        $sql = "SELECT * FROM products WHERE category = '$category' ORDER BY price ASC";
        }
        elseif ($sort == 'azsort')
        {
            $sql = "SELECT * FROM products WHERE category = '$category' ORDER BY name ASC";
        }
        elseif ($sort == 'firstlast')
        {
            $sql = "SELECT * FROM products WHERE category = '$category' ORDER BY data DESC";
        }
        else
        {
            $sql = "SELECT * FROM products WHERE category = '$category' ORDER BY price ASC";
        }
    }

    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){
                $name = $row["name"];
                $image = $row["image"];
                $price = $row["price"];
                $id_product = $row["id_product"];
                
                echo "
                        <div class='product-box'>
                        <img src='/img/$image' alt='$name'></p>
                        <div class='name-product'>$name</div>
                        <div class='price-product'>$price грн</div>
                        <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modal' value='$name' id='$id_product' onClick='incat(this.id);'>Купить</div>
                        </div>
                   ";
            }
        }
        else{
            echo "<div>Категория не найдена!</div>";
        }
        mysqli_free_result($result);
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);

  
?>
<div class="modal fade" id="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">Корзина покупок</div>
        <button type="button" class="close" data-dismiss="modal">
         &times;
        </button>
      </div>
      <div class="modal-body" id="modalres">
         
      </div>
    </div>
  </div>
</div>

