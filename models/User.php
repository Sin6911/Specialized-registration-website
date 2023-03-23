<?php


class User{

    private $db;

    function __construct($pdo) {
      $this->db = $pdo;
    }
    function findd($userName, $pass){
        $sql = "SELECT * FROM user WHERE UserName=:u";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':u', $userName);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    function register(){
      require_once('views/account/register.php');
    }
    function addd($userName, $hashPass) {
      $stmt = $this->db->prepare("INSERT INTO user (UserName, pass) VALUES (:u, :p)");
      return $stmt->execute(array(
        ':u' => $userName,
        ':p' => $hashPass,
      ));
    }
}
?>