<!DOCTYPE html>
<html>
<head>
    <title>Daftar Ceramah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Font Awesome Icons -->
    <link href="css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic'
        rel='stylesheet' type='text/css'>


    <!-- Theme CSS - Includes Bootstrap -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- About CSS -->
    <link rel="stylesheet" type="text/css" href="css/aboutus.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
      <h3>Daftar Ceramah</h3><br>
        <button type="button" class="btn btn-info btn-sm"><a class="text-dark" href="/dataceramah/tambah"> + Buat Ceramah</a></button>
    </div>	<br/>    

    <div class="container">
        <table class="table table-bordered" border='2'>
            <tr>
                <th>Nama Pembuat</th>
                <th>Tema Ceramah</th>
                <th>Judul Ceramah</th>
                <th>Isi Ceramah </th>
                <th>Referensi</th>
                <th>Opsi</th>
            </tr>
            <tr></tr>
            @foreach($dataceramah as $p)
            <tr>
                <td>{{ $p->nama_pembuat }}</td>
                <td>{{ $p->tema_ceramah }}</td>
                <td>{{ $p->judul_ceramah }}</td>
                <td>{{ $p->isi_ceramah }}</td>
                <td><a href="{{ $p->referensi }}">Sumber</a></td>
                <td>
                    <button type="button" class="btn btn-info btn-sm"><a class="text-dark" href="/dataceramah/edit/{{ $p->id_ceramah }}">Edit</a></button>
                    |
                    <button type="button" class="btn btn-danger btn-sm"><a class="text-light" href="/dataceramah/hapus/{{ $p->id_ceramah }}">Hapus</a></button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <!-- footer -->
    <footer class="text-light">
    <div class="container">
        <div class="row">
        <div class="col-md-3 col-lg-4 col-xl-2 mx-auto ">
            <h5>About</h5>
            <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
            <p class="mb-0">
            Galuh Nurvan Saputra 20170140034 <br>Est - 2021
            </p>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-3 mx-auto">
            <h5>Informations</h5>
            <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
            <ul class="list-unstyled">
            <li><a href="">Belajar Ceramah Yang Baik</a></li>
            <li><a href="">Daftar Penceramah di Indonesia</a></li>
            </ul>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3">
            <h5>Contact</h5>
            <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
            <ul class="list-unstyled">
            <li><i class="fa fa-home mr-2"></i>Ceramah Yuk Developer</li>
            <li><i class="fa fa-envelope mr-2"></i>ceramahyuk@gmail.com</li>
            <li><i class="fa fa-phone mr-2"></i>Instagram : @CeramahYuk </li>
            </ul>
        </div>
        <div class="col-12 copyright mt-3">
            <p class="float-right">
            <a href="#">Back to top</a>
            </p>
        </div>
        </div>
    </div>
    </footer>

    <!-- end -->
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>