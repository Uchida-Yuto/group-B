<!doctype html>
<html lang="ja">
<head>
    <?php include("meta.htm"); ?>
    <title>拾得物管理システム</title>
  </head>

<body>
  <?php include("header.htm"); ?>

  <div class="container">
    <div class="row mt-3 mb-1">
        <div class="col"><p class="h2 p-1  bg-success w-50 rounded text-center text-white">拾得物登録</p></div>
    </div>
    <div class="row">
        <div class="col">
        <p class="bg-light p-1 border m-0">拾得物登録画面では，文教大学湘南キャンパスで拾得物を拾った際に，その物品の情報を入力するための画面です．必要事項を入力の上で登録を選択してください．登録が完了すると，その情報は検索の対象となります．</p>
            <hr>
      </div>
    </div>

    <div class="row">
        <div class="col mt-1">
            <form class="needs-validation" novalidate method="post" action="c_insert.php" enctype="multipart/form-data">
            <table>
                <tr><td>拾得物分類</td><td><select class="category" name="p1">
                  <option value="現金">現金</option>
                  <option value="かばん類">かばん類</option>
                  <option value="袋・封筒類">袋・封筒類</option>
                  <option value="財布類">財布類</option>
                  <option value="鍵類">鍵類</option>
                  <option value="手帳・文具類">手帳・文具類</option>
                  <option value="書類・紙類">書類・紙類</option>
                  <option value="時計類">時計類</option>
                  <option value="傘">傘</option>
                  <option value="電気製品類">電気製品類</option>
                  <option value="貴金属類">貴金属類</option>
                  <option value="その他">その他</option>
                </select></td></tr>
                <tr><td>拾得場所</td><td><input type="text" required class="form-control" name="p2"></td></tr>
                <tr><td>色</td><td><input type="text" required class="form-control" name="p3"></td></tr>
                <tr><td>特徴</td><td><input type="text" required class="form-control" name="p4"></td></tr>
                <tr><td>画像</td><td><input type="file" required class="form-control" name="fimg"></td></tr>
                <tr><td>拾得者（ユーザ）</td><td><input type="text" required class="form-control user"><span class="valid-feedback"></span><input type="hidden" name="p5" value="" class="userid"></td></tr>
            </table>
            <button class="btn btn-success" id="btn">登録</button>
            <input type="hidden" name="data" value="fitem">
            </form>
        </div>
    </div>

  </div>

  <?php include("footer.htm"); ?>
  <script src="main.js"></script>
</body>
</html>
