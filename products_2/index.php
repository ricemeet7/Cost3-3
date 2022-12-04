<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>store2-products_2-</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="../img/favicon.ico">
</head>

<body>
  <!--------------------------- 
      　　　header
    ---------------------------->
    <?php include($_SERVER['DOCUMENT_ROOT']."/header.html"); ?>


  
  <!--------------------------- 
      　　　products
    ---------------------------->
  <section class="products_2">
    <h2 class="page-ttl">Products</h2>
    <div class="grid_container">
      <div class="item_1 item">
        <a href="../product_detail/product_detail_1/index.php">
        <div class="img"><img src="img/item13.jpg" alt=""></div>
        <p class="product_name">プロダクトタイトルプロダクトタイトル</p>
        <p class="price">¥99,999 +tax</p>
        </a>
      </div>
      <div class="item_2 item">
        <a href="../product_detail/product_detail_1/index.php">
        <div class="img"><img src="img/item14.jpg" alt=""></div>
        <p class="product_name">プロダクトタイトルプロダクトタイトル</p>
        <p class="price">¥99,999 +tax</p>
        </a>
      </div>
      <div class="item_3 item">
        <a href="../product_detail/product_detail_1/index.php">
        <div class="img"><img src="img/item15.jpg" alt=""></div>
        <p class="product_name">プロダクトタイトルプロダクトタイトル</p>
        <p class="price">¥99,999 +tax</p>
        </a>
      </div>
      <div class="item_4 item">
        <a href="../product_detail/product_detail_1/index.php">
        <div class="img"><img src="img/item16.jpg" alt=""></div>
        <p class="product_name">プロダクトタイトルプロダクトタイトル</p>
        <p class="price">¥99,999 +tax</p>
        </a>
      </div>

    </div>
    <div class="pagination">
      <a href="../products/index.php" class="pagination_1">1</a>
      <span class="pagination_2">2</span>
    </div>
  </section>


  <!--------------------------- 
      　　　footer
    ---------------------------->
    <?php include($_SERVER['DOCUMENT_ROOT']."/footer.html"); ?>


  <script src="../js/common.js"></script>
</body>

</html>