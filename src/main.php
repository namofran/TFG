<?php include 'inc/header.php' ?>
  <link rel="stylesheet" href="css/style_main.css">
</head>

<body>
  <!-- Navbar -->
  <div class="navBar">
    <!-- navMenu -->
    <div class="navMenu">
      <a href="#title">home</a>
      <a href="#playas">playas</a>
      <a href="#top_4">top 4</a>
      <a href="#contacto">contacto</a>
      <div class="dot"></div>
    </div>
    <!-- Header -->
    <header id="title">
      <a href="main.php" id="header-title">SMART BEACH COMUNITAT VALENCIANA</a>
    </header>
  </div>
  <!-- Page content -->

    <!-- Playas Section-->
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
    </div>
   
    <div class="row">

      <div class="column">
        <div class="container">
          <a href="graph.php?location=castellon"><img src="img/playa_castellon.jpg" alt="castellon" style="width:100%"></a>
          <a href="graph.php?location=castellon" class="centered">CASTELL&oacuteN</a>
        </div>
      </div>

      <div class="column">
        <div class="container">
          <a href="graph.php?location=valencia"><img src="img/playa_valencia.jpg" alt="valencia" style="width:100%"></a>
          <a href="graph.php?location=valencia" class="centered">VALENCIA</a>
        </div>
      </div>

      <div class="column">
        <div class="container">
          <a href="graph.php?location=alicante"><img src="img/playa_alicante.jpg" alt="alicante" style="width:100%"></a>
          <a href="graph.php?location=alicante" class="centered">ALICANTE</a> 
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
          
          $result = $db->get_top_beaches(4, 'ALL');
          ?>
          
        <div class="top-beach">
          <div class="row1">
            <div class="column1">
              <div class="container1">
                <img src="img/carousel_beach_1.jpg" alt="imagen top playa 1">
                <div class="title-top4"><?php echo $result[0]['name'] ?></div>
              </div>
            </div>

            <div class="column1">
              <div class="container1">
                <img src="img/carousel_beach_2.jpg" alt="imagen top playa 2">
                <div class="title-top4"><?php echo $result[1]['name'] ?></div>
              </div>
            </div>

            <div class="column1">
              <div class="container1">
                <img src="img/carousel_beach_3.jpg" alt="imagen top playa 3">
                <div class="title-top4"><?php echo $result[2]['name'] ?></div>
              </div>
            </div>
            
            <div class="column1">
              <div class="container1">
                <img src="img/carousel_beach_4.jpg" alt="imagen top playa 4">
                <div class="title-top4"><?php echo $result[3]['name'] ?></div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>

    <div id="past_comments">
      <?php include 'all_past_comments.php'; ?>
    </div>
    <?php include 'comments.php'; ?>

    <!-- Scroll top button -->
    <div class="top-button">
      <a href="#title"><img src="img/top_button.png" alt="top button" class="scroll-up" height="100" width="100"></a>
    </div>
  </div>
  <?php include 'inc/footer.php'; ?>
</body>
</html>


