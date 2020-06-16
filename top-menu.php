<?php require_once("data.php"); ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>tone clothes</title>
  </head>
  <body>
    <section class="top-menu">
          <form method="post" action="confirm.php">
          <div class="menus">
            <?php foreach($menus as $menu): ?>
              <div class="menu-item">
                <h><?php echo $menu->get_name(); ?></h>
                <img src="<?php echo $menu->get_image(); ?>" class="top-menu-img">
                <p>状態：<?php echo $menu->get_condition(); ?></p>
                <p>価格：<?php echo $menu->get_include_price(); ?>円(税込み)</p>
                <div class="oreder-form">
                  <label for="order">注文個数：</label> <input type="text" pattern="\d+" placeholder="半角数字を入力" name="<?php echo $menu->get_name(); ?>">
                </div>
              </div>
            <?php endforeach; ?>
          </div>
            <div class="submit">
                <input type="submit" value="注文確認へ" class="btn btn-primary btn-lg active" >
            </div>
            </form>
    </section>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="menu.js"></script>
  </body>

</html>
