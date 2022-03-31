<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets\plugins\bootstrapv5\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome5.14.0\css\fontawesome.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome5.14.0\css\font-awesome-animation.min.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome5.14.0\css\all.css">
    <link rel="stylesheet"  href="assets\academy\css\academy.css">
    <link rel="shortcut icon" type="image/png" href="assets\academy\img\academy.png">
   


    <title>ACADEMY</title>



  </head>
  <body>
    <div id="wrap" class="sidebar-active">
        <div class="sidebar">
            <div class="sidebar-header">
                <a href="index.php"><strong>A</strong>CADEMY</a>
                <i class="fas fa-university"></i>
            </div>
            <div class="sidebar-nav">
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="mevzuat.php">Mevzuat</a>
                      <i class="fas fa-book-open"></i>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="arsiv.php">Arşiv</a>
                      <i class="fas fa-archive"></i>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="destek.php">Destek ve Yardım</a>
                      <i class="fas fa-question"></i>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gizlilikpolitikası.php">Gizlilik Politikası</a>
                        <i class="fas fa-key"></i>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="amobile.php">Academy Mobile</a>
                        <i class="fas fa-mobile-alt"></i>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="socialmedia.php">Sosyal Medya</a>
                        <i class="fas fa-hashtag"></i>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="qrcode.php">QR Code Reader</a>
                        <i class="fas fa-qrcode"></i>
                    </li>
                   
                  </ul>
            </div> <!-- sidebar-nav end -->

            <div class="sidebar-footer">
                 
                <span> &copy; 2021 Tüm Hakları Saklıdır.</span>
                
            </div>
        </div> <!-- sidebar end -->
        <div class="header">
            <div class="float-left">
                <div class="menu-link-wrapper">
                    <div class="menu-link menu-trigger-open">
                        <span class="lines"></span>
                    </div>
                </div>
                <div class="resmi-gazete float-left"><a href="https://www.resmigazete.gov.tr/"data-bs-toggle="tooltip" data-bs-placement="right" title="Resmi Gazete"><i class="fas fa-newspaper"></i></a></div>
                <div class="full-screen full-screen-open float-left"><a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Full Screen"><i class="fas fa-expand"></i></a></div>
                <div class="full-screen full-screen-close float-left"><a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Normal Screen"><i class="fas fa-compress-arrows-alt"></i></a></div>

            </div> <!-- floatleft end -->
            

            <div class="float-right rightmenu">
            
                <div class="dropdown lang-dropdown menus">
                    <button class="btn butonlang dropdown-toggle togb" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-grin-tongue"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <h6 class="dropdown-header">Diller</h6>
                        <li><a class="dropdown-item active" href="#"><img src="assets/academy/img/turkey.png" alt="Türkçe"></a></li>
                        <li><a class="dropdown-item" href="#"><img src="assets/academy/img/uk.png" alt="İngilizce"></a></li>
                        <li><a class="dropdown-item" href="#"><img src="assets/academy/img/italy.jpg" alt="İtalyanca"></a></li>
                    </ul>
                </div>
                
            </div>   <!-- floatright end -->
            <div class="float-end signup">
                <div class="btn-group">
                    <a href="login.php" class="btn login">Giriş Yap</a>
                    <a href="uye.php" class="btn signin">Üye Ol</a>
                </div>
            </div>
            
        </div>  <!-- header end -->


        

        <div class="content">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Academy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Arşiv</li>
                </ol>
            </nav>

            <div class="container-fluid p-4">
                
                    <div class="card portlet portlet-scroll" id="portlet1">
                        <div class="card-header baslik">
                            <strong name="baslik">Kütahya Sağlık Bilimleri Üniversitesi</strong>
                            <form action="profil.php" method="post"enctype="multipart/form-data">
                                <div class="btn-group btn-group-sm float-end" role="group" aria-label="Basic example">
                                    <a href="profil.php" class="btn apply"><button type="button" class="btn basvur" value="basvur">Başvur</button></a>
                                    <button type="button" class="btn heart-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Kalple">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button type="button"  class="btn fullscreen-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Full Screen">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                    <button type="button" class="btn exit-portlet"  data-bs-toggle="tooltip" data-bs-placement="top" title="Normal Screen">
                                        <i class="fas fa-compress-arrows-alt"></i>
                                    </button>
                                    <button type="button"  class="btn collapse-portlet" data-bs-toggle="collapse"  aria-expanded="true">
                                        <i class="fas fa-angle-double-down"></i>
                                    </button>
                                
                                </div>
                            </form>
                        
                        </div>
                        <div class="collapse show" >
                            <div class="card-body">
                                <h5 class="card-title altbaslik"> Öğretim Üyesi Alım İlanı
                                    <br><br>
                                    <p class="date">17 Mayıs 2021</p>
                                </h5>
                                <p class="card-text necessity">
                                    Kütahya Sağlık Bilimleri Üniversitesi, son başvuru tarihi 31 mayıs 2021, Mühendislik ve Doğa Bilimleri Fakültesi, Kimya bölümü lisans mezunu olup, Tıbbi Biyokimya alanında doktora yapmış olmak. Belgelendirmek şartıyla Yükseköğretim Kurumlarında ders verme tecrübesine sahip Öğretim Üyesi 4 akademik personel alacak.
                                </p>
                                <p class="card-text icerik">
                                    Kütahya Sağlık Bilimleri Üniversitesi Rektörlüğünden:
                                    02 Kasım 2018 tarihli ve 30583 sayılı Resmi Gazete'de yayımlanan "Devlet Yükseköğretim Kuramlarında Öğretim Elemanı Norm Kadrolarının Belirlenmesine ve Kullanılmasına İlişkin Yönetmelik" kapsamında Üniversitemizin aşağıda belirtilen birimlerine 2547 sayılı Yükseköğretim Kanunu, Öğretim Üyeliğine Yükseltilme ve Atanma Yönetmeliği ve Kütahya Sağlık Bilimleri Üniversitesi Öğretim Üyeliğine Yükseltilme ve Atanma Yönergesi (İlkeler ve Kriterler) uyarınca öğretim üyeleri alınacaktır.
                                    <br><br>
                                    - İlanda belirtilen kadrolara müracaat eden adayların 657 sayılı Devlet Memurları Kanunu'nun 48 inci maddesinde yer alan şartları taşıyor olması gerekmektedir.
                                    - Öğretim üyesi kadrolarına müracaat edecek adaylar, başvuru formlarına ve ayrıntılı bilgilere https://ksbu.edu.tr/ adresindeki duyurular kısmından ulaşabilir.- Adaylar, ilanın Resmi Gazete'de yayımlandığı tarihten itibaren 15 (on beş) gün içerisinde Üniversitemiz Personel Daire Başkanlığı'na şahsen veya posta yolu ile başvuruda bulunacaklardır.
                                </p>
                            </div>
                        </div>
                    </div> <!-- portlet end -->




                    <div class="card portlet portlet-scroll" id="portlet1">
                        <div class="card-header baslik">
                            <strong name="baslik">Muğla Sıtkı Koçman Üniversitesi</strong>
                            <form action="profil.php" method="post"enctype="multipart/form-data">
                                <div class="btn-group btn-group-sm float-end" role="group" aria-label="Basic example">
                                    <a href="profil.php" class="btn apply"><button type="button" class="btn basvur" value="basvur">Başvur</button></a>
                                    <button type="button" class="btn heart-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Kalple">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button type="button"  class="btn fullscreen-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Full Screen">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                    <button type="button" class="btn exit-portlet"  data-bs-toggle="tooltip" data-bs-placement="top" title="Normal Screen">
                                        <i class="fas fa-compress-arrows-alt"></i>
                                    </button>
                                    <button type="button"  class="btn collapse-portlet" data-bs-toggle="collapse"  aria-expanded="true">
                                        <i class="fas fa-angle-double-down"></i>
                                    </button>
                                
                                </div>
                            </form>
                            
                        </div>
                        <div class="collapse show" >
                            <div class="card-body">
                                <h5 class="card-title altbaslik"> Öğretim Üyesi Alım İlanı
                                    <br><br>
                                    <p class="date">11 Mayıs 2021</p>
                                </h5>
                                <p class="card-text necessity">
                                    Muğla Sıtkı Koçman Üniversitesi, son başvuru tarihi 31 mayıs 2021, Diş Hekimliği Fakültesi, Eğitim Fakültesi, Doçentliğini Eğitim Bilimleri (Eğitim Yönetimi) alanında almış olmak. Okullarda değişim yönetimi uygulamaları ve öğretmenlerin tutumları hakkında çalışmaları olan Öğretim Üyesi 51 akademik personel alacak.
                                </p>
                                <p class="card-text icerik">
                                    Muğla Sıtkı Koçman Üniversitesi Rektörlüğünden:
                                    Üniversitemizin aşağıda belirtilen boş kadrolarına 2547 sayılı Kanun, Öğretim Üyeliğine Yükseltilme ve Atanma Yönetmeliği ile Muğla Sıtkı Koçman Üniversitesi Öğretim Üyeliği Kadrolarına Başvurma Atama ve Yükseltilme Yönergesi (bakınız: www.personel.mu.edu.tr) hükümleri doğrultusunda öğretim üyesi alınacaktır.
                                    <br><br>
                                    a) Profesör kadrosu daimi statüde olup, başvuracak adayların www.personel.mu.edu.tr adresinde yer alan Öğretim Üyesi Başvuru Dilekçe Örneğine (imzalı), özgeçmiş, Doçentlik belgesi, hizmet belgesi, yukarıdaki internet adresinde yer alan Yönergedeki başvuru formu ile birlikte yayın listesi, bilimsel çalışma ve yayınlarını kapsayan 6 (altı) adet (Profesörlük takdim çalışmasının da belirtildiği) PDF formatında hazırlanmış olan taşınabilir bellek ekleyerek ve 1 (bir) adet basılı yayın dosyası ile birlikte Rektörlük Personel Daire Başkanlığına müracaat etmeleri gerekmektedir.
                                    <br>
                                    b) Doçent kadrosuna başvuracak adaylar; www.personel.mu.edu.tr adresinde yer alan Öğretim Üyesi Başvuru Dilekçe Örneğine (imzalı), Doçentlik belgesini, özgeçmişini, yayın listesini, yabancı dil sonuç belgesini (Muğla Sıtkı Koçman Üniversitesi Öğretim Üyeliği Kadrolarına Başvurma Atama ve Yükseltilme Yönergesi'nin 5.maddesi ), bilimsel çalışma ve yayınlarını kapsayan, hizmet belgesini içeren 4 (dört) adet PDF formatında hazırlanmış olan taşınabilir bellek ekleyerek ve 1 (bir) adet basılı yayın dosyası ile birlikte Rektörlük Personel Dairesi Başkanlığına müracaat etmeleri gerekmektedir.Doçentlik Eser İncelemesinden geçerek Doçentlik ünvanı almış ancak sözlü sınava girmemiş adayların; sözlü sınavları ilan başvuru süresi tamamlandıktan sonra Üniversitelerarası Kurul (ÜAK) tarafından belirlenecek jüriler tarafından yapılacaktır. (Muğla Sıtkı Koçman Üniversitesi Öğretim Üyeliği Kadrolarına Başvurma Atama ve Yükseltilme Yönergesi'nin 5.maddesi )
                                    <br>
                                    c) Doktor Öğretim Üyesi kadrolarına başvuracak adaylar; www.personel.mu.edu.tr adresinde yer alan Öğretim Üyesi Başvuru Dilekçe Örneğine (imzalı), özgeçmiş, doktora mezuniyet belgesi, hizmet belgesi, yabancı dil sonuç belgesi (Muğla Sıtkı Koçman Üniversitesi Öğretim Üyeliği Kadrolarına Başvurma Atama ve Yükseltilme Yönergesi'nin 5.maddesi ), Fotoğraf (2 adet) ve yukarıdaki internet adresinde yer alan Yönergedeki başvuru formu ile birlikte yayın listesi, bilimsel çalışma ve yayınlarını kapsayan 4 (dört) adet PDF formatında hazırlanmış olan taşınabilir bellek ekleyerek ve 1 (bir) adet basılı yayın dosyası ile birlikte ilgili birimlere müracaat etmeleri gerekmektedir. 6 ay ve daha fazla Devlet Hizmeti Yükümlülüğü bulunanlar Tıp Fakültesi Doktor Öğretim Üyesi kadrolarına başvuramazlar, adayların Devlet Hizmet Yükümlüsü olmadıklarım ya da 6 aydan daha az yükümlülükleri kaldığını belgelendirmeleri zorunludur.
                                    <br>
                                    AÇIKLAMALAR:
                                    1) Bütün adayların Devlet hizmetine girmede aranan niteliklere sahip olmaları gerekmektedir.
                                    2) Müracaatlar ilanın yayımlandığı tarihten itibaren en az 15 gün içinde yapılacak olup, postadaki gecikmeler kabul edilmeyecektir.
                                    3) Yabancı ülkelerden alınan diplomaların Üniversitelerarası Kurul Başkanlığı tarafından denkliğinin onaylanmış olması şarttır.
                                    4) Doktor Öğretim Üyesi kadrolarına doçent unvanını almış olanlar ile Profesörler müracaat edemezler.
                                    5) Hizmet Belgesi Üniversitemiz dışından müracaat edecekler için istenmektedir.
                                    6) (*)Adayların "Yükseköğretim Kuramlarında Yabancı Dil Öğretimi ve Yabancı Dille Öğretim Yapılmasında Uyulacak Esaslara İlişkin Yönetmelik"in ilgili maddelerinde belirtilen yabancı dil şartını yerine getirmesi gerekmektedir.
                                    7) İdare uygun gördüğü taktirde ilanın her aşaması iptal edilebilir.
                                </p>
                            </div>
                        </div>
                    </div> <!-- portlet end -->




                    <div class="card portlet portlet-scroll" id="portlet1">
                        <div class="card-header baslik">
                            <strong name="baslik">Van Yüzüncü Yıl Üniversitesi</strong>
                            <form action="profil.php" method="post"enctype="multipart/form-data">
                                <div class="btn-group btn-group-sm float-end" role="group" aria-label="Basic example">
                                    <a href="profil.php" class="btn apply"><button type="button" class="btn basvur" value="basvur">Başvur</button></a>
                                    <button type="button" class="btn heart-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Kalple">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button type="button"  class="btn fullscreen-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Full Screen">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                    <button type="button" class="btn exit-portlet"  data-bs-toggle="tooltip" data-bs-placement="top" title="Normal Screen">
                                        <i class="fas fa-compress-arrows-alt"></i>
                                    </button>
                                    <button type="button"  class="btn collapse-portlet" data-bs-toggle="collapse"  aria-expanded="true">
                                        <i class="fas fa-angle-double-down"></i>
                                    </button>
                                
                                </div>
                            </form>
                            
                        </div>
                        <div class="collapse show" >
                            <div class="card-body">
                                <h5 class="card-title altbaslik">Öğretim Üyesi Alım İlanı
                                    <br><br>
                                    <p class="date">11 Mayıs 2021</p>
                                </h5>
                                <p class="card-text necessity">
                                    Van Yüzüncü Yıl Üniversitesi, son başvuru tarihi 31 mayıs 2021, Matematik ve Fen Bilimleri Eğitimi (Matematik Eğitimi) veya Matematik alanlarının birinde Doçentlik unvanı almış  Profesör, Doçent, Doktor, Öğretim Üyesi Alım 45 Akademik personel alacak.
                                </p>
                                <p class="card-text icerik">
                                Van Yüzüncü Yıl Üniversitesi Rektörlüğünden:
                                    ÖĞRETİM ÜYESİ ALIM İLANI
                                    Üniversitemize 2547 sayılı Yükseköğretim Kanunu'nun ilgili maddeleri gereğince aşağıda unvanı ve nitelikleri belirtilen kadrolara Öğretim üyesi alınacaktır. İlgililerin;
                                    <br><br>
                                    a) 657 sayılı Kanun'un 48. maddesinde belirtilen şartları taşımaları,
                                    b) 2547 sayılı Kanun'un 5772 sayılı Kanun'la değiştirilen 23, 24 ve 26. maddelerinde belirlenen asgari koşulları sağlamış olmaları,
                                    c) Yabancı Ülkelerden alınan Diplomaların Üniversitelerarası Kurulca Denkliğinin onaylanmış olması ve belgelendirilmesi gerekmektedir.
                                    <br><br>
                                    Yukarıda belirtilen şartları taşıyan adayların;
                                    1) Profesör kadroları daimi statüde olup, başvuracak adayların başvuracakları Anabilim Dalını belirtir dilekçe, özgeçmiş, hizmet belgesi ve yabancı dil sınav sonuç belgesi, fotoğraf, kimlik fotokopisi, lisans, yüksek lisans, doktora veya uzmanlık diplomaları ile doçentlik belgesi, erkek adaylar için askerlik durum belgesi, adli sicil belgesi, bilimsel eser, çalışma ve yayınlarını 6 (altı) adet USB Bellek ortamına aktarıp Rektörlüğe,
                                    <br>
                                    2) Doçent kadroları daimi statüde olup, başvuracak adayların başvuracakları Anabilim Dalını belirtir dilekçe, özgeçmiş, hizmet belgesi ve yabancı dil sınav sonuç belgesi, fotoğraf, kimlik fotokopisi, lisans, yüksek lisans, doktora veya uzmanlık diplomaları ile doçentlik belgesi, erkek adaylar için askerlik durum belgesi, adli sicil belgesi, bilimsel eser, çalışma ve yayınlarını 4 (dört) adet USB Bellek ortamına aktarıp Rektörlüğe,
                                    <br>
                                    3) Doktor Öğretim Üyesi kadroları için, başvuracak adayların başvuracakları Anabilim Dalını belirtir dilekçe, özgeçmiş, hizmet belgesi ve yabancı dil sınav sonuç belgesi, fotoğraf, kimlik fotokopisi, lisans, yüksek lisans, doktora veya uzmanlık diplomaları ile erkek adaylar için askerlik durum belgesi, adli sicil belgesi, bilimsel eser, çalışma ve yayınlarını 4 (dört) adet USB Bellek ortamına aktarıp ilgili birimlere başvurmaları gerekmekledir.
                                    <br>
                                    4) Müracaat edecek adayların "Van Yüzüncü Yıl Üniversitesi Öğretim Üyeliğine Yükseltilme ve Atanma Ölçütleri Yönergesi"nde belirlenen koşulları yerine getirmeleri gerekmektedir. Söz konusu yönergeye (https://www.yyu.edu.tr/Birimler/555/sayfalar/2112) adresinden ulaşılabilir.
                                    <br>
                                    5) Herhangi bir kamu kuruluşunda çalışanların (daha önce çalışıp ayrılsalar dahi), çalıştığı kurumdan veya e-Devlet üzerinden alacakları "hizmet belgesini" müracaatlarına eklemeleri gerekmektedir.
                                    <br>
                                    6) Adaylar ilan edilen kadrolardan ancak birine başvurabilirler. Birden fazla kadroya başvuruda bulunan adayların başvuruları geçersiz sayılacaktır.
                                    <br>
                                    7) Başvurular şahsen yapılacaktır. Posta ile yapılacak başvurular kabul edilmeyecektir.
                                    <br>
                                    8) BAŞVURU TARİHLERİ
                                    <br><br>
                                    İLK BAŞVURU TARİHİ : 17.05.2021
                                    SON BAŞVURU TARİHİ : 31.05.2021
                                </p>
                            </div>
                        </div>
                    </div> <!-- portlet end -->




                    <div class="card portlet portlet-scroll" id="portlet1">
                        <div class="card-header baslik">
                            <strong name="baslik">Kırklareli Üniversitesi</strong>
                            <form action="profil.php" method="post"enctype="multipart/form-data">
                                <div class="btn-group btn-group-sm float-end" role="group" aria-label="Basic example">
                                    <a href="profil.php" class="btn apply"><button type="button" class="btn basvur" value="basvur">Başvur</button></a>
                                    <button type="button" class="btn heart-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Kalple">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button type="button"  class="btn fullscreen-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Full Screen">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                    <button type="button" class="btn exit-portlet"  data-bs-toggle="tooltip" data-bs-placement="top" title="Normal Screen">
                                        <i class="fas fa-compress-arrows-alt"></i>
                                    </button>
                                    <button type="button"  class="btn collapse-portlet" data-bs-toggle="collapse"  aria-expanded="true">
                                        <i class="fas fa-angle-double-down"></i>
                                    </button>
                                
                                </div>
                            </form>
                            
                        </div>
                        <div class="collapse show" >
                            <div class="card-body">
                                <h5 class="card-title altbaslik">Öğretim Üyesi Alım İlanı
                                    <br><br>
                                    <p class="date">10 Mayıs 2021</p>
                                </h5>
                                <p class="card-text necessity">
                                    Kırklareli Üniversitesi, son başvuru tarihi 25 mayıs 2021, Fen Edebiyat Fakültesi, Sağlık Yüksekokulu, İktisadi ve İdari Bilimler Fakültesi, Doçentlik unvanını Uluslararası İlişkiler Bilim alanında almış olmak. Türk dış politikası ve enerji güvenliği konularında çalışmalar yapmış Profesör, Doçent, Doktor, Öğretim Üyesi 26 akademik personel alacak.
                                </p>
                                <p class="card-text icerik">
                                                                
                                    Kırklareli Üniversitesi Rektörlüğünden:
                                    <br><br>
                                    Üniversitemiz birimlerinde açık bulunan ve aşağıda bölümleri/anabilim dalları ile unvan ve koşulları belirtilen kadrolara 2547 sayılı Kanun'un ilgili maddeleri ile 657 sayılı Devlet Memurları Kanunu'nun 48. maddesi, Devlet Yükseköğretim Kuramlarında Öğretim Elemanı Norm Kadrolarının Belirlenmesine ve Kullanılmasına İlişkin Yönetmelik, Öğretim Üyeliğine Yükseltilme ve Atanma Yönetmeliği ve Üniversitemiz Öğretim Üyeliğine Yükseltilme ve Atanma Kriterlerine göre öğretim üyesi alınacaktır.
                                    <br>
                                    Başvurular profesör ve doçent kadroları için Rektörlüğümüz Personel Daire Başkanlığına; doktor öğretim üyesi kadroları için ise ilgili Birimlere şahsen veya posta yolu ile yapılacaktır. (Postadaki gecikmelerden dolayı sorumluluk kabul edilmeyecek olup, son başvuru tarihinden sonra gelen başvurular dikkate alınmayacaktır.)
                                    <br>
                                    İlan yayımlandığı tarih itibariyle 15 gün geçerli olup; tüm bilgiler aşağıda yer almaktadır.Yabancı ülkelerden alınan diplomaların denkliğinin Yükseköğretim Kurulunca ve/veya Üniversitelerarası Kurulca onaylanmış olması gereklidir.
                                    Profesör kadrosu başvurusunda istenen evraklar (Öğretim Üyesi İlan Başvuru Formu ve Aday Etkinlik Puan Tablosu hariç aşağıda istenen tüm evraklar 6 takım CD/USB Bellek halinde hazırlanacaktır.)
                                    <br><br>
                                    1. Üniversitemiz Personel Daire Başkanlığının internet sitesindeki Dokümantasyon/Formlar/Akademik Personel Şb. Md. Formlar/Akademik İlanlarla İlgili Formlar menüsünde yer alan Öğretim Üyesi İlan Başvuru Formu,
                                    2. Nüfus cüzdanı/T.C. kimlik kartı fotokopisi,
                                    3. Lisans, yüksek lisans ve doktora diplomalarının e-Devlet çıktıları,
                                    4. Doçentlik belgesi fotokopisi,
                                    5. Askerlik durum belgesi veya terhis belgesi veya e-Devlet çıktısı,
                                    6. Özgeçmiş ve yayın listesi (Başlıca araştırma eseri belirtilecek),
                                    7. Yayınlar,
                                    8. Bir (1) adet fotoğraf (Başvuru formuna yapıştırılması zorunludur),
                                    9. Üniversitemiz Öğretim Üyeliğine Yükseltilme ve Atanma Kriterleri gereği "Aday 
                                    Etkinlik-Puanlama Tablosu" nun doldurulması gerekmektedir.
                                    10. Varsa kamu hizmetini gösterir hizmet belgesi aslı veya e-Devlet HİTAP Hizmet Dökümü çıktısı (Varsa mecburi hizmeti gösterir).
                                    <br><br>
                                    Doçent kadrosu başvurusunda istenen evraklar (Öğretim Üyesi İlan Başvuru Formu hariç aşağıda istenen tüm evraklar 4 takım CD /USB Bellek halinde hazırlanacaktır.)
                                    <br><br>
                                    1. Üniversitemiz Personel Daire Başkanlığının internet sitesindeki Dokümantasyon/Formlar/Akademik Personel Şb. Md. Formlar/Akademik İlanlarla İlgili Formlar menüsünde yer alan Öğretim Üyesi İlan Başvuru Formu,
                                    2. Nüfus cüzdanı/T.C. kimlik kartı fotokopisi,
                                    3. Lisans, yüksek lisans ve doktora diplomalarının fotokopileri veya e-Devlet çıktıları,
                                    4. Doçentlik belgesi fotokopisi,
                                    5. Askerlik durum belgesi fotokopisi veya terhis belgesi fotokopisi veya e-Devlet çıktısı,
                                    6. Özgeçmiş ve yayın listesi,
                                    7. Yayınlar,
                                    8. Bir (1) adet fotoğraf (Başvuru formuna yapıştırılması zorunludur),
                                    9. Varsa kamu hizmetini gösterir hizmet belgesi aslı veya e-Devlet HİTAP Hizmet Dökümü çıktısı (Varsa mecburi hizmeti gösterir).
                                    <br><br>
                                    Doktor Öğretim Üyesi kadrosu başvurusunda istenen evraklar (Öğretim Üyesi İlan Başvuru Formu ve Aday Etkinlik Puan Tablosu hariç aşağıda istenen tüm evraklar 4 takım CD/USB Bellek halinde hazırlanacaktır.)
                                    <br><br>
                                    1. Üniversitemiz Personel Daire Başkanlığının internet sitesindeki Dokümantasyon/Formlar/Akademik Personel Şb. Md. Formlar/Akademik İlanlarla İlgili Formlar menüsünde yer alan Öğretim Üyesi İlan Başvuru Formu,
                                    2. Nüfus cüzdanı/T.C. kimlik kartı fotokopisi,
                                    3. Lisans, yüksek lisans ve doktora diplomalarının fotokopileri veya e-Devlet çıktıları,
                                    4. Yabancı dil belgesi,
                                    5. Askerlik durum belgesi fotokopisi veya terhis belgesi fotokopisi veya e-Devlet çıktısı,
                                    6. Özgeçmiş ve yayın listesi,
                                    7. Yayınlar,
                                    8. Bir (1) adet fotoğraf (Başvuru formuna yapıştırılması zorunludur),
                                    9. Üniversitemiz Öğretim Üyeliğine Yükseltilme ve Atanma Kriterleri gereği "Aday Etkinlik-Puanlama Tablosu"nun doldurulması gerekmektedir.
                                    10. Varsa kamu hizmetini gösterir hizmet belgesi aslı veya e-devlet HİTAP Hizmet Dökümü çıktısı (Varsa mecburi hizmeti gösterir).
                                    *Adayların başvurdukları ilanın niteliklerinde belirtilen şartları sağladığını gösteren belgeleri sunmaları gerekmektedir.
                                </p>
                            </div>
                        </div>
                    </div> <!-- portlet end -->



                    <div class="card portlet portlet-scroll" id="portlet1">
                        <div class="card-header baslik">
                            <strong name="baslik">Sakarya Üniversitesi</strong>
                            <form action="profil.php" method="post"enctype="multipart/form-data">
                                <div class="btn-group btn-group-sm float-end" role="group" aria-label="Basic example">
                                    <a href="profil.php" class="btn apply"><button type="button" class="btn basvur" value="basvur">Başvur</button></a>
                                    <button type="button" class="btn heart-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Kalple">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button type="button"  class="btn fullscreen-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Full Screen">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                    <button type="button" class="btn exit-portlet"  data-bs-toggle="tooltip" data-bs-placement="top" title="Normal Screen">
                                        <i class="fas fa-compress-arrows-alt"></i>
                                    </button>
                                    <button type="button"  class="btn collapse-portlet" data-bs-toggle="collapse"  aria-expanded="true">
                                        <i class="fas fa-angle-double-down"></i>
                                    </button>
                                
                                </div>
                            </form>
                        
                        </div>
                        <div class="collapse show" >
                            <div class="card-body">
                                <h5 class="card-title altbaslik"> Öğretim Üyesi Alım İlanı 
                                    <br><br>
                                    <p class="date">10 Mayıs 2021</p>
                                </h5>
                                <p class="card-text necessity">
                                    Sakarya Üniversitesi, son başvuru tarihi 24 mayıs 2021, Tıp Fakültesi, Kardiyak elektrofizyoloji ve aritmilerin kateter ablasyonu konusunda deneyimli Profesör, Doçent, Doktor, Öğretim Üyesi 25 akademik personel alacak.
                                </p>
                                <p class="card-text icerik">
                                    Sakarya Üniversitesi Rektörlüğünden:
                                    <br><br>
                                    DÜZELTME İLANI
                                    Üniversitemizin akademik birimlerinde ihtiyaç duyulan öğretim üyesi alımı ile ilgili olarak hazırlanan ilan metni, 10.05.2021 tarihli ve 31480 sayılı Resmi Gazete'de aslına uygun olarak yayımlanmış olup, 2 nci maddesinde yer alan "Üniversitemiz Senato Kararına istinaden; doçentlik kadrolarına başvuranlardan, doçentlik unvanını Üniversitelerarası Kurulca sözlü sınava tabi tutulmadan almış olan adaylar, müracaat ettikleri doçent kadroları için Üniversitelerarası Kurulca oluşturulacak jüri üyelerince sözlü sınava tabi tutulacaklardır. Bu sınavdan başarılı olamayan adayların atamaları yapılmayacaktır." ifadesi sehven yer almış olup ilan metninden çıkarılmıştır.
                                    <br><br>
                                    İlgililere duyurulur.4269/1-1
                                    <br>
                                    Sakarya Üniversitesi Rektörlüğünden:
                                    <br>
                                    2547 sayılı Kanun ve Öğretim Üyeliğine Yükseltilme ve Atanma Yönetmeliği'nin ilgili maddelerine göre Üniversitemiz'e Öğretim Üyesi alınacaktır.
                                    <br>
                                    1- Profesör kadrosu için adayların başvuru formuna (http://www.ilan.sakarya.edu.tr/ adresinden ulaşılabilir) fotoğraflı özgeçmişini, nüfus cüzdan suretini, Doçentlik Belgesini, Sakarya Üniversitesi Öğretim Üyeliğine Yükseltilme ve Atanma Ölçütleri çerçevesinde yayın listesini, bilimsel yayınlarını, kongre ve konferans tebliğleri ile bunlara yapılan atıfları, eğitim-öğretim faaliyetlerini, yönetimlerinde devam eden ve biten doktora çalışmalarını veya yüksek lisans çalışmalarını kapsayan dosyasını https://akb.sabis.sakarya.edu.tr adresinden giriş yaparak pdf veya zip biçiminde yükleyip on-line başvuru yapmaları gerekmektedir.
                                    2- Doçent kadrosu için adayların başvuru formuna (http://www.ilan.sakarya.edu.tr/ adresinden ulaşılabilir) fotoğraflı özgeçmişini, nüfus cüzdan suretini, öğrenim belgelerini, Sakarya Üniversitesi Öğretim Üyeliğine Yükseltilme ve Atanma Ölçütleri çerçevesinde yayın listesini, bilimsel çalışma ve yayınlarını kapsayan dosyalarını https://akb.sabis.sakarya.edu.tr adresinden giriş yaparak pdf veya zip biçiminde yükleyip on-line başvuru yapmaları gerekmektedir. Üniversitemiz Senato Kararına istinaden; doçentlik kadrolarına başvuranlardan, doçentlik unvanını Üniversitelerarası Kurulca sözlü sınava tabi tutulmadan almış olan adaylar, müracaat ettikleri doçent kadroları için Üniversitelerarası Kurulca oluşturulacak jüri üyelerince sözlü sınava tabi tutulacaklardır. Bu sınavdan başarılı olamayan adayların atamaları yapılmayacaktır.
                                    3- Doktor Öğretim Üyesi kadrosu için adayların, başvuru formuna (http://www.ilan.sakarya.edu.tr/ adresinden ulaşılabilir) fotoğraflı özgeçmişini, nüfus cüzdan suretini, öğrenim belgelerini, yabancı dil belgesini, Sakarya Üniversitesi Öğretim Üyeliğine Yükseltilme ve Atanma Ölçütleri çerçevesinde yayın listesini, bilimsel çalışma ve yayınlarını kapsayan dosyalarını https://akb.sabis.sakarya.edu.tr adresinden giriş yaparak pdf veya zip biçiminde yükleyip on-line başvuru yapmaları gerekmektedir.
                                    4- Doçent unvanı almış bulunanlar Doktor Öğretim Üyesi kadrolarına başvuru yapamazlar.
                                    5- Yurtdışından alınan diploma var ise, Yükseköğretim Kurulu Başkanlığınca verilen Denklik Belgesi ile birlikte yüklenmesi gerekmektedir.
                                    6- Sakarya Üniversitesi Akademik Yükseltilme ve Atanma Ölçütlerine http://www.ilan.sakarya.edu.tr adresinden ulaşılabilir.
                                    7- Başvurular on-line olarak "https://akb.sabis.sakarya.edu.tr" web sayfası üzerinden alınacaktır. Kişisel beyana dayalı olarak sisteme yüklenen belgelerin aslı kurumumuz tarafından istenildiğinde sunamayanların başvuruları geçersiz sayılacaktır.
                                    8- Son başvuru tarihi ilanın Resmi Gazete'de yayımlandığı tarihten itibaren 15 (onbeş) gündür. Başvuru süresi içinde yapılmayan başvurular ile eksik ya da yanlış yapılan başvurular kabul edilmeyecektir.
                                </p>
                            </div>
                        </div>
                    </div> <!-- portlet end -->




                    <div class="card portlet portlet-scroll" id="portlet1">
                        <div class="card-header baslik">
                            <strong name="baslik">Karadeniz Teknik Üniversitesi</strong>
                            <form action="profil.php" method="post"enctype="multipart/form-data">
                                <div class="btn-group btn-group-sm float-end" role="group" aria-label="Basic example">
                                    <a href="profil.php" class="btn apply"><button type="button" class="btn basvur" value="basvur">Başvur</button></a>
                                    <button type="button" class="btn heart-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Kalple">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button type="button"  class="btn fullscreen-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Full Screen">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                    <button type="button" class="btn exit-portlet"  data-bs-toggle="tooltip" data-bs-placement="top" title="Normal Screen">
                                        <i class="fas fa-compress-arrows-alt"></i>
                                    </button>
                                    <button type="button"  class="btn collapse-portlet" data-bs-toggle="collapse"  aria-expanded="true">
                                        <i class="fas fa-angle-double-down"></i>
                                    </button>
                                
                                </div>
                            </form>
                        
                        </div>
                        <div class="collapse show" >
                            <div class="card-body">
                                <h5 class="card-title altbaslik"> Öğretim Elemanı Alım İlanı
                                    <br><br>
                                    <p class="date">07 Mayıs 2021</p>
                                </h5>
                                <p class="card-text necessity">
                                    Karadeniz Teknik Üniversitesi, son başvuru tarihi 24 mayıs 2021, Eczacılık Fakültesi, Mimarlık Fakültesi, Mezunu Öğretim Elemanı 19 akademik personel alacak.
                                </p>
                                <p class="card-text icerik">
                                    Karadeniz Teknik Üniversitesi Rektörlüğünden:
                                    <br><br>
                                    ARAŞTIRMA GÖREVLİSİ ALIM İLANI
                                    Üniversitemizin aşağıda belirtilen birimlerine; Öğretim Üyesi Dışındaki Öğretim Elemanı Kadrolarına Yapılacak Atamalarda Uygulanacak Merkezi Sınav ile Giriş Sınavlarına İlişkin Usul ve Esaslar Hakkında Yönetmelik, 2547 sayılı Yükseköğretim Kanunu ve 657 sayılı Devlet memurları Kanunu'nun 48. maddesi hükümleri uyarınca personel alınacaktır.
                                    GENEL ŞARTLAR1- 657 Sayılı Kanunun 48 inci maddesinde belirtilen şartları taşımak.
                                    2- ALES'ten en az 70 (lisans mezuniyeti hangi alanda ise o alandaki ALES puan türünden ya da ilan edilen bölüm/ana bilim dalı/program hangi alandan öğrenci alıyorsa o alandaki ALES puan türünden) Yükseköğretim Kurulu tarafından kabul edilen merkezi yabancı dil sınavından en az 50 puan veya eşdeğerliliği kabul edilen bir sınavdan bu puan muadili bir puan almış olmak gerekir. Merkezi sınav muafiyetinden yararlanmayı talep edenlerin ön değerlendirme ve nihai değerlendirme aşamalarında ALES puanı 70 olarak alınır.
                                    3- Ön değerlendirme ve nihai değerlendirme aşamalarında lisans mezuniyeti notunun hesaplanmasında kullanılan 4'lük ve 5'lik not sistemlerinin 100'lük not sistemine eşdeğerliliği Yükseköğretim Kurulu kararıyla belirlenir. Diğer not sistemlerinin 100'lük not sistemine eşdeğerliliğine Üniversitemiz Senatosu karar verir.
                                    4- Yabancı ülkelerden alınan diplomaların Üniversitelerarası Kurulca denkliğinin onaylanmış olması şarttır.
                                    MUAFİYETLER
                                    1- Yükseköğretim öğretim elemanı kadrolarında çalışmış veya çalışmakta olanlarda merkezi sınav (ALES) şartı aranmaz.
                                    BAŞVURU SİSTEMİNE EKLENECEK BELGELER
                                    1- pdb.ktu.edu.tr adresinde formlar kısmında yer alan "İlan Başvuru Dilekçesi (Öğretim Görevlisi-Araştırma Görevlisi)" doldurulmuş ve imzalanmış olarak. (ilan no mutlaka belirtilecektir)
                                    2- Özgeçmiş.
                                    3- Bir adet vesikalık fotoğraf.
                                    4- Nüfus cüzdan fotokopisi.
                                    5- Lisans diploması veya geçici mezuniyet belgesi fotokopisi.
                                    6- Lisans transkript belgesi fotokopisi.
                                    7- İlanda belirtilen alanda yüksek lisans veya doktora öğrencisi olduğunu gösterir öğrenci belgesi.
                                    8- ALES Belgesi (Sınav sonucunun açıklandığı tarih itibariyle son beş yıllık ALES belgesi geçerlidir)
                                    9- Yabancı Dil Belgesi (YDS veya eşdeğerliliği YÖK Başkanlığı tarafından kabul edilen dil belgesi)
                                    NOT:
                                    1- e-Devlet sisteminden alınan belgeler kabul edilecektir. Belgelerin onaylı olması zorunlu değildir. Atamaya hak kazanan adaylardan, atama öncesi belgelerin asıllarının veya onaylı hali istenecektir. Belgelerin asıllarını ibraz edemeyen adayların atamaları yapılmayacaktır.
                                    2- İstenen belgelerde gerçeğe aykırı beyanda bulunduğu tespit edilenlerin sınavı geçersiz sayılacak ve atamaları yapılmayacaktır. Bunların atamaları yapılmış olsa dahi iptal edilecek ve hiçbir hak talep edilmeyecektir.
                                    3- Başvurular https://online.ktu.edu.tr/ adresinden elektronik olarak yapılacaktır. Başvuru süresi içinde yapılmayan başvurular dikkate alınmayacaktır.
                                    4- Sonuçlar (Ön Değerlendirme Sonuçları ve Nihai Değerlendirme Sonuçları) Üniversitemiz web sitesinde (www.ktu.edu.tr) ilan edilecek olup, ayrıca bir tebliğ yapılmayacaktır.
                                </p>
                            </div>
                        </div>
                    </div> <!-- portlet end -->





                    <div class="card portlet portlet-scroll" id="portlet1">
                        <div class="card-header baslik">
                            <strong name="baslik">Süleyman Demirel Üniversitesi</strong>
                            <form action="profil.php" method="post"enctype="multipart/form-data">
                                <div class="btn-group btn-group-sm float-end" role="group" aria-label="Basic example">
                                    <a href="profil.php" class="btn apply"><button type="button" class="btn basvur" value="basvur">Başvur</button></a>
                                    <button type="button" class="btn heart-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Kalple">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button type="button"  class="btn fullscreen-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Full Screen">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                    <button type="button" class="btn exit-portlet"  data-bs-toggle="tooltip" data-bs-placement="top" title="Normal Screen">
                                        <i class="fas fa-compress-arrows-alt"></i>
                                    </button>
                                    <button type="button"  class="btn collapse-portlet" data-bs-toggle="collapse"  aria-expanded="true">
                                        <i class="fas fa-angle-double-down"></i>
                                    </button>
                                
                                </div>
                            </form>
                        
                        </div>
                        <div class="collapse show" >
                            <div class="card-body">
                                <h5 class="card-title altbaslik"> Öğretim Üyesi Alım İlanı
                                    <br><br>
                                    <p class="date">07 Mayıs 2021</p>
                                </h5>
                                <p class="card-text necessity">
                                    Süleyman Demirel Üniversitesi, son başvuru tarihi 23 mayıs 2021, Eğitim Fakültesi, Diş Hekimliği Fakültesi, Isparta Sağlık Hizmetleri Meslek Yüksekokulu, mezunu Öğretim Üyesi 34 akademik personel alacak.
                                </p>
                                <p class="card-text icerik">
                                    Süleyman Demirel Üniversitesi Rektörlüğünden:
                                    <br>
                                    ÖĞRETİM ÜYESİ ALIM İLANI
                                    <br>
                                    2 Kasım 2018 tarihli ve 30583 sayılı Resmi Gazete'de yayımlanan "Devlet Yükseköğretim Kuramlarında Öğretim Elemanı Norm Kadrolarının Belirlenmesine ve Kullanılmasına İlişkin Yönetmelik" kapsamında Üniversitemizin çeşitli birimlerine 2547 sayılı Kanun, Öğretim Üyeliğine Yükseltilme ve Atanma Yönetmeliği ve Süleyman Demirel Üniversitesi Öğretim Üyeliği Kadrolarına Başvurma, Atanma ve Yükseltilme Kriterlerine İlişkin Yönerge hükümlerine göre aşağıda belirtilen kadrolara öğretim üyeleri alınacaktır.
                                    <br>
                                    Profesör ve Doçent kadrolarına başvuracak adaylar, Başvuru Formunu düzenleyerek ekleri ile birlikte Personel Dairesi Başkanlığına başvurmaları gerekmektedir.NOTLAR:
                                    İlanımızın başvuru ve bitiş süresi, Resmi Gazete'de yayımlandığı tarih başvuru tarihi olup 23.05.2021 tarihinde başvuru sona erecektir. Posta ile müracaat edecek adaylar için; postada meydana gelen gecikmeler dikkate alınmayacaktır.
                                    <br>
                                    Başvuru Formalarına ve ayrıntılı bilgilere http://persdb.sdu.edu.tr internet adresi Doküman Arşivi bölümünden ulaşılabilir.
                                    <br>
                                    Tıp Fakültesine ait kadrolara başvuracak Öğretim Üyesi adayların Tıp Fakültesi mezunu olması zorunludur. (Özel şartlar hariç)
                                    *** Tıp Fakültesi mezunu olma şartı aranmaz.
                                    İlanda belirtilen kadrolara müracaat eden adayların 657 sayılı Devlet Memurları
                                    Kanununun 48 inci maddesinde yer alan şartları taşıyor olması gerekmektedir.
                                </p>
                            </div>
                        </div>
                    </div> <!-- portlet end -->



                    <div class="card portlet portlet-scroll" id="portlet1">
                        <div class="card-header baslik">
                            <strong name="baslik">Aksaray Üniversitesi</strong>
                            <form action="profil.php" method="post"enctype="multipart/form-data">
                                <div class="btn-group btn-group-sm float-end" role="group" aria-label="Basic example">
                                    <a href="profil.php" class="btn apply"><button type="button" class="btn basvur" value="basvur">Başvur</button></a>
                                    <button type="button" class="btn heart-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Kalple">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button type="button"  class="btn fullscreen-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Full Screen">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                    <button type="button" class="btn exit-portlet"  data-bs-toggle="tooltip" data-bs-placement="top" title="Normal Screen">
                                        <i class="fas fa-compress-arrows-alt"></i>
                                    </button>
                                    <button type="button"  class="btn collapse-portlet" data-bs-toggle="collapse"  aria-expanded="true">
                                        <i class="fas fa-angle-double-down"></i>
                                    </button>
                                
                                </div>
                            </form>
                        
                        </div>
                        <div class="collapse show" >
                            <div class="card-body">
                                <h5 class="card-title altbaslik"> Öğretim Elemanı Alım İlanı
                                    <br><br>
                                    <p class="date">05 Mayıs 2021</p>
                                </h5>
                                <p class="card-text necessity">
                                    Aksaray Üniversitesi, son başvuru tarihi 24 mayıs 2021, Aksaray Teknik Bilimler Meslek Yüksekokulu, Elektrik-Elektronik Mühendisliği Bölümü lisans mezunu olmak. Elektrik-Elektronik mühendisliği Anabilim Dalı'nda tezli yüksek lisans yapmış olmak. Lisans eğitimi sonrasında alternatif enerji kaynaklarından (güneş, rüzgar vb.) elektrik üretimi alanında en az 5 yıllık deneyime sahip Öğretim Elemanı 3 akademik personel alacak.
                                </p>
                                <p class="card-text icerik">
                                    Aksaray Üniversitesi Rektörlüğünden:
                                    Öğretim Üyesi Dışındaki Öğretim Elemanı Kadrolarına Yapılacak Atamalarda Uygulanacak Merkezi Sınav ile Giriş Sınavlarına İlişkin Usul ve Esaslar Hakkında Yönetmelik hükümleri çerçevesinde; Üniversitemizin aşağıda yer alan birimlerine 2547 sayılı Kanun'un 31. maddesi uyarınca Öğretim Görevlisi, 2547 sayılı Kanun'un 50/d maddesi uyarınca Araştırma Görevlisi alınacaktır.
                                    <br><br>
                                    GENEL VE ÖZEL ŞARTLAR
                                    1) 657 sayılı Devlet Memurları Kanunu'nun 48. maddesinde belirtilen şartları taşımak, ALES'ten en az 70, Yükseköğretim Kurulu tarafından kabul edilen merkezi yabancı dil sınavından en az 50 puan veya eşdeğerliği kabul edilen bir sınavdan bu puan muadili bir puan almış olmak gerekir. Merkezi sınav muafiyetinden yararlanmayı talep edenlerin ön değerlendirme ve nihai değerlendirme aşamalarında ALES puanı 70 olarak kabul edilir.2) Ön değerlendirme ve nihai değerlendirme aşamalarında lisans mezuniyeti notunun hesaplanmasında kullanılacak 4'lük ve 5'lik not sistemlerinin 100'lük not sistemine eşdeğerliği Yükseköğretim Kurulu kararıyla belirlenir.
                                    3) Öğretim görevlisi kadrosuna başvuracak adaylarda en az tezli yüksek lisans derecesine sahip olmak veya lisans ve yüksek lisans derecesini birlikte veren programlardan mezun olmak, devlet yükseköğretim kurumlarının araştırma görevlisi kadrolarına başvurularda tezli yüksek lisans, doktora veya sanatta yeterlik eğitimi öğrencisi olmanın yanı sıra sınavın yapıldığı yılın ocak ayının birinci günü itibarıyla otuz beş yaşını doldurmamış olmak şartı aranır.
                                    MUAFİYET
                                    Doktora veya tıpta, diş hekimliğinde, eczacılıkta ve veteriner hekimlikte uzmanlık ya da sanatta yeterlik eğitimini tamamlamış olanlarda, meslek yüksekokullarının Yükseköğretim Kurulu tarafından belirlenen uzmanlık alanlarına atanacak olanlarda, yükseköğretim kurumlarında öğretim elemanı kadrolarında çalışmış veya çalışmakta olanlarda merkezi sınav şartı aranmaz. Meslek yüksekokullarının, bu Yönetmeliğin 6. maddesinin dördüncü fıkrası kapsamındaki öğretim görevlisi kadroları haricindeki öğretim elemanı kadrolarına yapılacak başvurularda yabancı dil şartı aranmaz.
                                    <br><br>
                                    BAŞVURUDA İSTENİLEN BELGELER
                                    <br>
                                    1) Başvurulan ilan sıra numarası, unvan, birim, bölüm, program/anabilim dalı ile iletişim bilgilerinin eksiksiz şekilde belirtildiği bir dilekçe,
                                    2) Özgeçmiş,
                                    3) ALES sonuç belgesinin çıktısı,
                                    4) Yükseköğretim Kurulu tarafından kabul edilen merkezi yabancı dil sınavı veya eşdeğerliği kabul edilen bir sınava ait sonuç belgesinin çıktısı,
                                    5) Lisans diploması veya geçici mezuniyet belgesi,
                                    6) Lisans transkript belgesi,
                                    7) Lisansüstü öğrenci belgesi ve transkript belgesi,
                                    8) Tezli yüksek lisans diploması veya geçici mezuniyet belgesi,
                                    9) Son altı ay içerisinde çekilmiş 1 (bir) adet vesikalık fotoğraf,
                                    10) Nüfus cüzdan fotokopisi,
                                    11) Deneyim durumuyla ilgili SGK hizmet dökümü ve çalışılan iş yerinden alınan yaptığı işin konusunu da belirten belge,
                                    12) Halen bir kamu kurumunda çalışan veya daha önce çalışmış adaylardan hizmet belgesi
                                    DİĞER HUSUSLAR
                                    1) Adayların tek bir kadro ilanına müracaat etmeleri gerekmektedir. Birden fazla kadroya başvuran adayların başvuruları değerlendirmeye alınmayacaktır.
                                    2) ALES puanının geçerlilik süresi açıklandığı tarihinden itibaren 5 (beş) yıldır.
                                    3) Yabancı ülkelerden alınan diplomaların Üniversitelerarası Kurulca denkliğinin onaylanmış olması gerekir.
                                    4) Araştırma Görevlisi kadrolarına başvuran adayların ibraz etmiş olduğu lisansüstü eğitim belgelerinde Lisansüstü Eğitim Öğretim Yönetmeliği'nde belirtilen azami öğrenim sürelerini aşmamış olduklarını belgelendirmeleri gerekmektedir.
                                    5) İstenilen belgelerde gerçeğe aykırı beyanda bulunduğu tespit edilenlerin sınavı geçersiz sayılacak ve atamaları yapılmayacaktır; yapılmış olsa dahi iptal edilecek ve hiçbir hak talep edemeyeceklerdir.
                                    6) Atanmaya hak kazanan adayların tüm belgeleri onaylı olmak zorundadır.
                                    7) İdare uygun gördüğü takdirde İlanın her aşaması iptal edilebilir.
                                    8) İlanımıza http://www.aksaray.edu.tr/ adresinden ulaşılabilir.
                                    9) Başvurular şahsen veya posta ile yapılabilir. Posta ile yapılacak başvuruların son başvuru tarihi mesai bitimine kadar başvuru yapılacak ilgili Birime ulaşması gerekmektedir. Postadaki gecikmeler ve ilanda belirtilen süreler içinde yapılmayan ve eksik belgeli başvurular dikkate alınmayacaktır.
                                    <br><br>
                                    SINAV TAKVİMİ
                                    Han Yayım Tarihi                    : 07.05.2021
                                    Başvuru Başlangıç Tarihi              : 07.05.2021
                                    Son Başvuru Tarihi                    : 24.05.2021
                                    Ön Değerlendirme Sonuç İlan Tarihi : 27.05.2021
                                    Giriş Sınavı Tarihi                      : 01.06.2021
                                    Nihai Değerlendirme Sonuç İlan Tarihi : 03.06.2021
                                </p>
                            </div>
                        </div>
                    </div> <!-- portlet end -->


                    <div class="card portlet portlet-scroll" id="portlet1">
                        <div class="card-header baslik">
                            <strong name="baslik">Yüksek İhtisas Üniversitesi</strong>
                            <form  action="profil.php" method="post"enctype="multipart/form-data">
                                <div class="btn-group btn-group-sm float-end" role="group" aria-label="Basic example">
                                    <a href="profil.php" class="btn apply"><button type="button" class="btn basvur" value="basvur">Başvur</button></a>
                                    <button type="button" class="btn heart-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Kalple">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button type="button"  class="btn fullscreen-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Full Screen">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                    <button type="button" class="btn exit-portlet"  data-bs-toggle="tooltip" data-bs-placement="top" title="Normal Screen">
                                        <i class="fas fa-compress-arrows-alt"></i>
                                    </button>
                                    <button type="button"  class="btn collapse-portlet" data-bs-toggle="collapse"  aria-expanded="true">
                                        <i class="fas fa-angle-double-down"></i>
                                    </button>
                                
                                </div>
                            </form>
                        
                        </div>
                        <div class="collapse show" >
                            <div class="card-body">
                                <h5 class="card-title altbaslik">Öğretim Üyesi Alım İlanı
                                    <br><br>
                                    <p class="date">Güncellendi</p>
                                </h5>
                                <p class="card-text necessity">
                                    Yüksek İhtisas Üniversitesi, son başvuru tarihi 24 mayıs 2021, Tıp Fakültesi, Doçentliğini Kadın Hastalıkları ve Doğum Ana Bilim Dalı alanından almış olmak. Yandal uzmanlığını Jinekolojik Onkoloji Cerrahisi alanından almış Profesör, Doçent, Doktor, Öğretim Üyesi 13 akademik personel alacak.
                                </p>
                                <p class="card-text icerik">
                                    Yüksek İhtisas Üniversitesi Rektörlüğünden:
                                    <br><br>
                                    Başvuru Tarihi : 05.05.2021
                                    Son Başvuru Tarihi : 24.05.2021
                                    <br><br>
                                    Üniversitemize 2547 sayılı Yükseköğretim Kanunu ile 7100 sayılı Bazı Kanun Hükmünde Kararnamelerde Değişiklik Yapılması Hakkındaki Kanun, Öğretim Üyeliğine Yükseltilme ve Atanma Yönergesi ile Vakıf Yükseköğretim Kurumlan Yönetmeliği'nin ilgili maddeleri uyarınca aşağıda nitelikleri belirtilen kadrolara tam zamanlı ve Öğretim Üyesi Dışındaki Öğretim Elemanları Kadrolarına Atamalarda Uygulanacak Merkezi Sınav ile Giriş Sınavlarına İlişkin Usul ve Esaslar hakkında Yönetmelik'in ilgili maddeleri uyarınca "Öğretim Elemanı" alınacaktır.Profesör ve Doçent kadrosuna müracaat edecek adayların Üniversitemiz Rektörlüğüne başvurmaları gerekmektedir.

                                    <br><br>
                                    Doktor Öğretim Üyesi, Öğretim Görevlisi ve Araştırma Görevlisi kadrolarına müracaat edecek adayların ise ilgili Yönetmelik hükümleri uyarınca ilgili Fakülte Dekanlıklarına, Yüksekokul Müdürlüklerine ve Enstitü Müdürlüklerine, şahsen veya posta yoluyla başvurmaları gerekmektedir.
                                    Adres: Rektörlük - Tıp Fakültesi - Sağlık Bilimleri Fakültesi - Lisansüstü Eğitim Enstitüsü: Oğuzlar Mahallesi 1375 Sokak No: 8 Balgat / ANKARA
                                    Sağlık Hizmetleri Meslek Yüksekokulu - Meslek Yüksekokulu: Karakaya Mah. Bağlum Bulvarı No: 1 Keçiören / ANKARA
                                    <br><br>
                                    PROFESÖR, DOÇENT VE DOKTOR ÖĞRETİM ÜYESİ KADROSU İÇİN GEREKLİ BELGELER
                                    1 - Başvurdukları birim ve anabilim dalını belirten dilekçe. (Dilekçede başvurulan kadronun, birimi, unvanı ve adayın iletişim bilgileri; adres, telefon numarası e-posta vs. açıkça belirtilecektir.)
                                    2 - YÖK Formatlı Özgeçmiş ve Yayın listesi (Söz konusu belgeler yayın tarihine göre sıralanır)
                                    3 - İki adet vesikalık fotoğraf (fotoğrafların arkasına adı, soyadı ve başvurulan kadro yazılacaktır)
                                    4 - Nüfus cüzdanı örneği / Nüfus Cüzdanı Fotokopisi
                                    5 - Adli Sicil Belgesi
                                    6 - Onaylı diploma fotokopileri (lisans, yüksek lisans ve doktora ve doçentlik belgesi) Yurtdışında alınan diplomaların Üniversitelerarası Kurulca denkliğinin onaylanmış olması gerekir.
                                    7 - Herhangi bir kamu kuruluşunda çalışanlar (daha önce çalışıp ayrılsalar bile) çalıştığı kurumdan veya e- Devletten alacakları onaylı ayrıntılı hizmet belgesi dökümü
                                    8 - Tüm başvuru evrakları, bilimsel çalışma ve yayınlarını kapsayan Profesör için 1 adet Dosya 6 adet CD, Doçent için 1 adet dosya 4 adet CD, Doktor Öğretim Üyesi için 1 adet dosya 4 adet CD
                                    9 - Aday tarafından doldurularak puanlandırılmış Yüksek İhtisas Üniversitesi Akademik Yükseltilme ve Atanma ölçütler için puanlama tablosu http://yuksekihtisasuniversitesi.edu.tr/ tr/kurumsal/mevzuat
                                    10 - Adayların https://orcid.org/ adresinden giriş yaparak bir tanımlayıcı no almaları (16 digit ORCİD identifier )ve belgelendirmeleri
                                    11 - Postadaki gecikmeler ve ilanda belirtilen süreler içinde yapılmayan başvurular ve eksik belgeli başvurular dikkate alınmayacaktır. Posta ile yapılacak başvuruların son başvuru tarihine kadar başvuru yapılacak ilgili birimin dekanlığına/müdürlüğüne ulaşması gerekmektedir. (Postadaki gecikmelerden Üniversitemiz sorumlu değildir.)
                                    12 - İdarenin uygun görmesi halinde ilanın her aşaması iptal edilebilir.
                                    <br><br>
                                    ÖĞRETİM GÖREVLİSİ VE ARAŞTIRMA GÖREVLİSİ KADROSU İÇİN GEREKLİ BELGELER
                                    1 - Başvurdukları bölüm programı belirten dilekçe. (Dilekçede başvurulan kadronun, birimi, unvanı ve adayın iletişim bilgileri; adres, telefon numarası e-posta vs. açıkça belirtilecektir.)
                                    2 - YÖK Formatlı Özgeçmiş
                                    3 - Son 5 (beş) yıl içinde düzenlenmiş ALES sınavlarından birinden en az 70,00 (yetmiş) alındığına dair ÖSYM sınav sonuç belgesi.
                                    4 - İngilizce dilinden en az 50 puan alındığını gösterir, YÖK Tarafından Kabul Edilen Merkezi Yabancı Dil Sınavı veya Eşdeğeri Kabul Edilen Sınav Sonuç Belgesi
                                    5 - İki adet vesikalık fotoğraf (fotoğrafların arkasına adı, soyadı ve başvurulan kadro yazılacaktır)
                                    6 - Nüfus cüzdanı örneği / Nüfus Cüzdanı Fotokopisi
                                    7 - Adli Sicil Belgesi
                                    8 - Onaylı diploma fotokopileri (lisans, yüksek lisans ve varsa doktora). Yurtdışında alınan diplomaların Üniversitelerarası Kurulca denkliğinin onaylanmış olması gerekir.
                                    9 - Herhangi bir kamu kurumunda çalışanlar veya geçmişte çalışmış olanlar; çalışmış oldukları kurumdan veya e-Devletten ayrıntılı hizmet belgesi
                                    10 - Onaylı lisans ve yüksek lisans (varsa doktora) transkript belgeleri.
                                    11 - Erkek Adaylar için askerlikle ilgili terhis, tecil veya muaf olduğunu belirten belge
                                    12 - Postadaki gecikmeler ve ilanda belirtilen süreler içinde yapılmayan başvurular ve eksik belgeli başvurular dikkate alınmayacaktır.
                                    13 - Posta ile yapılacak başvuruların son başvuru tarihine kadar başvuru yapılacak ilgili birimin dekanlığına/müdürlüğüne ulaşması gerekmektedir. (Postadaki gecikmelerden Üniversitemiz sorumlu değildir.)
                                    14 - İstenilen belgelerde gerçeğe aykırı beyanda bulunduğu tespit edilenlerin sınavı geçersiz sayılacak ve atamaları yapılmayacaktır. Bunların atamaları yapılmış olsa dahi iptal edilecek ve hiçbir hak talep edemeyeceklerdir.
                                    15 - İdarenin uygun görmesi halinde ilanın her aşaması iptal edilebilir.
                                    <br><br>
                                    Öğretim Görevlisi ve Araştırma Görevlisi alım ilanımız için;
                                    Ön Değerlendirme Tarihi : 26.05.2021
                                    Sınav Tarihi : 28.05.2021
                                    Sonuç Açıklama Tarihi : 31.05.2021
                                </p>
                            </div>
                        </div>
                    </div> <!-- portlet end -->

                    

                    <div class="card portlet portlet-scroll" id="portlet1">
                        <div class="card-header baslik">
                            <strong name="baslik">Atatürk Üniversitesi</strong>
                            <form action="profil.php" method="post"enctype="multipart/form-data">
                                <div class="btn-group btn-group-sm float-end" role="group" aria-label="Basic example">
                                    <a href="profil.php" class="btn apply"><button type="button" class="btn basvur" value="basvur">Başvur</button></a>
                                    <button type="button" class="btn heart-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Kalple">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button type="button"  class="btn fullscreen-portlet" data-bs-toggle="tooltip" data-bs-placement="top" title="Full Screen">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                    <button type="button" class="btn exit-portlet"  data-bs-toggle="tooltip" data-bs-placement="top" title="Normal Screen">
                                        <i class="fas fa-compress-arrows-alt"></i>
                                    </button>
                                    <button type="button"  class="btn collapse-portlet" data-bs-toggle="collapse"  aria-expanded="true">
                                        <i class="fas fa-angle-double-down"></i>
                                    </button>
                                
                                </div>
                                        
                            </form>
                            
                        </div>
                        <div class="collapse show" >
                            <div class="card-body">
                                <h5 class="card-title altbaslik"> Öğretim Üyesi Alım İlanı
                                    <br><br>
                                    <p class="date">02 Mayıs 2021</p>
                                </h5>
                                <p class="card-text necessity">
                                    Atatürk Üniversitesi, son başvuru tarihi 24 mayıs 2021, Bilgisayar Mühendisliği anabilim dalında doktorasını yapmış olmak veya Yazılım Mühendisliği anabilim dalında doktorasını yapmış olmak veya Bilgisayar ve Öğretimi Teknolojileri anabilim dalında doktorasını yapmış olmak veya Yönetim Bilişim Sistemleri anabilim dalında doktorasını yapmış olmak veya Bilişim Sistemleri anabilim dalında doktorasını yapmış olmak veya Elektrik-Elektronik Mühendisliği anabilim dalında doktorasını yapmış Öğretim Üyesi 2 akademik personel alacak.
                                </p>
                                <p class="card-text icerik">
                                    Atatürk Üniversitesi Rektörlüğünden:
                                    Üniversitemize bağlı birimlerde istihdam edilmek üzere, 2547 sayılı Kanunun ve Üniversitemiz Öğretim Üyeliğine Yükseltilme ve Atanma Yönetmeliğinin ilgili maddelerine göre öğretim üyesi alınacaktır.
                                    <br><br>
                                    Müracaat edecek adayların devlet hizmetine girmede aranılan genel şartlara haiz olmaları gerekmektedir. Müracaatlar şahsen veya posta ile yapılacaktır.(Postadaki gecikmelerden ve eksik belgelerden Kurumumuz sorumlu değildir.)
                                    <br><br>
                                    MÜRACAATTA İSTENEN BELGELER VE BAŞVURU YERİ:DOKTOR ÖĞRETİM ÜYESİ KADROLARI İÇİN:
                                    -2547 sayılı Kanun'un ilgili maddesinde belirtilen şartlara haiz adayların, dilekçe, yabancı dil belgesi, özgeçmiş, yayın listesi (Puanlandırma tablosu ile birlikte), nüfus cüzdan fotokopisi, askerlik belgesi, öğrenim belgeleri (lisans, yükseklisans, doktora veya uzmanlık belgesi) ve 2 adet fotoğraf 4 takım dijital dosya (4 adet USB/CD/DVD) halinde yayınları ile ilgili birimlere müracaat etmeleri gerekmektedir.
                                    <br><br>
                                    SON BAŞVURU TARİHİ:
                                    İlanımızın Resmi Gazete'de yayımlandığı tarihten itibaren 15. Gündür ( Son müracaat tarihi 24.05.2021 mesai bitimine kadardır.)
                                    UYGULAMALI BİLİMLER FAKÜLTESİ
                                </p>
                            </div>
                        </div>
                    </div> <!-- portlet end -->
                    
                    <a href="arsiv3.php" class="btn slide"data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sonraki Sayfa"><i class="far fa-hand-point-right 3x"></i></a>
                    <a href="arsiv.php" class="btn slide float-right buton-önceki" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Önceki Sayfa"><i class="far fa-hand-point-left 3x"></i></a>

                    
                
                
            </div>

            <div class="content-footer">
                <div class="float-left">
                    <span>Gizlilik, kullanım ve telif hakları bildiriminde belirtilen kurallar çerçevesinde hizmet sunulmaktadır.<span>
                </div>
                
                <div class="float-right">
                   <span>Adres: Dokuz Eylül Üniversitesi | İZMİR | Tel: 0531 345 67 89 | E-mail: info@academy.com.tr</span>
                </div>
            </div>


        </div> <!-- content end -->

    </div>  <!-- wrap end -->



    <script src="assets\plugins\jqueryv321\jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="assets\plugins\bootstrapv5\js\bootstrap.min.js"></script>
    <script src="assets\plugins\jqueryfullscreen\jquery.fullscreen.min.js"></script>
    <script src="assets\academy\js\academy.js"></script>
    <script>
        $(document).ready(function(){

            var p = 1;
            $('.portlet').each(function(){
                var portletid = "portlet"+p;
                $(this).attr('id', portletid);
                $('#'+portletid+' .fullscreen-portlet').attr('data-parent', portletid);
                $('#'+portletid+' .exit-portlet').attr('data-parent', portletid);
                $('#'+portletid+' .collapse-portlet').attr('data-bs-target','#collapse'+portletid);
                $('#'+portletid+' .collapse-portlet').attr('aria-controls','collapse'+portletid);
                $('#'+portletid+' .collapse').attr('id','collapse'+portletid);
                p = p+1;
            });

           
            $('.fullscreen-portlet').click(function(){
                var portlet = $(this).attr('data-parent');
                $('#'+portlet).fullscreen();
                $('#'+portlet).addClass('fullscreen');
            });
            $('.exit-portlet').click(function(){
                var portlet = $(this).attr('data-parent');
                $.fullscreen.exit();
                $('#'+portlet).removeClass('fullscreen');

            });
            $('.heart-portlet').click(function(){
                var portlet = $(this).attr('data-parent');
                alert('Favorilere Eklendi');
            });
            
           
        });
    </script>
    
  </body>
</html>


