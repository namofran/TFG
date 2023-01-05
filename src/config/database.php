
<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'namofran');
define('DB_PASS', '123456');
define('DB_NAME', 'smartbeach_cv');

class Database {

  private $conn;
    
  public function __construct($host, $user, $pass, $database) {
    $this->conn = new mysqli($host, $user, $pass, $database);
    // Check connection
    if ($this->conn->connect_error) {
      die('<span class="error">Connection failed: ' . $this->conn->connect_error . "</span>");
    }else{
      // echo "Connection succesfull";
    }
  }

  function __destruct(){
    mysqli_close($this->conn);
  }
// DROPDOWN FOR BEACHES BY LOCATION
  public function get_all_beaches($region){

    $beach_array1=[];

    if($region == "ALL"){
      $sql = "SELECT * FROM playas order by name";
    }else{
      $sql = "SELECT * FROM playas WHERE location = '$region' order by name";
    }

    $result = mysqli_query($this->conn, $sql);

    while($row = mysqli_fetch_array($result)){
      array_push($beach_array1, $row);
    };

    return $beach_array1;
  }
// TOP 4 BEACHES
  public function get_top_beaches($limit, $region){

    $beach_array = [];
    if($region == "ALL"){
      $sql = "SELECT name FROM playas ORDER BY value DESC LIMIT $limit";
    }else{
      $sql = "SELECT name FROM playas WHERE location = '$region' ORDER BY value DESC LIMIT $limit";
    }
    $result = mysqli_query($this->conn, $sql);

    while($row = mysqli_fetch_array($result)){
      array_push($beach_array, $row);
    };

    return $beach_array;
  }
// COUNTER CLICKS
  public function set_new_visit($beach){

    $sql = "UPDATE playas SET value = value + 1 WHERE name = '$beach'";
    if(mysqli_query($this->conn, $sql)){
      // echo 'SUCCES CONNECTION'
    }else{
      echo 'Error: ' . mysqli_error($this->conn);
    }
    
  }
// INSERT COMMENTS
  public function get_feedback($name,$email,$beach,$body){

    $sql = "INSERT INTO feedback (name, email, beach, body) VALUES ('$name', '$email', '$beach', '$body')";
    if(mysqli_query($this->conn, $sql)){
      // echo 'SUCCES CONNECTION';
      // Vaciar los campos del formulario
      $name = $email = $beach = $body = '';
    } else{
      echo 'Error: ' . mysqli_error($this->conn);
    }
  }
//ECHO BEACH COMMENTS 
  public function show_beach_comments($beach){
    $comments = [];
    $sql = "SELECT * FROM feedback WHERE beach = '$beach'";
    $result = mysqli_query($this->conn, $sql);
    while($row = mysqli_fetch_array($result)){
      array_push($comments, $row);
    };
    return $comments;
  }

//ECHO ALL COMMENTS 
  public function show_comments(){
    $comments = [];
    $sql = "SELECT * FROM feedback";
    $result = mysqli_query($this->conn, $sql);
    while($row = mysqli_fetch_array($result)){
      array_push($comments, $row);
    };
    return $comments;
  }
}
?>