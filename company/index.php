<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>store2-company-</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="../img/favicon.ico">
</head>
<!--------------------------- 
これは前頁共通のヘッダーとフッターが予め記載済みのHTMLファイル。

■ヘッダーの padding-bottom は設定していない為、ヘッダーとの高さは各ページの sectionセレクタで paddhing-top で設定。

---------------------------->

<body>
  <!--------------------------- 
      　　　header
    ---------------------------->
    <?php include($_SERVER['DOCUMENT_ROOT']."/header.html"); ?>



  <!--------------------------- 
      　　　company
    ---------------------------->
  <section class="company">
    <h2 class="sec_ttl">Company</h2>
    <div class="container">
      <div class="company_info">
        <table>
          
          <tr>
            <th>社名</th>
            <td>株式会社ファニチャーデザイン</td>
          </tr>

          <tr>
            <th>住所</th>
            <td>〒107-0062 東京都港区南青山１丁目××××××</td>
          </tr>

          <tr>
            <th>設立</th>
            <td>XXXX年XX月</td>
          </tr>

          <tr>
            <th>資本金</th>
            <td>XXXX万円</td>
          </tr>

          <tr>
            <th>従業員数</th>
            <td>XX名</td>
          </tr>

          <tr>
            <th>事業内容</th>
            <td>家具、インテリアの企画・生産<br>
              家具、インテリアの販売<br>
              店舗の企画・デザイン・設計</td>
          </tr>
        </table>

      </div>
      <div class="google_map"><iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6482.5832287649855!2d139.72561535!3d35.66982095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c820ac932eb%3A0xc68079dd10afd971!2z44CSMTA3LTAwNjIg5p2x5Lqs6YO95riv5Yy65Y2X6Z2S5bGx77yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1667143224151!5m2!1sja!2sjp"
          width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
  </section>

  <!--------------------------- 
      　　　footer
    ---------------------------->
    <?php include($_SERVER['DOCUMENT_ROOT']."/footer.html"); ?>


  <script src="../js/common.js"></script>
</body>

</html>