
  <script>
function selected_beach(element){

var beach = element.getAttribute("value");
switch(beach){
  case "0":
    cloud = new Thingspeak("1831954");
    console.log("Esto es la playa 1")
  break;
  case "1":
    cloud = new Thingspeak("1931546");
    console.log("Esto es la playa 2")
  break;
  case "2":
    cloud = new Thingspeak("1831954");
    console.log("Esto es la playa 3")
  break;
  case "3":
    cloud = new Thingspeak("1831954");
    console.log("Esto es la playa 4")
  break;
  case "4":
    cloud = new Thingspeak("1831954");
    console.log("Esto es la playa 5")
  break;
}}

  </script>

