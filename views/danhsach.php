<?php
    include_once('views/shares/Header.php')
?>

<ul id="danh-sach">

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Trang Danh Sách</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Mã Số phiếu</th>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Lớp</th>
                    <th scope="col">Chuyên Ngành</th>
                    <th scope="col">MSSV</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($danhSach as $item){
                      echo "<tr>";
                      echo "<th scope='row'>".$item['maPhieu']."</th>";
                      echo "<td scope='row'>".$item['HoTen']."</td>";
                      echo "<td scope='row'>".$item['Lop']."</td>";
                      echo "<td scope='row'>".$item['ChuyenNganh']."</td>";
                      echo "<td scope='row'>".$item['MSSV']."</td>";
                      echo "<td> <a href='?r=delete&masophieu=".$item['maPhieu']."'> DELETE </a></td>";
                      echo "<td> <a href='?r=edit&masophieu=".$item['maPhieu']."'>EDIT</a></td>";
                      echo "</tr>";
                    }
                  ?>
                </tbody>
              </table>
</main>
</ul>
<?php
    include_once('views/shares/Footer.php')
?>