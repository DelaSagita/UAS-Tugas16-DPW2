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

  <title>DS.WOMEN'S SHOES</title>


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
<section>
      <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">

                        <form action="{{ url('shoes/filter') }}" method="POST">
                            @csrf
                            <div class="form-group">
                              <div class="row">
                                <label for="" class="control-label">Nama produk</label>
                                <input type="text" class="form-control" name="nama" value="{{ $nama ?? '' }}">
                              </div>
                            </div>
                            <br>
                            <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
                        </form>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('shoes/filter2') }}" method="POST">
                            @csrf
                                <div class="col-md-12">
                                    <div class="row">
                                        <label for="" class="control-label">Harga Min</label>
                                        <input type="text" class="form-control" name="harga_min"
                                            value="{{ $harga_min ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <label for="" class="control-label">Harga Max</label>
                                        <input type="text" class="form-control" name="harga_max"
                                            value="{{ $harga_max ?? '' }}">
                                    </div>
                                </div>
                            <br>
                            <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
                        </form>
                    </div>
                    
                </div>
            </div>

            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Various</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Shoes</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Featured</option>
                                <option>A to Z</option>
                                <option>Item</option>
                            </select>
                        </div>
                    </div>
                </div>
               
                <div class="container">
                  <div class="row">
                   @foreach ($list_produk as $produk)
                  <div class="col-md-4 mt-6">
                    <div class="card mb-4 product-wap rounded-0 ">
                      <div class="card-body">
                          <img class="card-img rounded-0 img-fluid"
                            src="{{url("public/$produk->foto") }}">
                      </div>
                      <div class="card-body">
                        <a href="{{ url('/shop', $produk->id) }}"
                            class="h3 text-decoration-none">{{ $produk->nama }}</a>       
                          <hr>
                          <p>stok :{{ $produk->stok }}</p>                     
                        <p class="text-center mb-0">Rp.{{number_format($produk->harga)  }}</p>
                      </div>
                    </div>
                  </div>
                        @endforeach
                        </div>
                        </div>
                    </div>
                </div>
                <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="card-body">
				                        <div class="row">
				                          <div class="col-md-3">
				                            <label for="" class="control-label">Provinsi</label>
				                            <select name="" id="" class="form-control" onchange="gantiProvinsi(this.value)">
				                              <option value="">Pilih Provinsi</option>
				                              @foreach ($list_provinsi as $provinsi)
				                                  <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
				                              @endforeach
				                            </select>
				                          </div>
				                          <div class="col-md-3">
				                            <label for="" class="control-label">Kabupaten</label>
				                            <select name="" id="kabupaten" class="form-control" onchange="gantiKabupaten(this.value)">
				                              <option value="">Pilih Provinsi terlebih dahulu</option>
				                            </select>
				                          </div>
				                          <div class="col-md-3">
				                            <label for="" class="control-label">Kecamatan</label>
				                            <select name="" id="kecamatan" class="form-control" onchange="gantiKecamatan(this.value)">
				                              <option value="">Pilih Kabupaten terlebih dahulu</option>
				                            </select>
				                          </div>
				                          <div class="col-md-3">
				                            <label for="" class="control-label">Desa</label>
				                            <select name="" id="desa" class="form-control">
				                              <option value="">Pilih Kecamatan terlebih dahulu</option>
				                            </select>
				                          </div>                
				                        </div>
				                    </div>
						</div>
					</div>
				</div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                         {{ $list_produk->links() }}
                    </div>
                  </div>
                </div>
             
            </div>

        </div>
    </div>
    <!-- End Content -->
</section>

  <!-- end blog section -->

  <!-- info section -->
  @include('client.section.info')
  <!-- end info section -->

  <!-- footer section -->
  @include('client.section.footer')
  <!-- footer section -->

  
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>
@push('script')
    <script>
      function gantiProvinsi(id) {
        $.get("api/provinsi/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option +=`<option value="${item.id}">${item.name}<option/> `;
          }
          $("#kabupaten").html(option)
        });
      }
      function gantiKabupaten(id) {
        $.get("api/kabupaten/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option +=`<option value="${item.id}">${item.name}<option/> `;
          }
          $("#kecamatan").html(option)
        });
      }
      function gantiKecamatan(id) {
        $.get("api/kecamatan/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option += `<option value="${item.id}">${item.name}<option/>`;
          }
          $("#desa").html(option)
        });
      }
    </script>
@endpush
