<?php include 'inc/header.php' ?>
<link rel="stylesheet" href="css/sytle_graphs.css">
</head>

<body>
  <!-- navBar -->
  <div class="navBar">
    <!-- navMenu -->
    <div class="navMenu">
      <a href="main.php">home</a>
      <a href="graph.php?location=<?php print_r(h($_GET["location"]));?>#playas">playas</a>
      <a href="graph.php?location=<?php print_r(h($_GET["location"]));?>#top_4">top 4</a>
      <a href="graph.php?location=<?php print_r(h($_GET["location"]));?>#contacto">contacto</a>
      <div class="dot"></div>
    </div>
    <!-- Header -->
    <header id="title">
      <a href="main.php" id="header-title">SMART BEACH COMUNITAT VALENCIANA</a>
    </header>
  </div>

  <!-- Page Content  -->
  <div class="container">
    <img src="" alt="" class="header-img" id="header_img" height="900" width="1875">
    <h2 class="centered" id="location"></h2>  
  </div>

  <div class="content">
    
    <div class="section">
      
      <h3 class="section-1" id="playas">Playas</h3>

      <p>
        Puedes navegar por las diferentes playas de Valencia, las playas de Alicante y las playas de Castellón. 
        Si lo prefieres, selecciona tus preferencias en el menú de la izquierda o 
        busca por nombre de playa en el formulario que encontrarás justo por encima de dicho menú. 
        También puedes ver cada una de las playas en el mapa de playas de la Comunidad Valenciana Además, 
        podrás enviarnos las mejores fotos de tus playas de la Comunidad Valenciana preferidas. 
        Para ello sólo tienes que navegar hasta la playa y subir tu foto.
      </p>
      
      <?php 
        $location = $_GET["location"];
        $result = $db->get_all_beaches("$location");        
      ?>

      <div class="custom-select" id="beach-container">
        <label for="beach">Seleccione una playa:</label>
        <select name="beach" id="beach_select" class="beach-select" onchange="update_beach(this.value)">
        <option value="standar" class="beach-option" selected><?php if(isset($_GET['beach'])){echo $_GET['beach'];}else{echo ' ';}?></option>
        <?php
          for($i=0;$i<count($result);$i++){
            echo '<option class="beach-option" value='.$result[$i]['name'].'>'.$result[$i]['name'].'</option>';
          };
        ?>
        </select>
      </div>
      <div id="beach-title" class="beach-title"></div>
    </div>

    <div class="data-section-1">

      <div class="actual-data">
        <ul class="data-row">
          <li class="data-col-temp"><div id="actual_temp"></div></li>
          <li class="data-col-icon" id="data_col_icon_temp"><img src="img/icon_temperature.png" alt="icon temperature" height="50px" id="data-type" value="0" onclick="type_data_icon(this)"></li>
          <li class="data-col-hum"><div id="actual_hum"></div></li>
          <li class="data-col-icon" id="data_col_icon_hum"><img src="img/icon_drop.png" alt="icon drop" height="50px" id="data-type" value="1" onclick="type_data_icon(this)"></li>
          <li class="data-col-uv"><div id="actual_uv"></div></li>
          <li class="data-col-icon" id="data_col_icon_uv"><img src="img/icon_uv_index.png" alt="icon uv index" height="60px" id="data-type" value="2" onclick="type_data_icon(this)"></li>
          <li class="data-col-pres"><div id="actual_pres"></div></li>
          <li class="data-col-icon" id="data_col_icon_pres"><img src="img/icon_atm_pres.png" alt="icon atmospheric pressure" height="70px" id="data-type" value="3" onclick="type_data_icon(this)"></li>
          <li class="data-col"><img src="img/plus_button.png" alt="plus button" class="plus-button"  id="flip" height="30px"></li>
        </ul>
      </div>

      <div id="flip-container">
        <div class="graph-container" id="graph-container"></div>
        <div class="hours-container" id="hours-container">
          <li class="hours-col-history"><img src="img/icon_history.png" alt="history icon" height="50px"></li>
          <ul class="hours-row">
            <li class="hours-col" id="hours-col1"><img src="img/icon_one_hour.png" alt="one_hour" height="20px" id="hours" value="1" onclick="hours_select_icon(this)"></li>
            <li class="hours-col" id="hours-col3"><img src="img/icon_three_hour.png" alt="three_hours" height="20px" id="hours" value="3" onclick="hours_select_icon(this)"></li>
            <li class="hours-col" id="hours-col5"><img src="img/icon_five_hour.png" alt="five hours" height="20px" id="hours" value="5" onclick="hours_select_icon(this)"></li>
            <li class="hours-col" id="hours-col12"><img src="img/icon_twelve_hour.png" alt="twelve hours" height="20px" id="hours" value="12" onclick="hours_select_icon(this)"></li>
            <li class="hours-col" id="hours-col24"><img src="img/icon_one_day.png" alt="one day" height="20px" id="hours" value="24" onclick="hours_select_icon(this)"></li>
          </ul>
        </div>
      </div>
      
    </div>

    <div class="section">
      <h3 class="section-2" id="top_4">TOP 4</h3>
      <p>
        Puedes navegar por las diferentes playas de Valencia, las playas de Alicante y las playas de Castellón. 
        Si lo prefieres, selecciona tus preferencias en el menú de la izquierda o 
        busca por nombre de playa en el formulario que encontrarás justo por encima de dicho menú. 
        También puedes ver cada una de las playas en el mapa de playas de la Comunidad Valenciana Además, 
        podrás enviarnos las mejores fotos de tus playas de la Comunidad Valenciana preferidas. 
        Para ello sólo tienes que navegar hasta la playa y subir tu foto.
      </p>
      <div>
          <?php 
          $location = $_GET["location"];
          $result = $db->get_top_beaches(4, $location);
          ?>
          
        <div class="top-beach">
          <div class="row">
            <div class="column">
              <div class="container1">
                <img src="img/carousel_beach_1.jpg" alt="imagen top playa 1">
                <div class="title-top4"><?php echo $result[0]['name'] ?></div>
              </div>
            </div>

            <div class="column">
              <div class="container1">
                <img src="img/carousel_beach_2.jpg" alt="imagen top playa 2">
                <div class="title-top4"><?php echo $result[1]['name'] ?></div>
              </div>
            </div>

            <div class="column">
              <div class="container1">
                <img src="img/carousel_beach_3.jpg" alt="imagen top playa 3">
                <div class="title-top4"><?php echo $result[2]['name'] ?></div>
              </div>
            </div>
            
            <div class="column">
              <div class="container1">
                <img src="img/carousel_beach_4.jpg" alt="imagen top playa 4">
                <div class="title-top4"><?php echo $result[3]['name'] ?></div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>

    <?php include 'past_comments.php'; ?>
    <?php include 'comments.php'; ?>
    
  </div>

  <div class="top-button">
    <a href="#title"><img src="img/top_button.png" alt="top button" class="scroll-up" height="80"></a>
  </div>
  <?php include 'inc/footer.php'; ?>
</body>

<script>

<?php 
  function h($s) {
    echo htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
  }
?>

let active_temp = document.getElementById("data_col_icon_temp");
let active_hum = document.getElementById("data_col_icon_hum");
let active_uv = document.getElementById("data_col_icon_uv");
let active_pres = document.getElementById("data_col_icon_pres");


$(document).ready(function(){
  $("#flip").click(function(){
    $("#flip-container").slideToggle("slow");
    
    
    active_temp.classList.add("active-btn");
    active_hum.classList.toggle("active-btn");
    active_uv.classList.toggle("active-btn");
    active_pres.classList.toggle("active-btn");

    if($("#flip").attr("src") == "img/plus_button.png"){
      $("#flip").attr("src", "img/minus_button.png")
    }
    else($("#flip").attr("src", "img/plus_button.png"))
  })
})

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var province = getParameterByName('location');
document.getElementById("location").innerHTML = province.toUpperCase();

var beach_title = getParameterByName('beach');
document.getElementById("beach-title").innerHTML = beach_title;

var src = "";
var alt = "";

switch (getParameterByName('location')){
  case "castellon":
    src = "img/playa_castellon.jpg";
    alt = "playa castellon";
  break;
  case "valencia":
    src = "img/playa_valencia.jpg";
    alt = "playa valencia";
  break;
  case "alicante":
    src = "img/playa_alicante.jpg";
    alt = "playa alicante";
  break;
}

var img = document.getElementById('header_img');
img.src = src;
img.alt = alt;

parser = new Parser_v1();
cloud = new Thingspeak("1831954");

function update_beach(beach){
  // var e = document.getElementById("beach_select");
  // var channel_id = e.value;
  // parser = new Parser_v1();
  // cloud = new Thingspeak(channel_id);
  // console.log(channel_id);
  <?php 
    if(isset($_GET['beach'])){
      $beach=$_GET['beach'];
    }else{
      $beach= '';
    }
    $db->set_new_visit($beach);
    $location = $_GET["location"];
    $db->get_top_beaches(4, $location);
  ?>
 
  location.href='graph.php?location=<?php print_r(h($_GET["location"]));?>&beach=' + beach +'#playas';  
}
// ----------------------------------------------------------------------------------------------------------------------
cloud.get_latest_field(4).then(callback_ok_last).catch(callback_err);
setInterval(latest_wrapper,120000);
function latest_wrapper(){
  cloud.get_latest_field(4).then(callback_ok_last).catch(callback_err);
}

cloud.get_field_by_time(4,60).then(callback_ok).catch(callback_err);

let selected;
let upper_limit = 60;

function type_data_icon(element){
  selected = element.getAttribute("value")
  cloud.get_field_by_time(4,upper_limit).then(callback_ok).catch(callback_err);
}

var active_1 = document.getElementById("hours-col1");
active_1.classList.add("active-btn");

function hours_select_icon(element){
  
  var hours = element.getAttribute("value"); 
  var active_1 = document.getElementById("hours-col1");
  var active_3 = document.getElementById("hours-col3");
  var active_5 = document.getElementById("hours-col5");
  var active_12 = document.getElementById("hours-col12");
  var active_24 = document.getElementById("hours-col24");

  switch(hours){
    case "1":
      upper_limit = 60;
      active_1.classList.add("active-btn");
      active_3.classList.remove("active-btn");
      active_5.classList.remove("active-btn");
      active_12.classList.remove("active-btn");
      active_24.classList.remove("active-btn");
    break;
    case "3":
      upper_limit = 180;
      active_3.classList.add("active-btn");
      active_1.classList.remove("active-btn");
      active_5.classList.remove("active-btn");
      active_12.classList.remove("active-btn");
      active_24.classList.remove("active-btn");
    break;
    case "5":
      upper_limit = 300;
      active_5.classList.add("active-btn");
      active_1.classList.remove("active-btn");
      active_3.classList.remove("active-btn");
      active_12.classList.remove("active-btn");
      active_24.classList.remove("active-btn");
    break;
    case "12":
      upper_limit = 720;
      active_12.classList.add("active-btn");
      active_1.classList.remove("active-btn");
      active_3.classList.remove("active-btn");
      active_5.classList.remove("active-btn");
      active_24.classList.remove("active-btn");
    break;
    case "24":
      upper_limit = 1440;
      active_24.classList.add("active-btn");
      active_1.classList.remove("active-btn");
      active_3.classList.remove("active-btn");
      active_5.classList.remove("active-btn");
      active_12.classList.remove("active-btn");
    break;
  }

  cloud.get_field_by_time(4,upper_limit).then(callback_ok).catch(callback_err);

}

function callback_ok(data){

	const frames = parser.parser(data.feeds);

  const temp_graph = frames.map(x=>x.temperature);
  const hum_graph = frames.map(x=>x.humidity);
  const pres_graph = frames.map(x=>x.pressure);
  const uv_graph = frames.map(x=>x.uv_index);
  const batt_graph = frames.map(x=>x.battery);
  const parsed_date = frames.map(x=>x.time);
 
  var graph_label;
  
  switch(selected){
    case "0":
      graph_label = "Temperatura (ºC)";
      canvas(temp_graph, parsed_date, graph_label);
      active_temp.classList.add("active-btn");
      active_hum.classList.remove("active-btn");
      active_uv.classList.remove("active-btn");
      active_pres.classList.remove("active-btn"); 
    break;
    case "1":
      graph_label = "Humedad relativa (%)";
      canvas(hum_graph, parsed_date, graph_label);
      active_hum.classList.add("active-btn");
      active_temp.classList.remove("active-btn");
      active_uv.classList.remove("active-btn");
      active_pres.classList.remove("active-btn"); 
    break;
    case "2":
      graph_label = "Índice UV";
      canvas(uv_graph, parsed_date, graph_label);
      active_uv.classList.add("active-btn"); 
      active_hum.classList.remove("active-btn");
      active_temp.classList.remove("active-btn");
      active_pres.classList.remove("active-btn");
    break;
    case "3":
      graph_label = "Presión atmosférica (mB)"
      canvas(pres_graph, parsed_date, graph_label);
      active_pres.classList.add("active-btn");
      active_hum.classList.remove("active-btn");
      active_temp.classList.remove("active-btn");
      active_uv.classList.remove("active-btn"); 
    break;
    default:
      graph_label = "Temperatura (ºC)";
      canvas(temp_graph, parsed_date, graph_label);
      active_temp.classList.add("active-btn");
      active_hum.classList.add("active-btn");
      active_uv.classList.add("active-btn");
      active_pres.classList.add("active-btn");
    break;
  }
}

function callback_ok_last(data){

  const frames = parser_last(data);
  const temp_last = frames[0];
  const hum_last = frames[1];
  const uv_last = frames[2];
  const pres_last = frames[3];
  console.log("esto es actual_temp: ", temp_last)
  console.log("esto es actual_hum: ", hum_last)
  console.log("esto es actual_uv: ", uv_last)
  console.log("esto es actual_pres: ", pres_last)
  document.getElementById("actual_temp").innerHTML = temp_last;
  document.getElementById("actual_hum").innerHTML = hum_last;
  document.getElementById("actual_uv").innerHTML = uv_last;
  document.getElementById("actual_pres").innerHTML = pres_last;
}
function callback_err(data){
	console.log("error");
	console.log(data)
}

</script>
</html>
