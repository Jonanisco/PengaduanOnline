<!DOCTYPE html>
  <html>
    <head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{!! csrf_token() !!}" />
        <title>@yield('title')</title>
      @include('Admin/Dasboard/layout/head')
    </head>

    <body>

          <!-- Navbar goes here -->
          @include('Admin/Dasboard/layout/header')
          <!-- Navbar goes here -->

            <!-- Page Layout here -->
            <div class="row">
              
                    <!-- Bagian SideBar Kiri -->
                    @include('Admin/Dasboard/layout/sidebar')
                    <!-- Bagian SideBar Kiri -->
              

                    <!-- Isi Content -->
                    @yield('content')
                    <!-- Isi Content -->
                
            </div>

            <!-- End Of the Row -->

            

            <!-- Footer -->
            @include('Admin/Dasboard/layout/footer')
            <!-- Footer --> 
              


           
            <!-- Quick Navigasi -->
            @include('Admin/Dasboard/layout/quicnav')
            <!-- Quick Navigasi -->


            
                
            <!--Import jQuery before materialize.js-->
            @include('Admin/Dasboard/layout/jquery')
            <!--<script type="text/javascript" src="js/materialize.js"></script>-->
    </body>
  </html>