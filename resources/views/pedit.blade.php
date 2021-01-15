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
					  <a class="nav-link" href="\tutorial">Tutorial Ceramah</a>
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
		<h3>Edit Daftar Ceramah</h3>
	</div>
	
	@foreach($datapenceramah as $p)
	<div class="container">
		<form action="/datapenceramah/update" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $p->id_penceramah }}"> <br/>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="text">Nama Penceramah</label>
					<input type="text" required="required"  name="nama_penceramah" value="{{ $p->nama_penceramah }}" class="form-control" id="text" placeholder="Nama Penceramah">					
				</div>
				<div class="form-group col-md-6">
					<label for="text">Jenis Kelamin</label>
					<input type="text" required="required" name="jenis_kelamin" value="{{ $p->jenis_kelamin }}" class="form-control" id="text" placeholder="Jenis Kelamin">
				</div>
				<div class="form-group col-md-6">
					<label for="text">No Telpon</label>
					<input type="text" required="required" name="no_telepon" value="{{ $p->no_telepon }}" class="form-control" id="text" placeholder="No Telpon">
				</div>
				<div class="form-group col-md-6">
					<label for="text">Alamat</label>
					<textarea required="required" name="alamat" class="form-control" id="text" placeholder="alamat">{{ $p->alamat }}</textarea>
				</div>
				<div class="form-group col-md-6">
					<label for="text">Tarif</label>
					<input type="text" required="required" name="tarif" value="{{ $p->tarif }}" class="form-control" id="text" placeholder="Tarif">
				</div>
			</div>
			<input type="submit" class="btn btn-dark btn-sm" value="Simpan Data">
			<button type="button" class="btn btn-dark btn-sm"><a class="text-light" href="/datapenceramah">Kembali</a></button>
		</form>
		
	</div>
	@endforeach

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
 
</body>
</html>