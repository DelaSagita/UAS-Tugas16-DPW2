<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{url('public')}}/app/images/favicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>DS. WOMEN'S SHOES</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="{{url('public')}}/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{url('public')}}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('public')}}/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <!-- header section strats -->
  @include('client.section.header')
  <!-- end header section -->
  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Latest Blog
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="{{url('public')}}/app/images/b2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
              Shoes Fashion
              </h5>
              <p>
                Salah satu fashion untuk memaksimalkan penampilan cantik wanita adalah sepatu. Sepatu menjadi hal penting yang perlu diperhatikan sebelum bepergian.Salah satu yang paling digemari adalah sepatu sneakers remaja perempuan maupun dewasa.Sneakers memiliki tingkat kenyamanan lebih dibandingkan dengan jenis sepatu lain.Sepatu sneakers ini sebenarnya bukan saja bisa digunakan untuk berolahraga. Tapi sepatu ini juga cocok digunakan dalam segala aktivitas lain. Berjalan-jalan ke mal, bekerja, hingga bersantai. Bahkan sneakers kini bisa digunakan untuk menghadiri acara pernikahan.

              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="{{url('public')}}/app/images/b3.jpg" alt="">
            
            </div>
            <div class="detail-box">
              <h5>
               Shoes Fashion
              </h5>
              <p>
                Salah satu fashion untuk memaksimalkan penampilan cantik wanita adalah sepatu. Sepatu menjadi hal penting yang perlu diperhatikan sebelum bepergian.Salah satu yang paling digemari adalah sepatu sneakers remaja perempuan maupun dewasa.Sneakers memiliki tingkat kenyamanan lebih dibandingkan dengan jenis sepatu lain.Sepatu sneakers ini sebenarnya bukan saja bisa digunakan untuk berolahraga. Tapi sepatu ini juga cocok digunakan dalam segala aktivitas lain. Berjalan-jalan ke mal, bekerja, hingga bersantai. Bahkan sneakers kini bisa digunakan untuk menghadiri acara pernikahan.

              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- info section -->

  @include('client.section.info')

  <!-- end info section -->

  <!-- footer section -->
  @include('client.section.footer')
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{url('public')}}/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="{{url('public')}}/js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="{{url('public')}}/js/custom.js"></script>
 
</body>

</html>