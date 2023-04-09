<html>
    <head>
        <title>
        Survei Industri Mikro Kecil Tahun 2022
        </title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="style1.css" rel="stylesheet">
<!--        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
    </head>
    <body>
        <?php
            include 'connect.php';
            $Data_biodata = mysqli_query($mysqli,"SELECT * FROM biodata WHERE id=$_GET[id]");
                $Biodata = mysqli_fetch_array($Data_biodata);
            $Data_foto = mysqli_query($mysqli,"SELECT * FROM gambar WHERE id=$_GET[id]");
                $Gambar = mysqli_fetch_array($Data_foto);
             $Data_pdf = mysqli_query($mysqli,"SELECT * FROM surattugas WHERE id=$_GET[id]");
                $Pdf = mysqli_fetch_array($Data_pdf);
        ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-baru">
 <div class="container">
 <a class="navbar-brand" href="#">SURVEI INDUSTRI MIKRO KECIL TAHUN 2022</a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">

   <ul class="navbar-nav">
     <li class="nav-item active">
  
      <a class="nav-link active" href="#">BIODATA</a>
      
     </li>
     <!--<li class="nav-item">-->
     <!---->
     <!--echo '<a class="nav-link" href="/surattugas.php?id='.$Biodata['id'].'">SURAT TUGAS</a>';-->
     <!-- ?>-->
     <!--</li>-->
   </ul>
    </div>
</div>

</nav>
<div class="jumbotron jumbotron-fluid bg-light">
  <div class="container">
  <h1>Tanda Pengenal Pencacah</h1>
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $Gambar['dataimage'] ).'"/>';?>

        <div class="cobaaja">
      <?php echo '<img style="max-width: 100%;height: auto;" src="data:image/jpeg;base64,'.base64_encode( $Pdf['filepdf'] ).'"/>';?>
    </div>
  </div>
</div>

    </body>
</html>
