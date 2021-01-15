<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
		<div class="container-fluid">
		  <a class="navbar-brand" href="\" ><img src="/img/Logo.png" alt="" width="60" height="54">Berbagi & Belajar Ceramah</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <form class="d-flex">
			<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success" type="submit">Search</button>
		  </form>
		</div>
	  </nav>
  
	  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
		  <div class="container-fluid">          
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
					  <li class="nav-item">
					  <a class="nav-link active" aria-current="page" href="\dataceramah">Data Ceramah</a>
					  </li>
					  <li class="nav-item">
					  <a class="nav-link" href="\datapenceramah">Data Penceramah</a>
					  </li>
					  <li class="nav-item">
					  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
					  </li>
				  </ul>
				  @if (Route::has('login'))
				  <div class="top-right links">
					  @auth
						  <a href="{{ url('/home') }}">Home</a>
					  @else
						  <button type="button" class="btn btn-dark btn-sm"><a class="text-light" href="{{ route('login') }}">Login</a></button>                        
						  @if (Route::has('register'))
						  <button type="button" class="btn btn-light btn-sm"><a class="text-dark" href="{{ route('register') }}">Register</a></button>                            
						  @endif
					  @endauth
				  </div>
			  @endif
			  </div>
		  </div>
	  </nav> 
	
	<div class="container">
		<h3>Tambah Data Penceramah</h3>
	</div><br>
	<div class="container">
		<form action="/datapenceramah/store" method="post">
			{{ csrf_field() }}
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="text">Nama Penceramah</label>
					<input type="text" class="form-control" id="text" placeholder="Nama Penceramah" name="nama_penceramah" required="required">
				</div>
				<div class="form-group col-md-6">
					<label for="text">Jenis Kelamin</label>
					<input type="text" class="form-control" id="text" placeholder="Jenis Kelamin" name="jenis_kelamin" required="required">
				</div>
				<div class="form-group col-md-6">
					<label for="text">No Telpon</label>
					<input type="text" class="form-control" id="text" placeholder="No Telpon" name="no_telepon" required="required">
				</div>
				<div class="form-group col-md-6">
					<label for="text">Alamat</label>
					<textarea type="text" class="form-control" id="text" placeholder="Alamat" name="alamat" required="required"></textarea>
				</div>
				<div class="form-group col-md-6">
					<label for="text">Tarif</label>
					<input type="text" class="form-control" id="text" placeholder="Tarif" name="tarif" required="required">
				</div>
			</div>
			<input type="submit" class="btn btn-dark btn-sm" value="Simpan Data">
			<button type="button" class="btn btn-dark btn-sm"><a class="text-light" href="/datapenceramah">Kembali</a></button>
		</form>
		
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>