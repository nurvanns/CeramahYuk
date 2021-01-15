<!DOCTYPE html>
<html>
<head>
    <title>Home - Tampilan Awal</title>
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
                    <a class="nav-link" href="\dataceramah">Data Ceramah</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="\datapenceramah">Data Penceramah</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="\tutorial">Tutorial Ceramah</a>
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

    <div class="container"><br>
        <h3>Tutorial melakukan Ceramah</h3>        
      </div><br/>  

    <div class="container">
        <div class="card-body">
            <div class="clearfix">
                <h4>1. Tips Berceramah</h4>
              <img src="\img\LakiCeramah.png" width="400px" alt="Gudeg Basah" class="float-left"
                style="margin-right: 5px">
              <p class="text-justify">Ceramah sebagai salah satu metode penyampaian pesan Dhamma, 
                  sebaiknya harus bisa disampaikan secara menarik, tidak membosankan, namun menyenangkan dan mudah dipahami. 
                  Setidaknya, selama proses ceramah berlangsung, para pendengar dapat merasakan kebahagiaan, 
                  ada respek yang kuat terhadap penceramah dan terhadap materi yang diceramahkan. Bila ceramah 
                  berlangsung menarik, hangat dan komunikatif, bisa dipastikan para pendengar akan menjadi betah 
                  dan menikmatinya. Oleh karena itu setiap penceramah harus siap untuk bisa tampil dengan baik dan maksimal, 
                  sehingga bisa sukses dalam ceramah.
                Ceramah yang baik adalah ceramah yang: Sistematis, Memperhatikan Etika, Efektif, Menyenangkan, Mencerdaskan dan Mencerahkan.</p>
            </div>
            <br>
            <div class="clearfix">
                <h4>2. Ceramah Sistematis</h4>
              <img src="\img\CeweCeramah.png" width="400px" alt="Gudeg Kering" class="float-right"
                style="margin-right: 5px">
              <p class="text-justify">2. Salah satu ceramah yang baik adalah ceramah yang sistematis, yaitu: ceramah yang tersistem yang mengalir teratur, 
                  Memiliki kerangka yang jelas; Ada judul (Udesa), Ada isi dan contoh (Nidesa) serta ada kesimpulan (Patinidesa). 
                  Diantara judul, isi dan kesimpulan juga saling berkaitan.
                Ada baiknya juga di dalam kita menguraikan isi ceramah, kita tolong dengan menggunakan pertanyaan pembantu, 
                <br>Misalnya pertanyaan: Apa, Mengapa, Bagaimana, Kapan, Dimana, Contohnya apa, Manfaatnya apa dll.
                .</p>
            </div>
            <br>
            <div class="clearfix">
                <h4>3. Etika Ceramah</h4>
              <img src="\img\LakiCeramah.png" width="400px" alt="Gudeg Kering" class="float-left"
                style="margin-right: 5px">
              <p class="text-justify">Demikian pula agar seorang penceramah bisa melakukan ceramahnya secara baik, 
                  maka sebaiknya ia memperhatikan Etika ceramah atau yang disebut Dhammakathina atau sifat seorang penceramah. 
                  Adapun isi dhammakathina itu adalah sbb:

                <br>A. Menerangkan Dhamma setahap demi setahap, tidak meloncat, atau menyingkat bagian tertentu sehingga menjadi mengurangi arti sebenarnya.
                <br>B. Di dalam ceramah hendaknya memberikan alasan, argument, atau contoh-contoh, sehingga pendengarnya jadi mudah mengerti.
                <br>C. penceramah Dhamma harus memiliki metta di dalam hatinya, dan menyampaikan ceramahnya dengan penuh kasih, dengan harapan semoga pendengar dapat memetik faedah dari kotbah yang disampaikan.
                <br>D. Seorang penceramah Dhamma tidak mengajar Dhamma dengan tujuan untuk memperoleh keuntungan pribadi. (baik secara politis maupun ekonomis). *Lihat juga Vin Pit I.21.
                <br>E. Seorang penceramah Dhamma tidak mengajar Dhamma untuk menyerang orang lain atau memuji diri sendiri tapi merendahkan orang lain.
            </p>
            </div>
            <br>
            <div class="clearfix">
                <h4>4. Ceramah Yang Efektif</h4>
              <img src="\img\CeweCeramah.png" width="400px" alt="Gudeg Kering" class="float-right"
                style="margin-right: 5px">
              <p class="text-justify">Ciri lain dari suatu ceramah yang disebut ceramah yang baik adalah ceramah yang efektif, yaitu:

                Ceramah yang mudah dipahami,
                Topik sesuai kebutuhan dan 
                Mampu memberikan perubahan,
            
            <br>Agar ceramah mudah dipahami, maka gunakanlah bahasa yang akrab bagi pendengar dan pakai bahasa yang sederhana. Gunakan vokal yang jelas, juga dengan volume yang keras.
            
            Perhatikan juga agar topik ceramah benar-benar sesuai kebutuhan. Usahakan juga agar penceramah peka terhadap situasi psikologi pendengar, sehingga ceramah yang disampaikan 
            mengena seperti yang diharapkan pendengar. Misalnya, anda tahu bahwa pendengar sedang resah dan penasaran denga tsunami, maka sebaiknya ceramahlah denga topik yang relevan dengan itu.
            
            Diharapkan juga agar penceramah mampu memberikan perubahan, artinya: dengan kemampuan yang anda miliki, anda mampu membuat pendengar menjadi respek terhadap anda dan mau merubah sikap, 
            mau menjadi maju dan berani meninggalkan kebiasaan yang tidak baik.</p>
            </div>
            <br>
            <div class="clearfix">
                <h4>5. Ceramah Yang Mencerdaskan dan Mencerahkan</h4>
              <img src="\img\LakiCeramah.png" width="400px" alt="Gudeg Kering" class="float-left"
                style="margin-right: 5px">
              <p class="text-justify">Ceramah yang mencerdaskan bukanlah ceramah yang dogmatis atau ceramah yang hanya menuntun pendengarnya untuk menyakini atau mempercayai sesuatu secara membuta. 
                  Akan tetapi, ceramah yang mencerdaskan adalah ceramah yang mengajak pendengarnya untuk mau berpikir, mau belajar, dan terpanggil untuk mau melihat dan membuktikan sendiri suatu kebenaran yang diceramahkannya. 
                  Ceramah yang mencerahkan adalah ceramah yang menuntun orang jadi cerah, jadi mengerti kebenaran (memahami sunyata). Ceramah yang mencerahkan adalah juga ceramah yang bisa membangkitkan inspirasi, dan membangun kesadaran pendengarnya. 
                  Ceramah ini disampaikan dengan rasa tanggungjawab, bebas dari profokatif negatif, bebas dari aura kebencian, dan bebas dari niat membodohi ataupun menjerumuskan.</p>
            </div>

          </div>
        </div>

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

</body>
</html>