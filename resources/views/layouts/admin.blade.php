<!DOCTYPE html><!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2023 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
--><!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Azzuro Bikes</title>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('admin/vendors/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vendors/simplebar.css') }}">
    <!-- Main styles for this application-->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="{{ asset('admin/css/examples.css') }}" rel="stylesheet">
    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"></script>

    <!-- Datatables -->
    <script type="text/javascript" src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Sweet alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <!-- Doctor Appointment -->
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item">
            <a class="nav-link" href="">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('admin/vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>

            </svg> Kokpit<span class="badge badge-sm bg-info ms-auto"></span></a>
        </li>
      
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
              <svg class="nav-icon">
                  <use xlink:href="{{ asset('admin/vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}"></use>
              </svg> Produkty
            </a>

            <ul class="nav-group-items">
              <li class="nav-item">
                  <a class="nav-link" href=""><span class="nav-icon"></span> Lista produktów</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href=""><span class="nav-icon"></span> Dodaj produkt</a>
              </li>
      
            </ul>
        </li>
        <!-- categories -->
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('admin/vendors/@coreui/icons/svg/free.svg#cil-assistive-listening-system') }}"></use>
            </svg> Kategorie</a>
          <ul class="nav-group-items">
           
            <li class="nav-item">
                <a class="nav-link" href=""><span class="nav-icon"></span> Lista kategorii</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><span class="nav-icon"></span> Dodaj kategorie</a>
            </li>
          </ul>
        </li>


        <!-- admin.attributes.index -->
        <!-- Attributes -->
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('admin/vendors/@coreui/icons/svg/free.svg#cil-backspace') }}"></use>
            </svg> Dodatki</a>
          <ul class="nav-group-items">
           
            <li class="nav-item">
                <a class="nav-link" href=""><span class="nav-icon"></span> Lista dodatków</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><span class="nav-icon"></span> Utwórz dodatek</a>
            </li>
          </ul>
        </li>

        <!-- Discount -->
         
        <li class="nav-item">
            <a class="nav-link" href="">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('admin/vendors/@coreui/icons/svg/free.svg#cil-cut') }}"></use>

            </svg> Rabaty</a>
        </li>

        <!-- Orders -->
        <li class="nav-item"><a class="nav-link" href="">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('admin/vendors/@coreui/icons/svg/free.svg#cil-file') }}"></use>
            </svg> Zamówienia</a>
        </li>

        <!-- Order calendar -->
        <li class="nav-item">
            <a class="nav-link" href="">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('admin/vendors/@coreui/icons/svg/free.svg#cil-calendar-check') }}"></use>

            </svg> Kalendarz zamówień</a>
        </li>

      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
          </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg></a>
          <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a href="" class="nav-link">Zamówienia</a></li>
            <li class="nav-item"><a href="" class="nav-link">Produkty</a></li>
            
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                </svg></a></li>
          </ul>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown">
                <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md  d-flex">
                         <div  class="pe-2">
                           <span>
                             Witaj {{  $user->name }}
                           </span>
                         </div>
                         <div></div>
                        <img class="avatar-img" src="{{  asset('admin/assets/img/avatar.jpg')}}" alt="Witaj Łukasz">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="side-menu-link py-2 px-3">
                        <form method="POST" action="">
                          @csrf

                          <span class="pe-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
                        </span>
                        <span>
                            <button type="submit" class="logout-link-sn">{{  __('Log out') }}</button>
                        </span>
                          
                      </form>
                    </div>
                </div>

            </li>
          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            @php
              $allSegments  = request()->segments();
              $desiredPath = implode(' / ', array_slice($allSegments, 1));
            @endphp
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Kokpit</span>
              </li>
              <li class="breadcrumb-item active"><span>{{ $desiredPath }}</span></li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">

          @yield('content')

        </div>
      </div>
      <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2023 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
   <script src="{{ asset('admin/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/simplebar/js/simplebar.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- Plugins and scripts required by this view-->
   <!--  <script src="{{ asset('admin/vendors/chart.js/js/chart.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/@coreui/chartjs/js/coreui-chartjs.js') }}"></script> -->
    <script src="{{ asset('admin/vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
    
    <!-- <script src="{{ asset('admin/js/main.js') }}"></script> -->


  </body>
</html>