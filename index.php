<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="COFEE.css">
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
</head>
<body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-brown navbar-dark shadow-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="" id="">Patri Coffee Shop</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarText"
            aria-controls="navbarText"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#menu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="blogs.html">Blogs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#about">about</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#kontak">Contac</a>
              </li>
              <li class="nav-item">
                <button class="btn btn-profile" type="button" data-bs-toggle="modal" data-bs-target="#login">
                    <i class="fa-solid fa-regular fa-user fa-xl fa-xl text-white"></i>
                </button>
              </li>
                
            <li class="nav-item">
              <button class="btn btn-cart" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                  <i class="fa-solid fa-cart-shopping fa-xl text-white"></i>
              </button>
            </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- BANNER -->
      <div class="container-fluid banner" id="home">
             <div class="container ">
                 <h4 class="display-1">PATRI COFFEE </h4>
                 <h4 class="display-1">HOUSE </h4>
                 <H1 class="text-danger">The premium Quality</H1>
                 <H3 class="display-7 text-light">Patri house provides seeds</H3>
                 <H3 class="display-7 text-light">the best quality coffee</H3>
                 <a href="#menu">
                    <button type="button" class="btn btn-order-now  btn-lg mt-4 " style="text-decoration: none; color:aliceblue;">Order Now</button>
                  </a>
                  
            </div>
        </div>
        
        <!-- Menu -->
        <div class="container-fluid pt-5 menu" id="menu">
            <div class="container text-center " >
            <h2 class="mt-3" >Menu</h2>
            <div class="row pt-4 gx-4 gy-4">
                <!-- CARD 1 -->
                <div class="col-md-4">
                    <div class="card crop-img ">
                         <img src="img-coffee/ARABIkA.png" class="card-image card-img-top "/>
                          <h5 class="card-title">ARABIKA</h5>
                          <p class="card-text">Rp. XXXK.</p>
                          
                          <button class="btn btn-view-product mb-3" type="button" data-bs-toggle="modal" data-bs-target="#btnModalArabika">Lihat Produk</button>
                        </div>
                      </div> 
                      <!-- CARD 2 -->
                      <div class="col-md-4 " >
                        <div class="card crop-img">
                            <img
                              src="img-coffee/BALI.png"
                              class="card-image card-img-top "
                            />
                              <h5 class="card-title">BALI</h5>
                              <p class="card-text">Rp. XXXK.</p>
                              <button class="btn btn-view-product mb-3" type="button" data-bs-toggle="modal" data-bs-target="#btnModalBali">Lihat Produk</button>
                            </div>
                          </div> 

                          <!-- CARD 3 -->
                      <div class="col-md-4">
                        <div class="card crop-img">
                            <img src="img-coffee/TORAJA.png" class="card-image card-img-top " />
                              <h5 class="card-title">TORAJA</h5>
                              <p class="card-text">Rp. XXXK.</p>
                              <button class="btn btn-view-product mb-3" type="button" data-bs-toggle="modal" data-bs-target="#btnModalToraja">Lihat Produk</button>
                            </div>
                          </div> 
                          <!-- CARD 4 -->
                          <div class="col-md-4">
                            <div class="card crop-img">
                                <img src="img-coffee/GAYO.png" class="card-image card-img-top"/>
                                  <h5 class="card-title">GAYO</h5>
                                  <p class="card-text">Rp. XXXK.</p>
                                  <button class="btn btn-view-product mb-3" type="button" data-bs-toggle="modal" data-bs-target="#btnModalGayo">Lihat Produk</button>
                                </div>
                              </div> 

                              <!-- CARD 5 -->
                              <div class="col-md-4">
                                <div class="card crop-img">
                                    <img src="img-coffee/LUWAK.png" class="card-image "/>
                                      <h5 class="card-title">LUWAK</h5>
                                      <p class="card-text">Rp. XXXK.</p>
                                      <button class="btn btn-view-product mb-3" type="button" data-bs-toggle="modal" data-bs-target="#btnModalLuwak">Lihat Produk</button>
                                    </div>
                                  </div> 

                                   <!-- CARD 6 -->
                              <div class="col-md-4">
                                <div class="card crop-img">
                                    <img src="img-coffee/ROBUSTA.png" class="card-image card-img-top " />
                                      <h5 class="card-title">ROBUSTA</h5>
                                      <p class="card-text">Rp. XXXK.</p>
                                      <button class="btn btn-view-product mb-3" type="button" data-bs-toggle="modal" data-bs-target="#btnModalRobusta">Lihat Produk</button>
                                    </div>
                                  </div> 
                             
            </div>
        </div>
    </div>

  
  <!-- Modal ARABIKA-->
  <div class="modal fade modal-arabika" id="btnModalArabika" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">KOPI ARABIKA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row pt-4">
              <div class="col-md-6">
                <img src="img-coffee/ARABIKA.png" alt="Golden Crema - Kopi House Blend 500gr" class=" gmbr-popup">
               
              </div>
             
              <div class="col-md-6">
                <h3>BIJI KOPI ARABIKA - Patri Coffe House 800gr</h3>
                <p>Rp125.000</p>
                <div class="quantity">
                    <button class="minus-btn" type="button" >-</button>
                    <input type="text" class="quantity-input" value="1">
                    <button class="plus-btn" type="button">+</button>
                  </div>   
               
              </div>
              <p style="padding-top: 10px;">Deskripsi :</p>
              <p>Kopi Arabika adalah salah satu jenis kopi yang paling populer dan dihargai 
                di dunia. Biji kopi Arabika berasal dari pohon kopi Arabika (Coffea arabica) yang tumbuh 
                di ketinggian antara 600 hingga 2000 meter di atas permukaan laut. Kopi Arabika memiliki rasa yang 
                kompleks, dengan berbagai nuansa mulai dari manis hingga asam, serta aroma yang bervariasi 
                dari buah-buahan, bunga, hingga rempah-rempah. Biji kopi Arabika memiliki kandungan kafein yang lebih rendah dibandingkan dengan 
                kopi jenis lainnya seperti Robusta, tetapi memiliki kualitas yang lebih tinggi dan sering kali dianggap lebih halus dan lembut dalam rasa. 
                Kopi Arabika biasanya dipilih untuk kopi kelas atas dan kopi spesialitas karena profil rasanya yang unik dan kompleks.</p>
            </div>
        </div>       
        <div class="-footer">
                    <button type="button" class="btn-popup" >Beli Langsung</button>
                    <button type="button" class="btn-popup">Tambahkan Ke Keranjang</button>
            </div>
      </div>
    </div>
  </div>

   <!-- Modal BALI-->
   <div class="modal fade modal-bali" id="btnModalBali" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">KOPI BALI</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row pt-4">
              <div class="col-md-6">
                <img src="img-coffee/BALI.png" alt="Golden Crema - Kopi House Blend 500gr" class="gmbr-popup">
              </div>
             
              <div class="col-md-6">
                <h3>BIJI KOPI BALI - Patri Coffe House 800gr</h3>
                <p>Rp125.000</p> 
                <div class="quantity">
                    <button class="minus-btn" type="button" >-</button>
                    <input type="text" class="quantity-input" value="1">
                    <button class="plus-btn" type="button">+</button>
                  </div>             
              </div>
              <p style="padding-top: 10px;">Deskripsi :</p>
              <p>Biji kopi Bali, tumbuh di dataran tinggi pulau Bali, Indonesia. 
                Dikenal dengan cita rasa halus, kompleks, dan rendah asam. Terinspirasi dari faktor 
                seperti lokasi tumbuh, metode pengolahan, dan iklim. Dijelaskan dengan nuansa seperti coklat, 
                buah tropis, bunga, atau rempah-rempah. Cocok bagi penggemar kopi yang mencari pengalaman yang tenang 
                dan terimbangi.</p>
            </div>
        </div>       
        <div class="-footer">
                    <button type="button" class="btn-popup" >Beli Langsung</button>
                    <button type="button" class="btn-popup">Tambahkan Ke Keranjang</button>
            </div>
      </div>
    </div>
  </div>

   <!-- Modal TORAJA-->
   <div class="modal fade modal-toraja" id="btnModalToraja" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">KOPI TORAJA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row pt-4">
              <div class="col-md-6">
                <img src="img-coffee/TORAJA.png" alt="Golden Crema - Kopi House Blend 500gr" class="gmbr-popup">
              </div>
             
              <div class="col-md-6">
                <h3>BIJI KOPI TORAJA - Patri Coffe House 800gr</h3>
                <p>Rp125.000</p> 
                <div class="quantity">
                    <button class="minus-btn" type="button" >-</button>
                    <input type="text" class="quantity-input" value="1">
                    <button class="plus-btn" type="button">+</button>
                  </div>             
              </div>
              <p style="padding-top: 10px;">Deskripsi :</p>
              <p>Biji kopi Toraja berasal dari wilayah Toraja, Sulawesi Selatan, Indonesia. Kopi ini 
                tumbuh di dataran tinggi dengan ketinggian sekitar 1.000 hingga 
                1.800 meter di atas permukaan laut. Kopi Toraja dikenal karena rasa yang kompleks 
                dengan nuansa buah-buahan, rempah-rempah, dan cokelat, serta memiliki keasaman yang seimbang.</p>
            </div>
        </div>       
        <div class="-footer">
                    <button type="button" class="btn-popup" >Beli Langsung</button>
                    <button type="button" class="btn-popup">Tambahkan Ke Keranjang</button>
            </div>
      </div>
    </div>
  </div>

   <!-- Modal GAYO-->
   <div class="modal fade modal-gayo" id="btnModalGayo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">KOPI ROBUSTA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row pt-4">
              <div class="col-md-6">
                <img src="img-coffee/GAYO.png" alt="" class="gmbr-popup">
              </div>
             
              <div class="col-md-6">
                <h3>BIJI KOPI GAYO - Patri Coffe House 800gr</h3>
                <p>Rp125.000</p> 
                <div class="quantity">
                    <button class="minus-btn" type="button">-</button>
                    <input type="text" class="quantity-input" value="1">
                    <button class="plus-btn" type="button">+</button>
                  </div>             
              </div>
              <p style="padding-top: 10px;">Deskripsi :</p>
              <p>Biji kopi Gayo merupakan varietas kopi Arabika yang ditanam di dataran tinggi Gayo, 
                Aceh, Indonesia. Terkenal akan kualitasnya yang superior, kopi Gayo 
                tumbuh pada ketinggian sekitar 1.200 hingga 1.500 meter 
                di atas permukaan laut. Kopi Gayo dikenal akan cita rasa 
                halus dengan sentuhan buah-buahan, coklat, dan rempah-rempah 
                yang khas. Proses pengolahannya sering dilakukan secara tradisional, 
                baik dengan metode kering maupun basah, memberikan karakteristik rasa yang unik dan kompleks. Dengan tingkat keasaman 
                yang rendah dan kehalusan rasanya, kopi Gayo sering dianggap sebagai salah satu kopi terbaik di Indonesia, 
                serta memiliki dampak sosial dan ekonomi yang signifikan bagi masyarakat setempat di Aceh</p>
            </div>
        </div>       
        <div class="-footer">
                    <button type="button" class="btn-popup" >Beli Langsung</button>
                    <button type="button" class="btn-popup">Tambahkan Ke Keranjang</button>
            </div>
      </div>
    </div>
  </div>

   <!-- Modal LUWAK-->
   <div class="modal fade modal-luwak" id="btnModalLuwak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">KOPI LUWAK</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row pt-4">
              <div class="col-md-6">
                <img src="img-coffee/LUWAK.png" alt="Golden Crema - Kopi House Blend 500gr" class="gmbr-popup">
              </div>
             
              <div class="col-md-6">
                <h3>BIJI KOPI LUWAK - Patri Coffe House 800gr</h3>
                <p>Rp125.000</p> 
                <div class="quantity">
                    <button class="minus-btn" type="button">-</button>
                    <input type="text" class="quantity-input" value="1">
                    <button class="plus-btn" type="button">+</button>
                  </div>             
              </div>
              <p style="padding-top: 10px;">Deskripsi :</p>
              <p>Biji kopi Luwak merupakan hasil dari proses unik di mana biji kopi yang telah dimakan oleh musang luwak 
                kemudian dikeluarkan melalui pencernaan mereka. Proses ini memberikan kopi Luwak cita rasa yang halus dan 
                kaya dengan sedikit keasaman. Kopi Luwak sering digambarkan memiliki nuansa yang unik dan kompleks, 
                dengan sentuhan cokelat, buah-buahan, dan rempah-rempah. Meskipun produksinya terbatas dan harganya tinggi, kopi 
                Luwak telah menjadi lambang kemewahan bagi para pecinta kopi di seluruh dunia. </p>
            </div>
        </div>       
        <div class="-footer">
                    <button type="button" class="btn-popup" >Beli Langsung</button>
                    <button type="button" class="btn-popup">Tambahkan Ke Keranjang</button>
            </div>
      </div>
    </div>
  </div>

   <!-- Modal ROBUSTA-->
   <div class="modal fade modal-robusta" id="btnModalRobusta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">KOPI ROBUSTA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row pt-4">
              <div class="col-md-6">
                <img src="img-coffee/ROBUSTA.png" alt="Golden Crema - Kopi House Blend 500gr" class="gmbr-popup">
              </div>
             
              <div class="col-md-6">
                <h3>BIJI KOPI ROBUSTA - Patri Coffe House 800gr</h3>
                <p>Rp125.000</p> 
                <div class="quantity">
                    <button class="modal-Robusta minus-btn" type="button">-</button>
                    <input type="text" class="quantity-input" value="1">
                    <button class="plus-btn" type="button">+</button>
                  </div>             
              </div>
              <p style="padding-top: 10px;">Deskripsi :</p>
              <p>Biji kopi Robusta berasal dari pohon kopi jenis Coffea canephora, yang tumbuh di wilayah-wilayah tropis di 
                sebagian besar Afrika, Asia, dan Amerika. Berbeda dengan kopi Arabika, kopi Robusta memiliki cita rasa yang lebih 
                kuat dan beraroma, dengan tingkat keasaman yang lebih rendah. Kopi Robusta cenderung memiliki rasa yang lebih pahit 
                dan kurang kompleks daripada kopi Arabika. Meskipun begitu, biji kopi Robusta memiliki kandungan kafein yang 
                lebih tinggi, sehingga sering digunakan dalam campuran kopi atau sebagai bahan baku untuk kopi instan dan kopi espress.</p>
            </div>
        </div>       
        <div class="-footer">
                    <button type="button" class="btn-popup" >Beli Langsung</button>
                    <button type="button" class="btn-popup">Tambahkan Ke Keranjang</button>
            </div>
      </div>
    </div>
  </div>

  <!-- MODAL CART -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">Cart</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <hr>
    <div class="offcanvas-body">
      <div class="row">
        <div class="col-sm-3">
          <img src="img-coffee/ARABIKA.jpg" alt="" class="img-cart">
        </div>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-sm-12">
              <h6 style="margin-left: 50px;">BIJI KOPI ARABIKA 800gr</h6>
              <p style="margin-left: 50px;">Rp125.000</p>

              <div class="quantity3" style="margin-left: 50px;">
                <button class="modal-Robusta minus-btn" type="button">-</button>
                <input type="text" class="quantity-input" value="1">
                <button class="plus-btn" type="button">+</button>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <div class="row">
        <hr>
        <div class="col-md-6"><p style="padding-left: 30px;">SUBTOTAL</p></div>
        <div class="col-md-6"><p style="padding-left: 100px;">IDR ....</p></div>
      </div>
      <button type="button" class="btn btn-checkout">CHECK OUT</button>
    </div>
  </div>

  <!-- MODAL LOGIN -->
  <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">LOGIN</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label for="email" class="emaill">Username</label><br>
          <input type="text" id="email" class="email" placeholder="Masukan Username anda"><br>
          
          <label for="Password" class="passwordd">Password</label><br>
          <input type="password" id="pass" class="password" placeholder="Masukan Password" >

          <button type="button" class="btn btn-login">Login</button>
          <a href="" style="text-decoration: none;">
            <p class="text-center">Create Account</p>
         </a>  
      </div>
    </div>
  </div>
  </div>
  <!-- About -->
<div class="container-fluid pt-5 about" id="about">
          <div class="container">
              <h2 class="display-3 text-center text-white" id="tentang">Tentang</h2>
              <p class="text-center text-white">Patri Coffee House</p>
              <div class="pt-5 text-white">
                  <img
                      src="img-coffee/abaout.png"
                      class="col-md-6 float-md-end mb-3 crop-img img-fluid img-about"
                      
                  />
                  <p>Patri Coffee House didirikan dengan komitmen untuk mendukung dan memberdayakan petani kopi. Aspek ini menjadi salah satu alasan utama di balik pendirian Patri Coffee House.</p>
                  <p>Dengan memberikan dukungan kepada petani kopi, Patri Coffee House berusaha menciptakan dampak positif pada masyarakat dan industri kopi secara keseluruhan.</p>
                  <p>Dengan fokus pada dukungan kepada petani kopi, Patri Coffee House menciptakan ekosistem yang saling menguntungkan di mana para petani mendapatkan nilai lebih dari hasil kerja mereka, sementara pelanggan dapat menikmati kopi berkualitas tinggi yang bersumber secara etis. Melalui komitmen ini, Patri Coffee House berharap dapat memberikan dampak positif pada industri kopi dan mendorong perubahan yang lebih baik bagi petani kopi di seluruh dunia.</p>
              </div>
          </div>
      </div>
      <!-- Take ud with you -->
      <div class="container-fluid pt-5 pb-5">
        <div class="container text-center">
          <p class="display-6">Take us with you</p>
          <h1 class="display-5 fw-bold text-secondary">Bawa Kami Dalam Keseharian Bersamamu</h1>
        <div class="row pt-5 pb-5">
        <div class="col-md-4">
          <span class="lingkaran mb-5"><i class="fa-solid fa-bag-shopping fa-5x"></i></span>
          <h2>Coffe Pack</h2>
          <p>Dalam Kemasan 800gr kamu bisa menikmati secangkir kopi dari patri kopi house </p>
        </div>
        <div class="col-md-4">
          <span class="lingkaran mb-5"><i class="fa-solid fa-bag-shopping fa-5x"></i></span>
          <h3>Selected Coffee Beans</h3>
          <p>Dapatkan berbagai pilihan biji kopi premium dari berbagai daerah untuk memenuhi selera kopimu.</p>
        </div>
        <div class="col-md-4">
          <span class="lingkaran mb-5"><i class="fa-solid fa-bag-shopping fa-5x"></i></span>
          <h2>Hampers</h2>
          <p>Dapatkan berbagai pilihan biji kopi premium dari berbagai daerah untuk memenuhi selera kopimu.</p>
        </div>
        </div>
      </div>
    </div>
    
    <!-- Gallery -->
    <div class="conatiner-fluid mb-5">
      <div class="container text-center">
        <h2>Gallery</h2>
        <div class="row pt-5 pb-5">
          <div class="col-3">
            <div class="gallery-item">
              <img class="album" src="img-coffee/album1.jpg" alt="">
            </div>
          </div>
          <div class="col-3">
            <div class="gallery-item">
              <img class="album" src="img-coffee/album2.webp" alt="">
            </div>
          </div>
          <div class="col-3">
            <div class="gallery-item">
              <img class="album" src="img-coffee/album3.jpg" alt="">
            </div>
          </div>
          <div class="col-3">
            <div class="gallery-item">
              <img class="album" src="img-coffee/album4.jpg" alt="">
            </div>
          </div>
          <div class="col-3">
            <div class="gallery-item">
              <img class="album" src="img-coffee/album5.webp" alt="">
            </div>
          </div>
          <div class="col-3">
            <div class="gallery-item">
              <img class="album" src="img-coffee/album6.jpg" alt="">
            </div>
          </div>
          <div class="col-3">
            <div class="gallery-item">
              <img class="album" src="img-coffee/album7.jpg" alt="">
            </div>
        </div>
          <div class="col-3">
            <div class="gallery-item">
              <img class="album" src="img-coffee/album8.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- kontak -->
    <div class="container-fluid  kontak">
      <div class="container">
        <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
        <p class="text-center">
          Selamat Datang di patri coffe house jika ada pertanyaan hubungi kami melalui form di bawah ini 
        </p>
        <div class="row pb-3">
          <div class="col-md-6">
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Nama"
            />
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Email"
            />
            <input
              class="form-control form-control-lg"
              type="text"
              placeholder="No. Phone"
            />
          </div>
          <div class="col-md-6">
            <textarea class="form-control form-control-lg" rows="5"></textarea>
          </div>
        </div>
        <div class="col-md-3 mx-auto text-center pb-5 pb-5 " >
          <button type="button" class="btn btn-kirim-pesan btn-lg text-white">
            Kirim Pesan
          </button>
        </div>
      </div>
    </div>
    <div class="text-center text-white footer">
      All Rights Reserved &copy; 2025
    </div>
<script src="COFFE.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>