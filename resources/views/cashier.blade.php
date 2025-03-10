<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Dashboard</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('assets/tempad/plugins/fontawesome-free/css/all.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/floating_btn.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/tempad/dist/css/adminlte.min.css')}}" />
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('assets/tempad/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{asset('assets/tempad/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset('assets/tempad/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{asset('assets/tempad/plugins/jqvmap/jqvmap.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset('assets/tempad/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{asset('assets/tempad/plugins/daterangepicker/daterangepicker.css')}}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{asset('assets/tempad/plugins/summernote/summernote-bs4.min.css')}}">
        <script nonce="24b1c56c-ca8d-418e-8098-7723180c6061">
            (function(w,d){!function(bg,bh,bi,bj){bg[bi]=bg[bi]||{};bg[bi].executed=[];bg.zaraz={deferred:[],listeners:[]};bg.zaraz.q=[];bg.zaraz._f=function(bk){return async function(){var bl=Array.prototype.slice.call(arguments);bg.zaraz.q.push({m:bk,a:bl}')}};for(const bm of["track","set","debug"])bg.zaraz[bm]=bg.zaraz._f(bm);bg.zaraz.init=()=>{var bn=bh.getElementsByTagName(bj)[0],bo=bh.createElement(bj),bp=bh.getElementsByTagName("title")[0];bp&&(bg[bi].t=bh.getElementsByTagName("title")[0].text);bg[bi].x=Math.random();bg[bi].w=bg.screen.width;bg[bi].h=bg.screen.height;bg[bi].j=bg.innerHeight;bg[bi].e=bg.innerWidth;bg[bi].l=bg.location.href;bg[bi].r=bh.referrer;bg[bi].k=bg.screen.colorDepth;bg[bi].n=bh.characterSet;bg[bi].o=(new Date).getTimezoneOffset();if(bg.dataLayer)for(const bt of Object.entries(Object.entries(dataLayer).reduce(((bu,bv)=>({...bu[1],...bv[1]})),{})))zaraz.set(bt[0],bt[1],{scope:"page"});bg[bi].q=[];for(;bg.zaraz.q.length;){const bw=bg.zaraz.q.shift();bg[bi].q.push(bw)}bo.defer=!0;for(const bx of[localStorage,sessionStorage])Object.keys(bx||{}).filter((bz=>bz.startsWith("_zaraz_"))).forEach((by=>{try{bg[bi]["z_"+by.slice(7)]=JSON.parse(bx.getItem(by))}catch{bg[bi]["z_"+by.slice(7)]=bx.getItem(by')}}));bo.referrerPolicy="origin";bo.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bg[bi])));bn.parentNode.insertBefore(bo,bn)};["complete","interactive"].includes(bh.readyState)?zaraz.init():bg.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
        </script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

        <!-- Preloader -->
        <!--div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('assets/tempad/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div-->

            <!-- Navbar -->
        <!--nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links ->
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
            </ul>

            <!-- Right navbar links ->
            <ul class="navbar-nav ml-auto">
            <!-- Navbar Search ->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                    </div>
                </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu ->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start ->
                    <div class="media">
                    <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                        Brad Diesel
                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">Call me whenever you can...</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                    </div>
                    </div>
                    <!-- Message End ->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start ->
                    <div class="media">
                    <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                        John Pierce
                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">I got your message bro</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                    </div>
                    </div>
                    <!-- Message End ->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start ->
                    <div class="media">
                    <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                        Nora Silvester
                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">The subject goes here</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                    </div>
                    </div>
                    <!-- Message End ->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu ->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
                </a>
            </li>
            </ul>
        </nav-->
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('sidebar')

        @include('offcanvas')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- <div class="col-lg-3 col-6">
                    <!- small box ->
                    <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div> -->
                <!-- ./col -->
                <!-- <div class="col-lg-3 col-6">
                    <!- small box ->
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div> -->
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                </div>
                <!-- /.row -->
                
                <!-- Main row -->
                <div class="row">
                    <h1>Makanan</h1>
                    <!-- Left col -->
                    <!-- <section class="col-lg-7 connectedSortable"> -->
                    @foreach ($data as $menus)
                        @csrf
                        @if ($menus->type == "food")
                            <section class="col connectedSortable">
                            
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('assets/images/image.png')}}" 
                                    alt="Card image" style="width:50%">
                                
                                    <div class="card-body">
                                        <h4 class="card-title">{{$menus -> name}}</h4>
                                        <p class="card-text">{{ $menus -> price }}</p>
                                        <a href="#" class="btn btn-warning add-to-cart" 
                                        data-name="{{ $menus -> name }}" 
                                        data-price="{{ $menus -> price }}" 
                                        data-id="{{ $menus -> id }}" 
                                        data-image="{{asset('assets/images/'. $menus->image)}}">
                                        To the cart</a>
                                    </div>
                                </div>
                            
                            </section>
                        @endif
                    @endforeach
                    
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <!-- <section class="col-lg-5 connectedSortable">

                    </section> -->
                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
                <div class="row">
                    <h1>Minuman</h1>
                    @foreach ($data as $menus)
                        @csrf
                        @if ($menus->type == "drink")
                            <section class="col connectedSortable">
                            
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('assets/images/image.png')}}" 
                                    alt="Card image" style="width:50%">
                                
                                    <div class="card-body">
                                        <h4 class="card-title">{{$menus -> name}}</h4>
                                        <p class="card-text">{{ $menus -> price }}</p>
                                        <a href="#" class="btn btn-warning add-to-cart" 
                                        data-name="{{ $menus -> name }}" 
                                        data-id="{{ $menus -> id }}" 
                                        data-price="{{ $menus -> price }}" 
                                        data-image="{{asset('assets/images/'. $menus->image)}}">
                                        To the cart</a>
                                    </div>
                                </div>
                            
                            </section>
                        @endif
                    @endforeach
                    
                </div>
            </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="#">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" 
                src="https://app.sandbox.midtrans.com/snap/snap.js" 
                data-client-key="{{ config('services.midtrans.clientKey') }}">
        </script>
        <!-- Insert Item to The Order Canvas -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Ambil data cart dari localStorage atau buat array kosong jika belum ada
                let cart = JSON.parse(localStorage.getItem("cart")) || [];

                const cartItems = document.getElementById('cart-items');
                const buttons = document.querySelectorAll('.add-to-cart');

                // Fungsi untuk menyimpan cart ke localStorage
                function saveCart() {
                    localStorage.setItem("cart", JSON.stringify(cart));
                }

                // Fungsi untuk merender tampilan cart
                function renderCart() {
                    // Jika cart kosong, tampilkan teks default
                    if (cart.length === 0) {
                        cartItems.innerHTML = '<p>No items in the cart.</p>';
                        return;
                    }

                    // Bersihkan tampilan cart
                    cartItems.innerHTML = '';

                    let grandTotal = 0;

                    cart.forEach(item => {
                        const itemTotal = item.price * item.quantity;
                        grandTotal += itemTotal;

                        const itemDiv = document.createElement('div');
                        itemDiv.classList.add('cart-item');
                        itemDiv.style.display = 'flex';
                        itemDiv.style.alignItems = 'center';
                        itemDiv.style.justifyContent = 'space-between';
                        itemDiv.style.marginBottom = '10px';

                        itemDiv.innerHTML = `
                            <div style="display: flex; align-items: center;">
                                <img src="${item.image}" alt="${item.name}" style="width: 50px; height: 50px; margin-right: 10px;">
                                <div>
                                    <div>${item.name}</div>
                                    <div>Harga: Rp${item.price.toLocaleString()}</div>
                                    <div>Total: Rp${itemTotal.toLocaleString()}</div>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <input type="number" min="1" value="${item.quantity}" style="width: 50px; margin-right: 10px;" 
                                    onchange="updateQuantity(${item.id}, this.value)">
                                <button class="btn btn-danger btn-sm remove-item">Hapus</button>
                            </div>
                        `;

                        itemDiv.querySelector('.remove-item').addEventListener('click', function () {
                            removeItem(item.id);
                        });

                        cartItems.appendChild(itemDiv);
                    });

                    // Tampilkan total keseluruhan cart
                    const totalDiv = document.createElement('div');
                    totalDiv.style.marginTop = '20px';
                    totalDiv.innerHTML = `<strong>Total Keseluruhan: Rp${grandTotal.toLocaleString()}</strong>`;
                    cartItems.appendChild(totalDiv);
                }

                // Fungsi untuk menambahkan item ke cart
                function addToCart(itemData) {
                    const existingItem = cart.find(item => item.id === itemData.id);

                    if (existingItem) {
                        existingItem.quantity += itemData.quantity;
                    } else {
                        cart.push(itemData);
                    }

                    saveCart();  // Simpan ke localStorage
                    renderCart();
                }

                // Fungsi untuk menghapus item dari cart
                function removeItem(itemId) {
                    cart = cart.filter(item => item.id !== itemId);
                    saveCart();  // Simpan ke localStorage
                    renderCart();
                }

                // Fungsi global untuk update quantity
                window.updateQuantity = function(itemId, newQty) {
                    newQty = parseInt(newQty);
                    if (newQty < 1) return;

                    const item = cart.find(item => item.id === itemId);
                    if (item) {
                        item.quantity = newQty;
                        saveCart();  // Simpan ke localStorage
                        renderCart();
                    }
                }

                // Menambahkan event listener ke setiap tombol add-to-cart
                buttons.forEach(button => {
                    button.addEventListener('click', function (e) {
                        e.preventDefault();

                        const id = parseInt(this.getAttribute('data-id'));
                        const name = this.getAttribute('data-name');
                        const image = this.getAttribute('data-image');
                        const price = parseFloat(this.getAttribute('data-price'));

                        const itemData = { id, name, image, price, quantity: 1 };

                        addToCart(itemData);
                    });
                });

                // Render cart awal dari localStorage
                renderCart();
            });

        </script>
        <!-- ./Insert Item to The Order Canvas -->
        <!-- jQuery -->
        <script src="{{asset('assets/tempad/plugins/jquery/jquery.min.js')}}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{asset('assets/tempad/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('assets/tempad/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- ChartJS -->
        <script src="{{asset('assets/tempad/plugins/chart.js/Chart.min.js')}}"></script>
        <!-- Sparkline -->
        <script src="{{asset('assets/tempad/plugins/sparklines/sparkline.js')}}"></script>
        <!-- JQVMap -->
        <script src="{{asset('assets/tempad/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('assets/tempad/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{asset('assets/tempad/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
        <!-- daterangepicker -->
        <script src="{{asset('assets/tempad/plugins/moment/moment.min.js')}}"></script>
        <script src="{{asset('assets/tempad/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{asset('assets/tempad/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <!-- Summernote -->
        <script src="{{asset('assets/tempad/plugins/summernote/summernote-bs4.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('assets/tempad/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js?v=3.2.0"></script>
        <!-- AdminLTE for demo purposes -->
        <!-- <script src="{{asset('assets/tempad/dist/js/demo.js')}}"></script> -->
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{asset('assets/tempad/dist/js/pages/dashboard.js')}}"></script>
    </body>
</html>