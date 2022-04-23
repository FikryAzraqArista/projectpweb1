<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FROM BELANJA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    
    <h4>Belanja Online</h4>


<div class="container-fluid">
	<div class="row">
        <!--bagian kiri-->
		<div class="col-md-6">
        <form action="praktikum2.1.php" method="POST">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="mesin cuci"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Jumlah_beli" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="Jumlah_beli" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="kirim" type="kirim" class="btn btn-success" >kirim</button>
    </div>
  </div>
</form>
</div>

		<div class="col-md-6">
        <ul class="list-group">
          <li class="list-group-item active">Daftar Harga</li>
          <li class="list-group-item">TV : 4.200.000 </li>
          <li class="list-group-item">KULKAS : 3.100.000</li>
          <li class="list-group-item">MESIN CUCI : 3.800.000 </li>
          <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
        </ul>
		</div>
	</div>
</div>

<?php
$proses = $_POST["proses"];
$nama_customer = $_POST["customer"];
$produk_pilihan = $_POST["produk"];
$jumlah_beli = $_POST["jumlah"];

if ($produk_pilihan == "tv") {
    $total_belanja = $jumlah_beli * 4200000;
} elseif ($produk_pilihan == "kulkas") {
    $total_belanja = $jumlah_beli * 3100000;
} elseif ($produk_pilihan == "mesin cuci") {
    $total_belanja = $jumlah_beli * 3800000;
} 

echo '<br/> Nama Customer :' . $nama_customer;
echo '<br/> Produk Pilihan :' . $produk_pilihan;
echo '<br/> Jumlah Beli :' . $jumlah_beli;
echo '<br/> Total Belanja : Rp. '.number_format ($total_belanja,2,',','.');


?>

</body>
</html>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php
include_once 'footer.php';
?>