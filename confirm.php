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
<section>
      <div class="confirm">
        <?php $sum=0; ?>
        <?php foreach($menus as $menu): ?>
          <?php $menu->set_order_count($_POST[$menu->get_name()]); ?>

          <?php if($menu->get_order_count($_POST[$menu->get_name()])>0): ?>
          <div class="confirm-item" id="<?php echo $menu->get_name(); ?>" data-name="<?php echo $menu->get_name(); ?>" >

           <p class="name">【<?php echo $menu->get_name(); ?>】</p>
           <p2><価格></p2>
           <p class="price"><?php echo $menu->get_include_price(); ?>円</p>

           <p2><注文個数></p2>
           <p class="count"><?php echo $menu->get_order_count(); ?>個</p>

           <p2><金額></p2>
           <p3><?php echo $menu->get_total_price(); ?>円</p3>
         </div>
           <?php $sum+=$menu->get_total_price(); ?>
          <?php endif; ?>
         <?php endforeach; ?>

      <div class="sum">
        <p2><合計></p2>
        <p><?php echo $sum; ?>円</p>
      </div>
      </div>
      <div id="btn">
        <div class="confirm-btn">
          <div id="confirm" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">確定</div>
        </div>
        <div class="back">
          <a href="top-menu.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">戻る</a>
        </div>
      </div>


      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">注文ありがとうございます！</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              折り返し連絡しますので、今しばらくお待ちください。
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>



</section>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
