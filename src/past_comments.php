<!--PAST COMMENTS FILTERED BY BEACH-->
<?php 
if(isset($_GET['beach'])){
  $beach=$_GET['beach'];
}else{
  $beach= '';
}
$result = $db->show_beach_comments($beach);
?>

<div class="section">
  <h3 class="section-2" id="past_coments">Reseñas</h3>

  <?php if (empty($result)): ?>
    <p>No hay ninguna reseña de esta playa. ¡Escribe un comentario y danos tu opinión!</p>
  <?php endif; ?>

  <?php foreach ($result as $item): ?>
    <div class = "card my-3 w-75">
      <div class="card-body text-center">
        <?php echo $item['body']; ?>
        <div class="text-secondary mt-2"><?php echo $item['name'];?> <?php echo date_format(date_create($item['date']),'d\-m\-Y'); ?>, <div class="text-secondary mt-2 uppercase-txt"><?php echo $item['beach'];?></div></div>
      </div>
    </div>
  <?php endforeach; ?>
  