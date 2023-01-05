<!-- ALL PAST COMMENTS -->
<?php 
$result = $db->show_comments();
?>

<div class="section">
  <h3 class="section-2" id="past_coments">Reseñas</h3>

  <?php if (empty($result)): ?>
    <p>There is no feedback</p>
  <?php endif; ?>

  <?php foreach ($result as $item): ?>
    <div class = "card my-3 w-75">
      <div class="card-body text-center">
        <?php echo $item['body']; ?>
        <div class="text-secondary mt-2"><?php echo $item['name'];?> <?php echo date_format(date_create($item['date']),'d\-m\-Y'); ?>, <div class="text-secondary mt-2 uppercase-txt"><?php echo $item['beach'];?></div></div>
      </div>
    </div>
  <?php endforeach; ?>
  