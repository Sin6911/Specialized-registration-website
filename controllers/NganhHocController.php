<?php

require_once('config/database.php');
require_once('models/PhieuDangKy.php');

class NganhHocController{
    // dang ky nganh hoc
    private $model;
    function __construct(){
        global $pdo;
        $this->model = new PhieuDangKy($pdo);
    }
    function index(){
        require_once("views/dangky.php");
    }
    function add(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $this->model->addPhieuDangKy($_POST['hoten'], $_POST['lop'], $_POST['chuyennganh'], $_POST['mssv']);
            header('Location: /');

        }

    }
    function getDanhSachs(){

        $danhSach =   $this->model->getPhieuDanhKys();
        require_once('views/danhsach.php');
    }
    function delete(){
        $MaPhieu = $_GET['maPhieu'];
        if(isset($MaPhieu)){
            $isDelete =$this->model->delete($MaPhieu);
            if($isDelete){
                header('Location: ?r=danhsach');
            }else{
                echo "ERRO DELETE $MaPhieu!!!";
            }
        }else{
            echo "Not Found !!!";
        }
    }

    }


?>