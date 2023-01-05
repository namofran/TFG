<?php 
// Set vars to empty values
$name = $email = $body = $beach ='';
$nameErr = $emailErr = $bodyErr = $beachErr = '';

// Form submit
if(isset($_POST['submit'])){
  //validate name
  if(empty($_POST['name'])){
    $nameErr = 'Nombre y apellidos necesarios.';
  } else {
    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }
  //validate email
  if(empty($_POST['email'])){
    $emailErr = 'Email necesario.';
  } else{
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }
  //validate beach
  if(isset($_POST['beach'])){
    $beach = filter_input(INPUT_POST, 'beach', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  } else{
    $beachErr = 'Playa necesaria.';
  }
  //validate body
  if(empty($_POST['body'])){
    $bodyErr = 'Comentario necesario.';
  } else{
    $body = filter_input(INPUT_POST,'body',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }
  //set the consult
  if(empty($nameErr) && empty($emailErr) && empty($beachErr) && empty($bodyErr)){
    $db->get_feedback($name,$email,$beach,$body);
    $name = $email = $beach = $body = "";
  }
}

?>

<div class="section">
  <h3 class="section-2" id="contacto">Danos tu opinión</h3>
  <div class="contact-container">
    <form method="POST" action="main.php#playas">
      <div>
        <label for="name">Nombre y apellidos</label>
        <input type="text" id="name" name="name" placeholder="Ingrese su nombre y apellidos..." value="<?php echo $name; ?>">
      </div>
      <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Ingrese su dirección de email..." value="<?php echo $email; ?>">
      </div>
      <div>
        <label for="beach">Playa</label>
        <div class="select-form">
          <?php 
            $result = $db->get_all_beaches("ALL");        
          ?>
          <select name="beach" id="option-select" class="option-select">
          <option value="standar" class="standar-option" selected>elija una opción...</option>
          <?php
          for($i=0;$i<count($result);$i++){
            echo '<option class="beach-option" value='.$result[$i]['name'].'>'.$result[$i]['name'].'</option>';  
          }
        ?>
        </select>
        </div>
      </div>
      <div>
        <label for="body">Comentario</label>
        <textarea name="body" id="body" placeholder="Ingrese un comentario..."><?php echo $body; ?></textarea>
      </div>
      <div>
        <input type="submit" name="submit" value="Enviar">
      </div>
    </form>
  </div>
</div>












