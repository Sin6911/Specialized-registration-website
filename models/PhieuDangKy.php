<?php


class PhieuDangKy{

    private $db;

    function __construct($pdo) {

      $this->db = $pdo;

    }


    function addPhieuDangKy($HoTen, $Lop, $ChuyenNganh, $MSSV) {

      $stmt = $this->db->prepare("INSERT INTO phieudangky (HoTen, Lop, ChuyenNganh, MSSV)
       VALUES (:hoten, :lop, :chuyennganh, :mssv)");

      $stmt->execute(array(

        ':hoten' => $HoTen,

        ':lop' => $Lop,

        ':chuyennganh' => $ChuyenNganh,

        ':mssv' => $MSSV

      ));

    }
    function getPhieuDanhKys() {

      $stmt = $this->db->prepare("select * from phieudangky");

      $stmt->execute();

      $danhSach = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $danhSach;

  }
    function delete($MaPhieu){
      $sql = "DELETE FROM phieudangky WHERE maPhieu =:masophieu";
      $stmt = $this ->db->prepare($sql);
      $stmt -> bindParam(':masophieu', $MaPhieu);
      return $stmt -> execute();
    }

    function find($MaPhieu){
      $sql = "SELECT * FROM phieudangky WHERE maPhieu =:masophieu";
      $stmt = $this ->db->prepare($sql);
      $stmt -> bindParam(':masophieu', $MaPhieu);
      $stmt -> execute();
      return $stmt -> fetch(PDO::FETCH_ASSOC);
    }


}


?>