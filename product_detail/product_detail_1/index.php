<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>store2-product_detail_1-</title>
  <link rel="stylesheet" href="../../css/reset.css">
  <link rel="stylesheet" href="../../css/common.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="../../img/favicon.ico">
</head>

<body>
  <!--------------------------- 
      　　　header
    ---------------------------->
    <?php include($_SERVER['DOCUMENT_ROOT']."/header.html"); ?>


  <!--------------------------- 
      　　　product_detail_1
  ---------------------------->
  <section class="product_detail_1">
    <h2 class="sec_ttl">プロダクトタイトル</h2>
    <div class="container">
      <div class="img"><img src="item1.jpg" alt=""></div>
      <div class="detail_info_box">
        <p class="text1">テキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキスト テキストテキストテキスト</p>
        <p class="text2">テキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキスト テキストテキストテキスト</p>
        <p class="price">¥99,999 +tax</p>
        <div class="specitication_box">
          <div class="category_box">
          <p class="category">SIZE：</p>
          <p class="category">COLOR：</p>
          <p class="category">MATERIAL：</p>
        </div>
        <div class="value_box">
          <p class="value">W999 × D999 × H999</p>
          <p class="value">テキスト</p>
          <p class="value">テキストテキストテキスト</p>
        </div>
        </div>
      </div>
    </div>
    <div class="back_to_products_box">
      <a href="../../products/index.php" class="back_to_products">Back To Products</a>
    </div>


  </section>

  <!--------------------------- 
      　　　footer
    ---------------------------->
    <?php include($_SERVER['DOCUMENT_ROOT']."/footer.html"); ?>



  <script src="../../js/common.js"></script>
</body>

</html>