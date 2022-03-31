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
            </div> <!-- sidebarheader end -->
           <!--  <div class="sidebar-profile text-center">
                <img src="assets/academy/img/us.jpg" class="img-fluid mx-auto d-block circle">
                <div class="user-name">Şeyma YILMAZ</div>
                <div class="user-role">YBS Yüksek Lisans</div>
                
                <div class="btn-group btn-group-sm mt-1" role="group" aria-label="Basic example">
                    <a href="#" class="btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Parola İşlemleri"><i class="fas fa-unlock"></i></a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profil İşlemleri"><i class="fas fa-user"></i></a>
                    
                </div>
            </div>   sidebar-profile end -->
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
                <!-- <a href="#" class="logout" data-bs-toggle="tooltip" data-bs-placement="top" title="Çıkış Yap" ><i class="fas fa-power-off fa-2x"></i></a> -->
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

                <div class="card portlet portlet-scroll" id="portlet1">  <!-- row and col-md-6 for 2 side -->
                    <div class="card-header baslik ">
                        <strong class="bas" name="baslik"> Ankara Sosyal Bilimler Üniversitesi</strong>
                        <form action="apply.php" method="post"enctype="multipart/form-data">
                            <div class="btn-group btn-group-sm float-end" role="group" aria-label="Basic example">
                                <a href="apply.php" class="btn apply"><button type="submit" name="submit" class="btn basvur" value="basvur">Başvur</button></a>
                                
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
                        <div class="card-body ">
                            <h5 class="card-title altbaslik" name="altbaslik">Öğretim Üyesi Alım İlanı
                                <br><br>
                                <p class="date" name="date">21 Mayıs 2021</p>
                            </h5>
                            <p class="card-text necessity" name="icerik1">
                                Ankara Sosyal Bilimler Üniversitesi, son başvuru tarihi 4 haziran 2021, Doçentliğini İslam Tarihi ve Sanatları alanında almış, Kudüs ve Mescidi Aksa konularında akademik çalışmaları olan Profesör, Doçent, Doktor, Öğretim Üyesi 8 akademik personel alacak.
                            </p>
                            <p class="card-text icerik" name="icerik2">
                                Ankara Sosyal Bilimler Üniversitesi Rektörlüğünden:
                                02.11.2018 tarih ve 30583 sayılı Resmi Gazete'de "Devlet Yükseköğretim Kuramlarında Öğretim Elemanı Norm Kadrolarının Belirlenmesine ve Kullanılmasına İlişkin Yönetmelik" uyarınca Üniversitemiz birimlerine 2547 sayılı Yükseköğretim Kanunu, 2914 sayılı Yükseköğretim Personel Kanunu ile Üniversitemiz Öğretim Üyeliğine Atanma ve Yükseltme Esasları'nın ilgili maddeleri uyarınca profesör, doçent ve doktor öğretim üyesi alınacak olup, adayların kamu hizmetine girmede aranan genel şartlara sahip olması gerekir.

                                <br><br>
                                Adayların özgeçmiş ve yayın listeleri ile birlikte bilimsel çalışmalarını (makale, tez, kitap vb.) kapsayan dosyalarını, profesör kadroları için 6 takım, doçent ve doktor öğretim üyesi kadroları için 4 takım olarak ilanın Resmi Gazete'de yayımlandığı tarihten itibaren 15 gün içerisinde aşağıda belirtilen belgeler ile birlikte başvuru adresine teslim etmeleri gerekmektedir.
                                Profesör ve doçent kadrolarına daimi statüye göre atama yapılacak olup, başvuruların profesör ve doçent kadroları için Rektörlük Personel Daire Başkanlığına; doktor öğretim üyesi kadroları için ise ilgili fakülte dekanlığına yapılması gerekmektedir.Başvuru için gerekli belgeler:
                                <br><br>
                                1. Adayın başvurduğu kadroya ait, anabilim dalı, kadro derecesi ve açıklamaları içeren dilekçe
                                2. Özgeçmiş ve yayın listesi
                                3. Lisans, yüksek lisans, doktora belgesi ve doçentlik belgesi (onaylı)
                                4. Yabancı dil belgesi*
                                5. 2 adet fotoğraf
                                6. Nüfus cüzdanı fotokopisi
                                7. Adli sicil belgesi
                                8. Erkek adayların askerlik durumlarına ilişkin belge
                                9. Halen çalışanlar veya daha önce kamu hizmeti bulunanlar için hizmet belgesi
                                <br><br>
                                NOT: 1. Başvuruda istenilen belgelerin aslı görülmesi halinde "aslı gibidir" onayı Kurumumuzca yapılabilecektir.
                                2. Adaylar, başvuru sırasında istenen belgeleri yazılı olarak teslim etmek kaydıyla, başvuru dosyalarındaki bilimsel eserlerini (makale, tez, kitap vs.) elektronik ortamda (CD, DVD vb.) verebilirler.
                                3. Doktora ve doçent unvanı yurtdışından alınmış ise denkliğinin Üniversitelerarası Kurul tarafından onaylandığını gösterir belgenin eklenmesi gerekmektedir.
                                4. İlanımıza http://www.asbu.edu.tr adresinden ulaşılabilir.
                                5. Başvuru dilekçesinde adaya ait tüm iletişim bilgileri (cep, iş, ev telefonu ve e-mail adresi) belirtilecektir.
                                6. Başvurular şahsen yapılacak olup posta ile yapılacak başvurular kabul edilmeyecektir.
                                7. Profesör kadrosuna başvuran adayların başlıca araştırma eserini belirtmeleri gerekmektedir.
                                <br><br>
                                * Üniversitemiz Öğretim Üyeliğine Atanma ve Yükseltme Esasları gereğince;
                                Yabancı dilde eğitim yapan birimlerde YÖK tarafından kabul edilen eğitim dilindeki merkezi yabancı dil sınavından en az 80 (seksen) veya eşdeğeri kabul edilen bir sınavdan muadili bir puan; % 30 yabancı dille veya % 100 Türkçe eğitim yapan birimlerde YÖK tarafından kabul edilen sınavlardan en az 70 (yetmiş) puan veya eşdeğeri kabul edilen bir dil sınavından muadili bir puan almak.
                                Başvuru için gerekli iletişim adresi aşağıdadır.
                                Ankara Sosyal Bilimler Üniversitesi Rektörlüğü Hükümet Meydanı Ulus - ANKARA
                                Tel: (312) 596 47 43 - 596 44 59 - 596 44 53
                            </p>
                        </div>
                    </div>
                </div> <!-- portlet end -->

                <div class="card portlet portlet-scroll" id="portlet1">
                    <div class="card-header baslik">
                        <strong name="baslik">Erciyes Üniversitesi</strong>
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
                                <p class="date">21 Mayıs 2021</p>
                            </h5>
                            <p class="card-text necessity">
                                Erciyes Üniversitesi, son başvuru tarihi 4 haziran 2021, Diş Hekimliği Fakültesi, Edebiyat Fakültesi, Havacılık ve Uzay Bilimleri Fakültesi, Tıp Fakültesi, mezunu Profesör, Doçent, Doktor, Öğretim Üyesi 30 akademik personel alacak.
                            </p>
                            <p class="card-text icerik">
                                Erciyes Üniversitesi Rektörlüğünden:
                                Üniversitemizin aşağıda belirtilen birimlerine; 657 sayılı Devlet Memurları Kanunu'nun 48. maddesi, 2547 sayılı Yükseköğretim Kanunu ve bu kanuna dayalı olarak çıkartılan ilgili yönetmelik hükümleri ile Erciyes Üniversitesi Akademik Yükseltme ve Atama Ölçütleri doğrultusunda öğretim üyesi alınacaktır. Öğretim Üyeliğine başvuru süresi, ilanın Resmi Gazete'de yayımlandığı tarihten itibaren başlar 15. günün mesai saati bitiminde sona erer.
                                Not: 2547 sayılı Kanunun Ek 38. maddesi uyarınca belirlenen %20'lik kota kapsamında başvuru yapılabilecek Dr. Öğretim Üyesi kadrosu bulunmamaktadır.
                                <br><br>
                                ilan olunur.PROFESÖRLÜK KADROSU İÇİN
                                - Adayların ilan edilen profesörlük kadrosuna başvurabilmeleri için durumlarının Erciyes Üniversitesi'nde açık bulunan profesörlük kadrolarına başvurma, yükseltilme ve atanma konusunda Senato ilkelerinin ilgili maddelerinde belirtilen şartlara uygunluğunun ilgili komisyon tarafından kabulü zorunludur.
                                <br><br>
                                - 2547 sayılı Kanun'un 26. maddesinde belirtilen şartlara haiz olmak,
                                - Adayların, dilekçe, özgeçmiş ve yayın listesi ile noter veya resmi kurumlarca onaylanmış lisans, yüksek lisans, doktora veya tıpta uzmanlık belgesi veya sanatta yeterlik belgesi, doçentlik belgesi, yabancı dil belgesi, askerlik durum belgesi, nüfus cüzdanın tasdikli fotokopisi, herhangi bir adli sicil kaydı olmadığına dair resmi belge (e-Devlet üzerinden alınan belge) ve iki adet fotoğrafı kapsayan başvuru dosyası ile bilimsel çalışma ve yayınlarını kapsayan 1 takım dosyayı fiziki olarak ve ayrıca bu dosyalardaki dokümanların tamamının PDF formatında CD veya Flash Belleğe aktarılıp, 6 (altı) adet olarak Üniversitemiz Rektörlüğüne teslim etmeleri gerekmektedir.
                                <br><br>
                                - 2547 sayılı Yükseköğretim Kanunu'nun 26. maddesi gereğince profesör adayları yayın listelerinde başlıca araştırma eserlerini belirteceklerdir. Yabancı dilde eğitim yapılan birimlerde YÖK tarafından kabul edilen merkezi yabancı dil sınavından en az 80 (seksen) puan almak veya eşdeğerliği kabul edilen bir sınavdan bu puan muadili bir puana sahip olmak, ilgili yabancı dil belgesini ibraz etmek.
                                - Başvuruda bulunan adayların yayın dosyalarının içerisine Üniversitemiz Akademik Yükseltme ve Atama Ölçütlerinde kullanılan puanlama tablolarına göre hazırlayacakları puanlama tablosu eklemeleri gerekmektedir.
                                <br><br>
                                DOÇENTLİK KADROSU İÇİN
                                - Adayların ilan edilen doçentlik kadrosuna başvurabilmeleri için durumlarının Erciyes Üniversitesi'nde açık bulunan doçentlik kadrolarına başvurma, yükseltilme ve atanma konusunda Senato ilkelerinin ilgili maddelerinde belirtilen şartlara uygunluğunun ilgili komisyon tarafından kabulü zorunludur.
                                - 2547 sayılı Kanun'un 24. maddesinde belirtilen şartlara haiz olmak,
                                - Adayların, dilekçe, özgeçmiş ve yayın listesi ile noter veya resmi kurumlarca onaylanmış lisans, yüksek lisans, doktora veya tıpta uzmanlık belgesi veya sanatta yeterlik belgesi, doçentlik belgesi, yabancı dil belgesi, askerlik durum belgesi, nüfus cüzdanın tasdikli fotokopisi, herhangi bir adli sicil kaydı olmadığına dair resmi belge (e-Devlet üzerinden alınan belge) ve iki adet fotoğrafı kapsayan başvuru dosyası ile bilimsel çalışma ve yayınlarını kapsayan 1 takım dosyayı fiziki olarak ve ayrıca bu dosyalardaki dokümanların tamamının PDF formatında CD veya Flash Belleğe aktarılıp, 4 (dört) adet olarak Üniversitemiz Rektörlüğüne teslim etmeleri gerekmektedir.
                                - Başvuruda bulunan adayların yayın dosyalarının içerisine Üniversitemiz Akademik Yükseltme ve Atama Ölçütlerinde kullanılan puanlama tablolarına göre hazırlayacakları puanlama tablosu eklemeleri gerekmektedir.
                                <br><br>
                                DOKTOR ÖĞRETİM ÜYESİ KADROSU İÇİN
                                - Adayların ilan edilen Dr. Öğretim Üyesi kadrosuna başvurabilmeleri için durumlarının Erciyes Üniversitesi'nde ilgili birimde açık bulunan Dr. Öğretim Üyesi kadrolarına başvurma, yükseltilme ve atanma konusunda Senato İlkelerinin ilgili maddelerinde belirtilen şartlara uygunluğunun ilgili komisyon tarafından kabulü zorunludur.
                                - 2547 sayılı Kanunun 23. maddesinde belirtilen şartlara haiz olmak.
                                - Adayların, dilekçe, özgeçmiş ve yayın listesi ile noter veya resmi kurumlarca onaylanmış lisans, yüksek lisans, doktora veya tıpta uzmanlık belgesi veya sanatta yeterlik belgesi, yabancı dil belgesi, askerlik durum belgesi, nüfus cüzdanın tasdikli fotokopisi, herhangi bir adli sicil kaydı olmadığına dair resmi belge (e-Devlet üzerinden alınan belge) ve iki adet fotoğrafı kapsayan başvuru dosyası ile bilimsel çalışma ve yayınlarını kapsayan 1 takım dosyayı fiziki olarak ve ayrıca bu dosyalardaki dokümanların tamamının PDF formatında CD veya Flash Belleğe aktarılıp, 4 (dört) adet olarak Üniversitemiz ilgili akademik birimlerine teslim etmeleri gerekmektedir.
                                - Başvuruda bulunan adayların yayın dosyalarının içerisine Üniversitemiz Akademik Yükseltme ve Atama Ölçütlerinde kullanılan puanlama tablolarına göre hazırlayacakları puanlama tablosu eklemeleri gerekmektedir.
                                <br><br>
                                Not:
                                - Yükseköğretim Kuramları Yabancı Dil (YÖKDİL) veya YDS sınavından en az 65 (altmışbeş) puan ya da eşdeğeri kabul edilen bir dil sınavından en az 65 (altmışbeş) puanın muadili bir puan almış olmak ve Çalışma alanı bir yabancı dil olan bölümlerde çalışma alanı dışındaki başka bir dilde eşdeğeri kabul edilen merkezi bir yabancı dil sınavından en az 65 (altmış beş) puan veya muadili bir puan almış olmak şartı aranır.
                                İlanımız Üniversitemiz (www.erciyes.edu.tr) web sayfasının duyurular kısmında mevcut olup, Üniversitemiz web sitesinde yapılacak olan duyurular tebligat niteliğindedir
                            </p>
                        </div>
                    </div>
                </div> <!-- portlet end -->

                <div class="card portlet portlet-scroll" id="portlet1">
                    <div class="card-header baslik">
                        <strong name="baslik">Malatya Turgut Özal Üniversitesi</strong>
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
                                <p class="date">21 Mayıs 2021</p>
                            </h5>
                            <p class="card-text necessity">
                                Malatya Turgut Özal Üniversitesi, son başvuru tarihi 4 haziran 2021, Tıp Fakültesi, Tıp Fakültesi mezunu olup Halk Sağlığı alanında doktora yapmış ve Halk Sağlığı alanında doçentlik unvanını almış olmak. Sağlık sisteminin güçlendirilmesiyle ilgili uluslararası projelerde görev almış Profesör, Doçent, Doktor, Öğretim Üyesi 9 akademik personel alacak.
                            </p>
                            <p class="card-text icerik">
                                Malatya Turgut Özal Üniversitesi Rektörlüğünden:
                                ÖĞRETİM ÜYESİ ALIM İLANI
                                Üniversitemiz birimlerinde istihdam edilmek üzere 2547 sayılı Yükseköğretim Kanunu ve Öğretim Üyeliğine Yükseltilme ve Atanma Yönetmeliği ilgili maddeleri uyarınca ve Üniversitemiz Öğretim Üyeliğine Yükseltilme ve Atanma Yönergesi hükümlerini sağlamış olmak koşulu ile ilanda belirtilen özel koşullar doğrultusunda Öğretim Üyesi alınacaktır. (Adayların diğer ilgili mevzuatlardaki şartları da taşımaları gerekmektedir.) ilan olunur.
                                <br><br>
                                BAŞVURUDA İSTENEN BELGELER- Profesör adayları: Başvuru Formundan (www.ozal.edu.tr adresinden erişebilirsiniz) 2 adet doldurarak, özgeçmişlerini, nüfus cüzdan fotokopisi, hizmet belgelerini, 2 adet biyometrik fotoğraf, lisans, yüksek lisans, doktora/uzmanlık/sanatta yeterlilik ve doçentlik belgelerini (1 takım Noter veya Resmi Kurumlarca onaylanmış mühürlü örneği veya e-Devlet üzerinden alınan karekodlu belgeler),Üniversitemiz Öğretim Üyeliğine Yükseltilme ve Atanma Yönergesine göre hazırlanacak belgeler, yayın listelerini (başlıca araştırma eseri belirtilmelidir), bilimsel çalışma ve yayınlarını kapsayan eserlerden 1 (bir) adet dosya ve bu dosyadaki belgelerin tümünü içeren PDF formatında hazırlanmış olan 6 (altı) adet taşınabilir bellek ekleyerek Üniversitemiz Personel Daire Başkanlığına,
                                <br><br>
                                - Doçent adayları Başvuru Formundan (www.ozal.edu.tr adresinden erişebilirsiniz) 2 adet doldurarak, özgeçmişlerini, nüfus cüzdan fotokopisi, hizmet belgelerini, 2 adet biyometrik fotoğraf, lisans, yüksek lisans, doktora/uzmanlık/sanatta yeterlilik ve doçentlik belgelerini (1 takım Noter veya Resmi Kurumlarca onaylanmış mühürlü örneği veya e-Devlet üzerinden alınan karekodlu belgeler),Üniversitemiz Öğretim Üyeliğine Yükseltilme ve Atanma Yönergesine göre hazırlanacak belgeler, yayın listelerini, bilimsel çalışma ve yayınlarını kapsayan 1 (bir) adet dosya ve bu dosyadaki belgelerin tümünü içeren PDF formatında hazırlanmış olan 4 (dört) adet taşınabilir bellek ekleyerek Üniversitemiz Personel Daire Başkanlığına,
                                <br><br>
                                - Doktor Öğretim Üyesi adayları Başvuru Formundan (www.ozal.edu.tr adresinden erişebilirsiniz) 2 adet doldurarak, özgeçmiş, nüfus cüzdan fotokopisi, askerlik belgesi, lisans, yüksek lisans ve doktora/uzmanlık/sanatta yeterlilik belgelerini (1 takım Noter veya Resmi Kurumlarca onaylanmış mühürlü örneği veya e-Devlet üzerinden alınan karekodlu belgeler), 2 adet biyometrik fotoğraf, Üniversitemiz Öğretim Üyeliğine Yükseltilme ve Atanma Yönergesine göre hazırlanacak belgeler, yayın listesi, Bilimsel Çalışma ve Yayınlarını kapsayan eserlerden 1 (bir) adet dosya ve bu dosyadaki belgelerin tümünü içeren PDF formatında hazırlanmış olan 4 (dört) adet taşınabilir bellek ekleyerek Üniversitemizce ilanda adı geçen birime başvuracaklardır.
                                <br><br>
                                GENEL AÇIKLAMALAR
                                1- Yabancı Ülkelerden alınan diplomaların Üniversitelerarası Kurul veya Yükseköğretim Kurulu tarafından denkliğinin onaylanmış olması ve belgelendirilmesi şarttır. (1 takım Noter/Resmi Kurumlarca onaylanmış mühürlü ve ıslak imzalı örneği)
                                2- Adayların 657 sayılı Devlet Memurları Kanununun 48. maddesindeki genel şartlar ile ilanda belirtilen özel şartları taşımaları gerekmektedir.
                                3- Müracaat eden adayların öğretim üyeliği kadrolarına başvuru ile ilgili koşullara uyup uymadığı Üniversitemizce oluşturulacak "Ön Değerlendirme Komisyonu" tarafından incelenecek olup, bu inceleme sonucunda aranan koşulları taşıdığı tespit edilen adayların müracaatları kabul edilecektir.
                                4- Yapılan başvurular ilan edilen kadro derecesine haiz olması gerekmektedir. Başvuru yapan adayların koşullarının uygun olmadığının sonradan anlaşılması halinde atamaları yapılmayacak, atamaları yapılmış olanlar var ise atamaları iptal edilecektir.
                                5- Adaylar ilan edilen kadrolardan sadece bir tanesine başvuru yapabilirler.
                                6- Herhangi bir kamu kurumunda çalışanların (daha önce çalışıp ayrılsalar dahi), çalıştıkları kurumlarından alacakları onaylı "Hizmet Belgesini" dosyalarına eklemeleri gerekmektedir.
                                7- Üniversitemiz gerekli gördüğü takdirde ilanın her aşamasını iptal edebilir.
                                8- Başvuru süresi bu ilanın yayım tarihinden itibaren 15 gün olup, başvurular şahsen veya posta yolu ile yapılabilir. Posta yolu ile yapılacak başvuruların son başvuru tarihine kadar ilgili birimlerimize ulaşmış olması gerekmektedir. (Postadaki gecikmelerden Üniversitemiz sorumlu değildir.) Süresi içinde yapılmayan başvurular kabul edilmeyecektir.
                                9- Başvuru evrakları geri iade edilmeyecektir.
                                <br><br>
                                Başvuru Başlangıç Tarihi : 21.05.2021
                                Son Başvuru Tarihi         : 04.06.2021
                            </p>
                        </div>
                    </div>
                </div> <!-- portlet end -->

                <div class="card portlet portlet-scroll" id="portlet1">
                    <div class="card-header baslik">
                        <strong name="baslik">Malatya Turgut Özal Üniversitesi</strong>
                        <form action="profil.php" method="post"enctype="multipart/form-data" >
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
                            <h5 class="card-title altbaslik">Öğretim Elemanı Alım İlanı
                                <br><br>
                                <p class="date">20 Mayıs 2021</p>
                            </h5>
                            <p class="card-text necessity">
                                Malatya Turgut Özal Üniversitesi, son başvuru tarihi 4 haziran 2021, Okul Öncesi Öğretmenliği lisans mezunu olup Okul Öncesi Eğitimi tezli yüksek lisans yapmış olmak. Bilişsel gelişim alanında çalışmaları olan Öğretim Elemanı 3 akademik personel alacak.
                            </p>
                            <p class="card-text icerik">
                                Malatya Turgut Özal Üniversitesi Rektörlüğünden:
                                ÖĞRETİM ELEMANI ALIM İLANI
                                Üniversitemizin aşağıda belirtilen birimlerine; Öğretim Üyesi Dışındaki Öğretim Elemanı Kadrolarına Yapılacak Atamalarda Uygulanacak Merkezi Sınav ile Giriş Sınavlarına İlişkin Usul ve Esaslar Hakkında Yönetmelik, 2547 sayılı Yükseköğretim Kanunu ve 657 sayılı Devlet Memurları Kanunu'nun 48.maddesi hükümleri uyarınca öğretim elemanı alınacaktır.
                                İlan olunur.Başvuru için gerekli belgeler ve ayrıntılı bilgi https://ozal.edu.tr/tr/personel adresinde mevcuttur.
                                <br><br>
                                GENEL VE ÖZEL ŞARTLAR
                                1- 657 sayılı Kanunun 48 inci maddesinde belirtilen şartları taşımak
                                2- ALES'ten en az 70 puan almış olmak, Yükseköğretim Kurulu tarafından kabul edilen merkezi yabancı dil sınavından en az 50 puan veya eş değerliği kabul edilen bir sınavdan bu puan muadili bir puan almış olmak gerekir. Merkezi sınav muafiyetinden yararlanmayı talep edenlerin ön değerlendirme ve nihai değerlendirme aşamalarında ALES puanı 70 olarak kabul edilir.
                                3- Öğretim görevlisi kadrosuna başvuracak adaylarda en az tezli yüksek lisans derecesine sahip olmalıdır.
                                4- Araştırma Görevlisi kadrosuna başvurabilmek için sınavın yapıldığı yılın ocak ayının birinci günü itibarıyla otuz beş yaşını doldurmamış olmak gerekir. Devlet Yükseköğretim kurumlarının Araştırma Görevlisi kadrolarına başvurularda tezli yüksek lisans, doktora veya sanatta yeterlilik eğitimi öğrencisi olmak şartı aranır.
                                5- Meslek Yüksekokullarının Yükseköğretim Kurulu tarafından belirlenen uzmanlık alanlarına atanacak olanlarda en az tezli yüksek lisans derecesine sahip olmak ya da lisans mezunu olup belgelendirmek kaydıyla alanında en az 2 yıl tecrübe sahibi olmak şartları aranır.
                                <br><br>
                                MUAFİYET
                                1- Yükseköğretim Kurumlarında öğretim elemanları kadrolarında çalışmış veya çalışmakta olanlarda merkezi sınav şartı aranmaz.
                                2- Meslek Yüksekokullarının, bu yönetmeliğin 6. maddesinin 4. fıkrası kapsamındaki öğretim görevlisi kadroları haricindeki öğretim elemanı kadrolarına yapılacak başvurularda yabancı dil şartı aranmaz.
                                <br><br>
                                İSTENEN BELGELER VE ÖNEMLİ NOTLAR
                                Başvuruda İstenen Belgeler:
                                1-Öğretim Elemanı Kadrolarına Başvuru Formu. (www.ozal.edu.tr adresinden Personel Daire Başkanlığı sayfasına giriniz. Dokümanlar kısmında "Akademik Başvuru Formu"na tıklayarak erişebilirsiniz)
                                2- Özgeçmiş.
                                3- Lisans, yüksek lisans ve doktora/uzmanlık belgeleri ve öğrenci ise öğrenci belgesi (1 takım Noter/Resmi Kurumlarca onaylanmış mühürlü örneği veya e-Devlet üzerinden alınan karekodlu belgeler) (Yabancı yükseköğretim kuramlarından mezun olanların diplomalarının Yükseköğretim Kurulu Başkanlığınca denkliğini gösteren onaylı belgesi)
                                4- Lisans transkript belgesinin aslı veya kopyasının resmi makamlarca onaylanmış ıslak imzalı onaylı belgesi.
                                5- İki adet biyometrik fotoğraf.
                                6- ÖSYM sonuç açıklama sisteminden alınmış karekodlu ALES sonuç belgesi.
                                7- Yabancı Dil Belgesi (YDS, YÖKDİL veya eşdeğerliliği).
                                8- Askerlik Belgesi (e-Devlet çıktısı)
                                9- Varsa bilimsel çalışmalarını kapsayan dosya
                                10- Çalışmış olmak şartı istenen ilanlar için ilgili kurumdan alınmış ıslak imzalı belge ve SGK'dan alınmış prim gün sayısını ve iş kolunu gösterir ıslak imzalı belge
                                11- Ön ve nihai değerlendirme aşamalarında lisans mezuniyeti notunun hesaplanmasında kullanılacak 4'lük ve 5'lik not sistemlerinin 100'lük not sistemine dönüştürülmesinde Yükseköğretim Kurulunun eşdeğerlik tablosu kullanılacaktır.
                                12- Adaylar ilan edilen kadrolardan sadece birine müracaat edebilir.
                                13- Üniversitemiz gerekli gördüğü takdirde ilanın her aşamasını iptal edebilir.
                                14- Üniversitemiz sınav takviminde zorunlu hallerde değişiklik yapma hakkını saklı tutar. Üniversite internet sayfasından yapılan tüm duyurular tebligat mahiyetindedir. Kişilere ayrıca yazılı tebligat yapılmayacaktır.
                                15- Başvuru süresi bu ilanın yayım tarihinden itibaren 15 gün olup, başvurular şahsen veya posta yolu ile yapılabilir. Posta yolu ile yapılacak başvuruların son başvuru tarihine kadar ilgili birimlerimize ulaşmış olması gerekmektedir. (Postadaki gecikmelerden Üniversitemiz sorumlu değildir.) Süresi içinde yapılmayan başvurular, eksik belgeli dosyalar ve gecikmeler dikkate alınmayacaktır.
                                16- Başvuru evrakları geri iade edilmeyecektir.
                            </p>
                            
                        </div>
                    </div>
                </div> <!-- portlet end -->

                <div class="card portlet portlet-scroll" id="portlet1">
                    <div class="card-header baslik">
                        <strong name="baslik">Adıyaman Üniversitesi</strong>
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
                                <p class="date">20 Mayıs 2021</p>
                            </h5>
                            <p class="card-text necessity">
                                Adıyaman Üniversitesi, son başvuru tarihi 3 haziran 2021, Mühendislik Fakültesi, Tıp Fakültesi, Kadın Hastalıkları ve Doğum uzmanı olmak, Perinatoloji konusunda deneyimli, Profesör, Doçent, Doktor, Öğretim Üyesi 15 akademik personel alacak.
                            </p>
                            <p class="card-text icerik">
                                Adıyaman Üniversitesi Rektörlüğünden:
                                Üniversitemize, 2547 sayılı Kanun, "Öğretim Üyeliğine Yükseltilme ve Atanma Yönetmeliği" ve "Adıyaman Üniversitesi Akademik Yükseltilme ve Atanma İlkeleri Yönergesi" hükümlerine göre devamlı statüde çalıştırılmak üzere öğretim üyesi alınacaktır. Adayların, 657 sayılı Kanun'un 48. maddesindeki ve diğer ilgili mevzuatlardaki şartları taşımaları gerekmektedir. (Yabancı ülkelerden alınan diplomaların Üniversitelerarası Kurul'ca denkliğinin onaylanmış olması şarttır).
                                <br><br>
                                BAŞVURU SÜRECİ: Başvuru şartları için "Adıyaman Üniversitesi Akademik Yükseltilme ve Atanma İlkeleri Yönergesi" 16. Maddesi hükümleri geçerlidir. Müracaatlar ilan tarihinden itibaren 15 gün içerisinde yapılmalıdır. Profesör ve Doçent adaylarının Üniversitemiz Personel Daire Başkanlığı'na, diğer adayların ilgili birimlere; Şahsen başvurmaları gerekmektedir.
                                1- Profesör kadrosuna müracaat edeceklerin: Dilekçeleri ekinde; özgeçmiş, doçentlik belgesinin sureti, bilimsel çalışmalarının tamamını kapsayacak şekilde içeren dosyalarını (pdf formatında) 6 adet CD ve taşınabilir bellek; ayrıca 1 adet basılı dosya ile başvurmaları gerekmektedir.2- Doçent kadrosuna müracaat edeceklerin: Dilekçeleri ekinde özgeçmiş, doçentlik belgesinin sureti, bilimsel çalışmalarının tamamını kapsayacak şekilde içeren dosyalarını (pdf formatında) 4 adet CD ve taşınabilir bellek; ayrıca 1 adet basılı dosya başvurmaları gerekmektedir.
                                3- Doktor Öğretim Üyesi kadrosuna müracaat edeceklerin: Dilekçeleri ekinde, özgeçmiş, bilimsel çalışmalarının tamamını kapsayan dosyalarını (pdf formatında) 4 adet CD ve taşınabilir bellek; ayrıca 1 adet basılı dosya ile başvurmaları gerekmektedir. Doktor Öğretim Üyesi kadrolarına Doçentler başvuramazlar.
                            </p>
                        </div>
                    </div>
                </div> <!-- portlet end -->

                <div class="card portlet portlet-scroll" id="portlet1">
                    <div class="card-header baslik">
                        <strong name="baslik">Kırşehir Ahi Evran Üniversitesi</strong>
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
                                <p class="date">17 Mayıs 2021</p>
                            </h5>
                            <p class="card-text necessity">
                                Kırşehir Ahi Evran Üniversitesi, son başvuru tarihi 3 haziran 2021, Eğitim Fakültesi, Beden Eğitimi ve Spor Yüksekokulu, Doçentlik unvanını Eğitim Yönetimi alanında almış olmak. Eğitim yönetiminde pandemi, öğretmenlerin iş doyumu ve meta-analizle ilgili çalışmaları olan Öğretim Üyesi Alacak.
                            </p>
                            <p class="card-text icerik">
                                Kırşehir Ahi Evran Üniversitesi Rektörlüğünden:
                                ÖĞRETİM ÜYESİ ALIM İLANI
                                Üniversitemizin aşağıda belirtilen birimlerine 2547 sayılı Kanunun 23, 24 ve 26. maddeleri ile 12.06.2018 tarihli Resmi Gazete'de yayımlanarak yürürlüğe giren Öğretim Üyeliğine Yükseltilme ve Atanma Yönetmeliği'nin ilgili maddelerine dayanılarak hazırlanan ve Yükseköğretim Kurulu Başkanlığınca yayınlanan Kırşehir Ahi Evran Üniversitesi Öğretim Üyeliğine Yükseltilme ve Atama Yönergesi asgari şartları (Bakınız: http://pdb.ahievran.edu.tr/) ve 657 sayılı Devlet Memurları Kanununun 48. maddesi hükümleri uyarınca devlet hizmetine girmede aranan şartlara haiz Öğretim Üyeleri (Profesör, Doçent ve Doktor Öğretim Üyesi) alınacaktır.
                                <br><br>
                                BAŞVURUDA İSTENEN BELGELER: Adayın başvurduğu kadroya ait anabilim dalı, kadro derecesi ve tüm iletişim bilgilerini içeren dilekçe
                                Özgeçmiş
                                2 adet fotoğraf
                                Nüfus cüzdanı fotokopisi
                                Askerlik durum belgesi veya e-Devlet çıktısı
                                Diplomalarının tasdikli sureti veya e-Devletten alınan karekodlu mezuniyet belgeleri (lisans, yüksek lisans ve doktora)
                                Doçentlik belgesinin tasdikli sureti (Doçent ve Profesör kadrosuna başvuracaklar için)
                                Kamu hizmetinde bulunanlar için hizmet belgesi (daha önce çalışıp ayrılsalar dahi çalıştığı kurumdan alacakları onaylı ayrıntılı hizmet belgesi)
                                Kırşehir Ahi Evran Üniversitesi Öğretim Üyeliğine Yükseltilme ve Atamalara Değerlendirme Kapsamına alınacak faaliyetler ve puanlama sisteminde (Bakınız: http://pdb.ahievran.edu.tr/) yer alan formata uygun olarak hazırlanmış, (Profesör kadrosuna başvuracaklar için biri başlıca araştırma eserini içeren) yayın listesi(bütün yayın dosyaları CD formatında da hazırlanacaktır), bilimsel yayınları, yurtiçi ve yurtdışı kongre ve konferans bildirileri, yayın atıflarına ilişkin belgeler, eğitim-öğretim faaliyetleri, yönettiği doktora ve yüksek lisans çalışmaları ve diğer bilgileri içeren dosyalar.
                                Yukarıdaki belgeleri içeren, Profesörler 6 (altı), Doçentler ve Doktor Öğretim Üyeleri 4 (dört) adet dosya teslim edeceklerdir.
                                <br><br>
                                NOT:
                                - Yabancı ülkelerden alınan diplomaların Üniversitelerarası Kurulca denkliğinin onaylanmış olması gerekmektedir.
                                - Profesörler ve Doçentler daimi statüye atanacaktır.
                                - İlgili kadroya başvuran adayların başvuruları, Kırşehir Ahi Evran Üniversitesi Öğretim Üyeliğine Yükseltilme ve Atama Yönergesi gereğince, Akademik Değerlendirme Kurulu tarafından incelenerek yayın dosyaları asgari koşulları karşılamaları halinde kabul edilecektir.
                                - Doçent kadrolarına müracaat eden adayların "Kırşehir Ahi Evran Üniversitesi Öğretim Üyeliğine yükseltilme ve Atanma Yönergesi" uyarınca Üniversitelerarası Kurul tarafından oluşturulacak Jürilerce Üniversitemiz tarafından yapılacak Doçentlik sözlü sınavında başarılı olmaları gerekmektedir.
                                - Tıp Fakültesi kadrolarına başvuruda bulunacak adaylardan, halen Sağlık Bakanlığında görev yapanların mecburi hizmet yükümlülüklerinin olmadığını veya mecburi hizmet yükümlülüğü olanların bu yükümlülüklerinin son başvuru tarihinden itibaren 2 ay içerisinde biteceğini belgelendirmeleri zorunludur.
                                - %20 kotası ile başvuru yapılabilecek Doktor Öğretim Üyesi kadrosu bulunmamaktadır.
                                Başvuru Süresi: Başvurular ilanın yayın tarihi itibariyle 03 Haziran 2021 tarihi mesai bitimine kadar Profesör ve Doçent kadroları için Rektörlük (Personel Dairesi Başkanlığına), Doktor Öğretim Üyesi kadroları için ilgili akademik birime şahsen yapılacaktır. Posta ile yapılan başvurular ve eksik belgeli dosyalar kabul edilmeyecektir.
                            </p>
                        </div>
                    </div>
                </div> <!-- portlet end -->

               

                <div class="card portlet portlet-scroll" id="portlet1">
                    <div class="card-header baslik">
                        <strong name="baslik">Bursa Uludağ Üniversitesi</strong>
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
                                Bursa Uludağ Üniversitesi, son başvuru tarihi 1 haziran 2021, Güzel Sanatlar Fakültesi, Tıp Fakültesi, Lisansını Türk Dili ve Edebiyatı bölümünde, yüksek lisans ve doktorasını tiyatro eleştirmenliği ve dramaturji bölümünde tamamlamış olmak. Üniversitelerin tiyatro bölümlerinde on yıl ders verme tecrübesine sahip Öğretim Üyesi 27 akademik personel alacak.
                            </p>
                            <p class="card-text icerik">
                                Bursa Uludağ Üniversitesi Rektörlüğünden:
                                Üniversitemize bağlı birimlere 2547 sayılı Yükseköğretim Kanunu ve bu kanuna dayalı olarak çıkartılan yönetmelik hükümleri ile Üniversitemiz Senatosunun tespit ettiği atama kriterlerine göre öğretim elemanı alınacaktır.
                                <br><br>
                                1- İlanda yeralan Doçent kadrosu için Personel Daire Başkanlığına, Doktor Öğretim Üyesi kadrosu için ilgili birime ilan tarihinden itibaren 16 (onaltı) gün içerisinde başvurmak gerekmektedir.
                                2- Doçentler 2547 sayılı Kanunun 36.maddesinin (a) bendinin 1.fıkrasına göre devamlı statüde çalıştırılmak üzere alınacaktır.3- Adaylar 657 sayılı Kanunun 48.maddesindeki şartlarını taşımak zorundadır.
                                4- Başvurular şahsen yapılacaktır. Posta ile yapılan başvurular dikkate alınmayacaktır.
                                5- İlan edilen kadroya ataması yapılan adaylar görev aldıkları birimin bulunduğu yerde ikamet etmek zorundadır.
                                6- İstenen belgeler başvuru dilekçe örneğinde belirtilmiş olup, yayınlarına UAKBİS veya BUAKBİS sisteminden erişilemeyen adaylar yayın dosyaları ile başvuracaktır. (Dilekçe örneği ilan metni ekinde http://www.uludag.edu.tr ve http://www.uludag.edu.tr/personel adresinde yayınlanmıştır)
                                7- Bursa Uludağ Üniversitesi Rektörlüğü yayınlanmış ilanı her aşamasında iptal edebilir.
                                <br><br>
                                BAŞVURU İÇİN GEREKLİ BELGELER
                                (x) 1- Başvuru dilekçesi.
                                (x) 2- Puanlı Yayın Listesi
                                (x) 3- Özgeçmiş
                                (x) 4- Öğrenim Belgeleri (Dr.Öğretim Üyesi adayları Doktora, Doçent adayları için Doçentlik Belgesi)
                                (x) 5- Yabancı Dil Belgesi (Dr.Öğretim Üyesi adayları için)
                                6- Sabıka Kaydı (1 adet)
                                (x) 7- Onaylı hizmet belgesi (Bursa Uludağ Üniversitesi personeli çalıştıkları birimden, Bursa Uludağ Üniversitesinde çalışmayan adaylar çalıştıkları veya ayrıldıkları kurumdan alacaktır)
                                (x) 8- Nüfus Cüzdanı Fotokopisi
                                9- Fotoğraf (2 adet)
                                (x) 10- Yayın Dosyası (Puanlı Yayın Listesine Göre Sıralanmış)
                                * Yayınlarına UAKBİS veya BUAKBİS Sisteminden erişilebilen adaylar (Bursa Uludağ Üniversitesi Öğretim Elemanları) dosya teslim etmeyecektir.
                                * Yayınlarına UAKBİS veya BUAKBİS Sisteminden erişilemeyen adaylar; Doçent ve Dr.Öğretim Üyesi kadrosu adayları 4 adet dosya teslim edecektir.
                                NOT :(X) İle işaretli belgeler ve yayın dosyası Bursa Uludağ Üniversitesi personelinden istenmeyecek olup UAKBİS-BUAKBİS Sisteminden alınacaktır. Bu nedenle adayların, istenen bilgilerin son durumunu sisteme girmeleri gerekmektedir.



                                Yayın Tarihi ve Yeri : 17.05.2021 Pazartesi - resmigazete.gov.tr
                                Son Başvuru Tarihi : 01.06.2021 Salı
                                4146/1-1
                            </p>
                        </div>
                    </div>
                </div> <!-- portlet end -->

                <div class="card portlet portlet-scroll" id="portlet1">
                    <div class="card-header baslik">
                        <strong name="baslik">Gaziantep Üniversitesi</strong>
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
                                <p class="date">17 Mayıs 2021</p>
                            </h5>
                            <p class="card-text necessity">
                                Gaziantep Üniversitesi, son başvuru tarihi 31 mayıs 2021, Doçentlik unvanım ilgili alanda alınış ve Öğretmenlik mesleği veya öğretmen yetiştirme alanında çalışmalar yapmış Öğretim Üyesi alacak.
                            </p>
                            <p class="card-text icerik">
                                Gaziantep Üniversitesi Rektörlüğünden:

                                Üniversitemizin aşağıda belirlilen birimlerine, 2547 sayılı Kanun ile Öğretim Üyeliğine Yükseltilme ve Alanına Yönetmeliğinin ilgili maddeleri uyarınca öğretim üyesi alınacaktır.
                                <br><br>
                                İlan edilen kadrolara müracaat eden adayların başvurularının Üniversitemiz Senatosunca kabul edilen ve Yükseköğretim Kurulu Başkanlığınca onaylanan vc (http://www.gantcp.cdu.lr) adresindeki "Öğretim Üyeliğine Yükseltilme ve Atanma Kriterleri Yönergesine" uygun olması gerekmektedir. Bu kriterlere uygun olmayan başvurular kabul edilmeyecektir.
                                <br><br>
                                ^Profesör kadroları daimi statüde olup; adaylar başvurulan anabilim dalını ve başlıca araştırma eserini de belirten dilekçelerine ekleyecekleri, Doçentlik belgesi, öğrenim belgeleri, nüfus cüzdanı fotokopisi. Özgeçmiş, beyanname formu ile puanlama formu vc bilimsel çalışma vc yayınlarını kapsayan dosyalarının 1 (bir) takımını fiziksel ortamda; dosyadaki tüm bilgi ve belgeleri dc PDF formatında 7 (yedi) adet taşınabilir belleğe aktararak Rektörlüğümüz Personel Daire Başkanlığına başvuracaklardır.
                                <br>
                                'Doçent kadroları daimi statüde olup, adaylar başvurulan anabilim dalını belirten dilekçelerine nüfus cüzdanı fotokopisi, öğrenim belgeleri, özgeçmiş, beyanname formu ile puanlama formu ve Doçentlik belgesi ile bilimsel çalışma ve yayınlarını kapsayan dosyaların 1 (bir) takımını fiziksel ortamda; dosyadaki tüm bilgi ve belgeleri de PDF formatında 5 (beş) adet taşınabilir belleğe aktararak Rektörlük Personel Daire Başkanlığına başvuruda bulunacaklardır. Doçentlik kadrolarına başvuranlardan. Doçentlik unvanını Üniversitelerarası Kurulca sözlü sınava tabi tutulmadan almış olan adaylar: müracaat ettikleri Doçent kadroları için, Üniversitemizin talebi doğrultusunda, Üniversitelerarası Kurul tarafından oluşturulacak jüri üyelerince sözlü sınava tabi tutulacaklardır. Bu sınavdan başarılı olamayan adayların başvurulan geçersiz sayılacaktır.
                                <br>
                                'Doktor Öğretim Üyesi kadroları için adaylar; başvurulan anabilim dalını belirten dilekçelerine, nüfus cüzdanı fotokopisi, özgeçmiş, beyanname formu ile puanlama formu, yabancı dil belgesi, öğrenim belgelerinin onaylı sureti, ayrıca bilimsel çalışma vc yayınlarını kapsayan dosyaların 1 (bir) takımını fiziksel ortamda; dosyadaki tüm bilgi vc belgeleri de PDF formatında 5 (beş) adet taşınabilir belleğe aktararak, kadronun ilan edildiği birime başvuruda bulunacaklardır.
                                <br>
                                Profesör, Doçent ve Doktor Öğretim Üyesi kadrolarına başvuran adayların dosyaları Üniversitemiz "öğretim Üyeliğine Yükseltilme ve Atanma Kriterleri Yönergesinde" yer alan ve ^ek'örlüğümüzce kurulan Akademik Başvuru İnceleme Komisyonu (ABİK) tarafından değerlendirilecektir. Adaylar, ilana çıkılan kadrolardan yalnızca birine başvurabilecekler ve ilan şartlarında belirtilen hususların tamamını belgelendireceklerdir.
                                <br><br>
                                "İlan edilen Öğretim Üyesi kadrolarına atanmalarının yapılması halinde üniversitemizin Suriye'de bulunan birimlerinin ihtiyacı doğrultusunda görevlendirmeler yapılabilir.

                                İlanımızın başvuru süresi Resmi Gazetede yayımlanma tarihinden itibaren (15 (onbeş) gündür.
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
                            <h5 class="card-title altbaslik">Öğretim Elemanı Alım İlanı
                                <br><br>
                                <p class="date">17 Mayıs 2021</p>
                            </h5>
                            <p class="card-text necessity">
                                Karadeniz Teknik Üniversitesi, son başvuru tarihi 31 mayıs 2021, İngilizce Öğretmenliği alanında lisans derecesine sahip olmak. Alanında yüksek lisans yapmış olmak. En az 4 yıl süre ile üniversitelerde çalışmış Öğretim Elemanı 3 akademik personel alacak.
                            </p>
                            <p class="card-text icerik">
                                Karadeniz Teknik Üniversitesi Rektörlüğünden:
                                Üniversitemizin aşağıda belirtilen birimlerine; Öğretim Üyesi Dışındaki Öğretim Elemanı Kadrolarına Yapılacak Atamalarda Uygulanacak Merkezi Sınav ile Giriş Sınavlarına İlişkin Usul ve Esaslar Hakkında Yönetmelik, 2547 sayılı Yükseköğretim Kanunu ve 657 sayılı Devlet memurları Kanunu'nun 48. maddesi hükümleri uyarınca personel alınacaktır.
                                <br><br>
                                GENEL ŞARTLAR
                                1- 657 Sayılı Kanunun 48 inci maddesinde belirtilen şartları taşımak.2- ALES'ten en az 70 (lisans mezuniyeti hangi alanda ise o alandaki ALES puan türünden ya da ilan edilen bölüm/ana bilim dalı/program hangi alandan öğrenci alıyorsa o alandaki ALES puan türünden) Yükseköğretim Kurulu tarafından kabul edilen merkezi yabancı dil sınavından en az 50 puan veya eşdeğerliliği kabul edilen bir sınavdan bu puan muadili bir puan almış olmak gerekir. Merkezi sınav muafiyetinden yararlanmayı talep edenlerin ön değerlendirme ve nihai değerlendirme aşamalarında ALES puanı 70 olarak alınır.
                                3- Ön değerlendirme ve nihai değerlendirme aşamalarında lisans mezuniyeti notunun hesaplanmasında kullanılan 4'lük ve 5'lik not sistemlerinin 100'lük not sistemine eşdeğerliliği Yükseköğretim Kurulu kararıyla belirlenir. Diğer not sistemlerinin 100'lük not sistemine eşdeğerliliğine Üniversitemiz Senatosu karar verir.
                                4- Yabancı ülkelerden alınan diplomaların Üniversitelerarası Kurulca denkliğinin onaylanmış olması şarttır.
                                <br><br>
                                ÖZEL ŞARTLAR
                                1-Öğretim görevlisi kadrosuna başvuracak adaylarda en az tezli yüksek lisans derecesine sahip olmak veya lisans ve yüksek lisans derecesini birlikte veren programlardan mezun olmak şartı aranır.
                                <br><br>
                                MUAFİYETLER
                                1- Doktora veya tıpta, diş hekimliğinde, eczacılıkta ve veteriner hekimlikte uzmanlık ya da sanatta yeterlilik eğitimini tamamlamış olanlarda, meslek yüksekokullarının Yükseköğretim Kurulu tarafından belirlenen uzmanlık alanlarına atanacak olanlarda, yükseköğretim öğretim elemanı kadrolarında çalışmış veya çalışmakta olanlarda merkezi sınav (ALES) şartı aranmaz.
                                2- Meslek yüksekokullarının, Öğretim Üyesi Dışındaki Öğretim Elemanı Kadrolarına Yapılacak Atamalarda Uygulanacak Merkezi Sınav ile Giriş Sınavlarına İlişkin Usul ve Esaslar Hakkında Yönetmeliğin 6 ncı maddesinin dördüncü fıkrası kapsamındaki öğretim görevlisi kadroları haricindeki öğretim elemanı kadrolarına yapılacak başvurularda yabancı dil şartı aranmaz.
                                <br><br>
                                BAŞVURU SİSTEMİNE EKLENECEK BELGELER
                                1- pdb.ktu.edu.tr adresinde formlar kısmında yer alan "İlan Başvuru Dilekçesi (Öğretim Görevlisi-Araştırma Görevlisi)" doldurulmuş ve imzalanmış olarak. (ilan no mutlaka belirtilecektir)
                                2- Özgeçmiş.
                                3- Bir adet vesikalık fotoğraf.
                                4- Nüfus cüzdan fotokopisi.
                                5- Lisans diploması veya geçici mezuniyet belgesi fotokopisi.
                                6- Lisans transkript belgesi fotokopisi.
                                7- Yüksek Lisans diploması veya geçici mezuniyet belgesi fotokopisi.
                                8- ALES Belgesi (Sınav sonucunun açıklandığı tarih itibariyle son beş yıllık ALES belgesi geçerlidir) (ilan edilen kadroya bağlı olarak istenen birimler
                                9- Yabancı Dil Belgesi (YDS veya eşdeğerliliği YÖK Başkanlığı tarafından kabul edilen dil belgesi) (ilan edilen kadroya bağlı olarak istenen birimler için)
                                10- Deneyim sahibi olduğunun gösterir belge (kamuda çalışanlardan; onaylı hizmet cetveli ve ilgili alanda çalıştığını gösterir belge, özel sektörde çalışanlardan; SGK hizmet dökümü ve ilgili alanda çalıştığını gösterir belge) (ilan edilen kadroya bağlı olarak istenen birimler için)
                                11- Açıklama kısmındaki şartları taşıdığını gösterir diğer belgeler. (ilan edilen kadroya bağlı olarak istenen birimler için)
                                <br><br>
                                NOT:
                                1- e-Devlet sisteminden alınan belgeler kabul edilecektir. Belgelerin onaylı olması zorunlu değildir. Atamaya hak kazanan adaylardan, atama öncesi belgelerin asıllarının veya onaylı hali istenecektir. Belgelerin asıllarını ibraz edemeyen adayların atamaları yapılmayacaktır.
                                2- İstenen belgelerde gerçeğe aykırı beyanda bulunduğu tespit edilenlerin sınavı geçersiz sayılacak ve atamaları yapılmayacaktır. Bunların atamaları yapılmış olsa dahi iptal edilecek ve hiçbir hak talep edilmeyecektir.
                                3- Başvurular https://online.ktu.edu.tr/ adresinden elektronik olarak yapılacaktır. Başvuru süresi içinde yapılmayan başvurular dikkate alınmayacaktır.
                                4- Sonuçlar (Ön Değerlendirme Sonuçları ve Nihai Değerlendirme Sonuçları) Üniversitemiz web sitesinde (www.ktu.edu.tr) ilan edilecek olup, ayrıca
                                bir tebliğ yapılmayacaktır.
                            </p>
                        </div>
                    </div>
                </div> <!-- portlet end -->


                <div class="card portlet portlet-scroll" id="portlet1">
                    <div class="card-header baslik">
                        <strong name="baslik">Kocaeli Üniversitesi</strong>
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
                                <p class="date">17 Mayıs 2021</p>
                            </h5>
                            <p class="card-text necessity">
                                Kocaeli Üniversitesi, son başvuru tarihi 31 mayıs 2021, Mühendislik Fakültesi Harita Mühendisliği Uzaktan Algılama, Doçentliğini Harita Mühendisliği alanında almış olmak ve uzaktan algılama konularında çalışmalar yapmış olmak.
                            </p>
                            <p class="card-text icerik">
                                Kocaeli Üniversitesi Rektörlüğünden:
                                ÖĞRETİM ÜYESİ ALIM İLANI
                                Üniversitemizin aşağıda belirtilen birimlerine 2547 sayılı Kanun'un ilgili maddeleri ile bu kanuna dayanılarak Yükseköğretim Kurulu Başkanlığınca yayınlanan Öğretim Üyeliğine Yükseltilme ve Atama Yönetmeliğinin ilgili maddeleri uyarınca ve Üniversitemiz internet sayfasında yayımlanan "Akademik Personel Atama Yönergesi"nin koşullarını sağlamış olmak şartıyla öğretim üyesi alınacaktır.
                                <br> <br>
                                Profesör kadrosuna başvuracak adaylar tarafından;Doçentlik belgesi, özgeçmiş ve Üniversitemiz http://perdb.kocaeli.edu.tr/Akademik_personel_atama_yonergeleri.php adresinde bulunan Akademik Personel Atama Yönergesinde yer alan puanlama şablonunu doldurup, bilimsel çalışma ve yayınlarını da ekleyerek 6 takım fiziki olarak dosya hazırlanacaktır. Adaylar hazırlamış oldukları fiziksel dosya ile birlikte dosyadaki tüm bilgilere yer verilmek şartıyla 6 takım da (CD veya USB) taşınabilir belleğe ekleyerek sunacaklardır.
                                <br><br>
                                Doçent kadrosuna başvuracak adaylar tarafından;
                                Doçentlik belgesi, özgeçmiş ve Üniversitemiz http://perdb.kocaeli.edu.tr/Akademik_personel_atama_yonergeleri.php adresinde bulunan Akademik Personel Atama Yönergesinde yer alan puanlama şablonunu doldurup, bilimsel çalışma ve yayınlarını da ekleyerek 4 takım fiziki olarak dosya hazırlanacaktır. Adaylar hazırlamış oldukları fiziksel dosya ile birlikte dosyadaki tüm bilgilere yer verilmek şartıyla 4 takım da (CD veya USB) taşınabilir belleğe ekleyerek sunacaklardır. 2547 sayılı Kanun'un 24/d maddesi uyarınca, adaylar doçentlik sözlü sınavı için http://perdb.kocaeli.edu.tr/docentlik_sozlu_sinav.php adresinden gerekli belgelere ulaşabileceklerdir.
                                <br><br>
                                Doktor Öğretim Üyesi kadrosuna başvuracak adaylar tarafından;
                                Doktora diploması, özgeçmiş, yabancı dil belgesi ve Üniversitemiz http://perdb.kocaeli.edu.tr/Akademik_personel_atama_yonergeleri.php adresinde bulunan Akademik Personel Atama Yönergesinde yer alan puanlama şablonunu, doldurup, birlikte bilimsel çalışma ve yayınlarını da ekleyerek 4 takım fiziki olarak dosya hazırlanacaktır. Adaylar hazırlamış oldukları fiziksel dosya ile birlikte dosyadaki tüm bilgilere yer verilmek şartıyla 4 takım da (CD veya USB) taşınabilir belleğe ekleyerek sunacaklardır.
                                <br><br>
                                İSTENİLEN BELGELER
                                1- http://perdb.kocaeli.edu.tr/Formlar/Form_1b.pdf adresinde bulunan öğretim üyeleri başvuru formu 2 adet
                                2- Özgeçmiş
                                3- 2 adet vesikalık fotoğraf (son altı ay içinde çekilmiş),
                                4- Nufus Cüzdanı Fotokopisi
                                5- Yabancı Dil Belgesi
                                6- Diploma Fotokopileri
                                7- Doçentlik Belgesi(Profesör ve Doçent adayları için)
                                8- Herhangi bir kamu kurumunda çalışanlar (daha önce çalışıp ayrılmış dahi olsalar) çalıştıkları kurumdan alacakları onaylı hizmet belgesini müracaat belgelerine ekleyecekler.
                                <br><br>
                                AÇIKLAMALAR
                                1- Profesör ve Doçent kadroları devamlı statüdedir.
                                2- Başvurular şahsen yapılacak olup, başvuru süresi ilanın Resmi Gazete'de yayım tarihinden itibaren onbeşinci günü mesai bitimidir. İlana başvurular Kocaeli Üniversitesi Personel Daire Başkanlığına yapılacak ve posta ile yapılan başvurular kabul edilmeyecektir.
                                3- Müracaat eden adayların Kocaeli Üniversitesi öğretim üyeliği kadrolarına başvuru ile İlgili Üniversitemiz "Akademik Personel Atama Yönergesi'nde" belirtilen koşullara uyup uymadığı Üniversitemizce oluşturulacak "Ön Değerlendirme Komisyonu" tarafından incelenecek olup, bu inceleme sonucunda aranan koşulları taşıdığı tespit edilen adayların müracaatları kabul edilecektir.
                                4- Başvuru yapan adayların koşullarının uygun olmadığının sonradan anlaşılması halinde atamaları yapılmayacak ve ataması yapılmış olanlar ise iptal edilecektir.
                                5- Yurtdışından alınan diploma veya unvanların Üniversitelerarası Kurul'ca eşdeğerliliğinin yapılmış olması gerekmektedir.
                                6- Adaylar ilan edilen kadrolardan sadece bir tanesine başvuru yapabilirler.
                                <br><br>
                                Not:
                                -Başvuru tarihlerinin onbeşinci günü hafta sonu ve/veya resmi tatil gününe rast gelmesi halinde takip eden günün iş günü mesai bitimi son gün olarak değerlendirilecektir. -2547 sayılı Kanunun Ek.38 Maddesi uyarınca belirtilen, %20 kotası ile başvuru yapılabilecek doktor öğretim üyesi kadrosu bulunmamaktadır.
                                Başvuru Adresi:
                                Kocaeli Üniversitesi Umuttepe Kampüsü Kabaoğlu Mah. Prof. Baki Komsuoğlu Bulvarı Rektörlük Personel Daire Başkanlığı No:515 A İzmit/KOCAELİ
                            </p>
                        </div>
                    </div>
                </div> <!-- portlet end -->




                <a href="arsiv2.php" class="btn slide" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sonraki Sayfa"><i class="far fa-hand-point-right 3x"></i></a>

               
               
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


