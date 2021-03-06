<!doctype html>
<html>
<head>

 	<meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css">

    
<!--Başlık-->
	<title>Kitaplık</title>
</head>
<body>
    
<?php

include("baglanti.php");

    
$aranan=$_POST['aranan'];
    
$result = pg_query($connect, "SELECT * FROM   kitaphepsi WHERE   ad='$aranan' ");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

$sql10 = "SELECT * FROM   kitaphepsi WHERE   ad='$aranan' ";

$res = pg_query($sql10);

$count = pg_num_rows($res);
if (!$count) {
  header("Location: kitapbulunamadı.html");  
  exit;
}
$arr = pg_fetch_array($result)
?> 
    
    
    <div class="page sub-page">
        <header class="hero">
            <div class="hero-wrapper">
               
                <div class="main-navigation">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/logo.jpg" width="250" height="100"alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar">
                                <!--Gezinme Listesi-->
                                <ul class="navbar-nav">
                                    <li >
                                        <a class="nav-link" href="anasayfa.html">Anasayfa</a>
                                    </li>
                                    <li >
                                        <a class="nav-item active"  href="kitaplar.html">Kitaplar</a>
                                    </li>
                                    <li >
                                        <a class="nav-link" href="iletisim.html">İletişim</a>
                                    </li>
                                </ul>
                              
                            </div>
                        </nav>
                    </div>
                   
                </div>
    
                 <div class="page-title">
                    <div class="container">
                        <h1>Kitaplık</h1>
                    </div>
                  
                </div>
        
                <form class="hero-form form" action="aramasonuc.php" id="form2" name="form2" method="POST">
                    <div class="container">
                      
                        <div class="main-search-form">
                            <div class="form-row">
                                
                                <div class="col-md-9 col-sm-9">
                                    <div class="form-group">
                                        <label for="what" class="col-form-label">Hangi Kitabı Aramıştınız?</label>

                                        <input name="aranan" type="text" class="form-control" id="aranan" placeholder="Aradığınız Kelimeyi Giriniz">

                                    </div>
                                </div>
                              <div class="col-md-3 col-sm-3">
                                    <button type="submit" class="btn btn-primary width-100">Ara</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </form>    
               
               
                <div class="background"></div>
                
            </div>
            
        </header>
       

        <section class="content">
            <section class="block">
                <div class="container">
                    <!--==================Katagoriler==========================================-->
                    <div class="section-title clearfix">
                        <div class="float-left float-xs-none">
                            <label class="mr-3 align-text-bottom">Kategoriler</label>
                            <select name="sorting" id="sorting" class="small width-200px" data-placeholder="Default Sorting" >
                                <option value="">Seçiniz</option>
                                <option value="1">Roman</option>
                                <option value="2">Söylev</option>
                                <option value="3">Tiyatro</option>
                                <option value="4">Hikaye</option>
                                <option value="5">Şiir</option>
                                <option value="6">Deneme</option>
                                <option value="7">Gezi</option>
                                <option value="8">Anı</option>
                                <option value="9">Biyografi</option>
                                <option value="10">Fıkra</option>
                                <option value="11">Masal</option>
                                <option value="12">Dunya Edebiyatı</option>
                            </select>

                        </div>
                        <div class="float-right d-xs-none thumbnail-toggle">
                            <a href="#" class="change-class active" data-change-from-class="list" data-change-to-class="grid" data-parent-class="items">
                                <i class="fa fa-th"></i>
                            </a>
                            <a href="#" class="change-class" data-change-from-class="grid" data-change-to-class="list" data-parent-class="items">
                                <i class="fa fa-th-list"></i>
                            </a>
                        </div>
                    </div>
                    
                     <!--==================Kitapların geleceği alan ==========================================-->

            
    
                        
                                     
                    <div class="items grid grid-xl-4-items grid-lg-4-items grid-md-4-items">
                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="assets/img/mutluprens.jpg"  alt="">
                                    </a>
                                </div>
                                <!--Resim sonu-->
                                <div class="price"><?php echo $arr[1];      ?></div>
                                <div class="meta">
                                        <a href="#">
                                            <i class="fa fa-user"></i> <?php echo $arr[2];      ?>
                                        </a>
                                </div>
                                <!--Meta sonu-->
                                <div class="description">
                                    <p><?php echo $arr[4]; ?>&nbsp;&nbsp;<?php echo $arr[3]; ?></p>
                                </div>
                               
                                <a href="single-listing-1.html" class="detail text-caps underline">Detay</a>
                            </div>
                        </div>
                        
                         <!--Nesne sonu-->
                        
                    </div>
                        
     
                           
                        
                    </div>
                    <div class="page-pagination">
                        <nav aria-label="Pagination">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <i class="fa fa-chevron-left"></i>
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">
                                            <i class="fa fa-chevron-right"></i>
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                   
                </div>
                
            </section>
           
        </section>
<footer class="footer">
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <a href="#" class="brand">
                                <img src="assets/img/logo.jpg"width="250" height="100" alt="">
                            </a>
                            <p>
                               Aradığın kitabı burada bulamazsan daha çıkmamıştır.
                            </p>
                        </div>
                       
                        <div class="col-md-3">
                            <h2>Menü</h2>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <nav>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">Anasayfa</a>
                                            </li>
                                            <li>
                                                <a href="#">Kitaplar</a>
                                            </li>
                                            <li>
                                                <a href="#">İletişim</a>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                                
                            </div>
                        </div>
                      
                        <div class="col-md-4">
                            <h2>İletişim</h2>
                            <address>
                                <figure>
                                    Pelitözü Mah. Fatih Sultan Mehmet Bulvarı<br>No:27 11230 Merkez/BİLECİK
                                </figure>
                                <br>
                                <strong>Email:</strong> <a href="#">genelsekreterlik@bilecik.edu.tr</a>
                                <br>
                                <strong>Skype: </strong> kitaplık
                                <br>
                                <br>
                                <a href="iletisim.html" class="btn btn-primary text-caps btn-framed">İLETİŞİME GEÇİN</a>
                            </address>
                        </div>
                      
                    </div>
                  
                </div>
                <div class="background">
                    <div class="background-image original-size">
                        <img src="assets/img/footer-background-icons.jpg" alt="">
                    </div>
                  
                </div>
               
            </div>
        </footer>
      
    </div>

	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>   
	<script src="assets/js/selectize.min.js"></script>
	<script src="assets/js/icheck.min.js"></script>
	<script src="assets/js/custom.js"></script>

</body>
</html>