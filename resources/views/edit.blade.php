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
	
	@foreach($dataceramah as $p)
	<div class="container">
		<form action="/dataceramah/update" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $p->id_ceramah }}"> <br/>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="text">Nama Pembuat</label>
					<input type="text" required="required"  name="nama_pembuat" value="{{ $p->nama_pembuat }}" class="form-control" id="text" placeholder="Nama Pembuat">					
				</div>
				<div class="form-group col-md-6">
					<label for="text">Tema Ceramah</label>
					<input type="text" required="required" name="tema_ceramah" value="{{ $p->tema_ceramah }}" class="form-control" id="text" placeholder="Tema Ceramah">
				</div>
				<div class="form-group col-md-6">
					<label for="text">Judul Ceramah</label>
					<input type="text" required="required" name="judul_ceramah" value="{{ $p->judul_ceramah }}" class="form-control" id="text" placeholder="Judul Ceramah">
				</div>
				<div class="form-group col-md-6">
					<label for="text">Isi Ceramah</label>
					<textarea required="required" name="isi_ceramah" class="form-control" id="text" placeholder="Isi Ceramah">{{ $p->isi_ceramah }}</textarea>
				</div>
				<div class="form-group col-md-6">
					<label for="text">Referensi</label>
					<input type="text" required="required" name="referensi" value="{{ $p->referensi }}" class="form-control" id="text" placeholder="Referensi">
				</div>
			</div>
			<input type="submit" class="btn btn-dark btn-sm" value="Simpan Data">
			<button type="button" class="btn btn-dark btn-sm"><a class="text-light" href="/dataceramah">Kembali</a></button>
		</form>
		
	</div>
	@endforeach

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
 
</body>
</html>