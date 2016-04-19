<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="csrf-token" content="{!! csrf_token() !!}" />
<title>Pengaduan Online</title>

 <!-- Materialize css core -->

     <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ URL::asset('materialize/css/materialize.min.css') }}"  media="screen,projection"/>
    
      
      
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Materialie css core -->
    
   
    <!-- Amaran JS -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'> 
    <link rel="stylesheet" href="{{ URL::asset('amaran/dist/css/amaran.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('amaran/dist/css/animate.min.css') }}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{ URL::asset('amaran/dist/js/jquery.amaran.min.js') }}"></script>
    <!-- Amaran JS -->
    
    
</head>
<body>


<!-- Div class slider -->


<div class="slider">
    <ul class="slides">
      <li>
        <img class="blue"> <!-- random image -->
        <div class="caption center-align">
    <br><br>
      <h1 class="header center">Pengaduan Online</h1>
      <div class="row center">
        <h5 class="header col s12 light">
        Lapor segala masalah anda ke Kami melalui website ini</h5>
      </div>
      
        </div>
      </li>
      <li>
        <img class="orange"> <!-- random image -->
        <div class="caption left-align">

          <h1>Pengaduan Online</h1>

          <h5 class="light grey-text text-lighten-3">Dengan adanya laporan dari masyrakat membantu kami menjadi lebih baik</h5>
        </div>
      </li>
      <li>
        <img class="green"> <!-- random image -->
        <div class="caption right-align">
          <h1>Pengaduan Online</h1>
          <h5 class="light grey-text text-lighten-3">Dengan adanya laporan dari masyrakat membantu kami menjadi lebih baik</h5>
        
        </div>
      </li>
      <li>
        <img class="red"> <!-- random image -->
        <div class="caption center-align">
          <h1>Pengaduan Online</h1>
          <h5 class="light grey-text text-lighten-3">Dengan adanya laporan dari masyrakat membantu kami menjadi lebih baik</h5>
        
        </div>
      </li>
    </ul>
    <nav class="white">
         
    </nav>
  </div>
  <script type="text/javascript">
      $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
  </script>


  <!-- Div class slider -->
  <br>
  <br>
  
  <!-- Main Konten -->
  <div class="row"> 

        <!-- SideBar-->
        <div class="col m9">
                   

            <div class="row">


                
                <div class="col s2 m4">
                        
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-teal">
                              <img class="activator" src="{{ URL::asset('materialize/images/background1.jpg') }}">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                              <p><i>- Oleh Andreas J
                              | - 23-03-2015</i></p>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                              <p><blockquote>

      This is an example quotation that uses the blockquote tag.
    Here is some more information about this product that is only revealed once clicked on.</blockquote>
    
    <h6>- Oleh Andreas J</h6></p>
    <hr>
    <i class="material-icons left">comment</i>Kolom Komentar

    <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">perm_identity</i>Agus</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">perm_identity</i>Sutarno</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">perm_identity</i>Jojo</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
  </ul>

  <hr>
  <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea  blue-text"></textarea>
          <label for="icon_prefix2">Komentar anda</label>
          <button class="btn waves-effect red col s12" type="submit" name="action">Submit
      </button>
        </div>
      </div>
    </form>
                            </div>
                            <div class="card-action">
                                <a class="waves-effect waves-light orange btn"><i class="material-icons left">comment</i>23 Komentar</a>
                            </div>
                        </div>

                </div>


                <div class="col s2 m4">
                        
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="{{ URL::asset('materialize/images/background1.jpg') }}">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                              <p><i>- Oleh Andreas J
                              | - 23-03-2015</i></p>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                              <p><blockquote>

      This is an example quotation that uses the blockquote tag.
    Here is some more information about this product that is only revealed once clicked on.</blockquote>
    
    <h6>- Oleh Andreas J</h6></p>
    <hr>
    <i class="material-icons left">comment</i>Kolom Komentar

    <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">perm_identity</i>Agus</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">perm_identity</i>Sutarno</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">perm_identity</i>Jojo</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
  </ul>
                            </div>
                            <div class="card-action">
                                <a class="waves-effect waves-light orange btn"><i class="material-icons left">comment</i>23 Komentar</a>
                            </div>
                        </div>

                </div>


                <div class="col s2 m4">
                        
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="{{ URL::asset('materialize/images/background1.jpg') }}">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                              <p><i>- Oleh Andreas J
                              | - 23-03-2015</i></p>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                              <p><blockquote>

      This is an example quotation that uses the blockquote tag.
    Here is some more information about this product that is only revealed once clicked on.</blockquote>
    
    <h6>- Oleh Andreas J</h6></p>
    <hr>
    <i class="material-icons left">comment</i>Kolom Komentar

    <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">perm_identity</i>Agus</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">perm_identity</i>Sutarno</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">perm_identity</i>Jojo</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
  </ul>
                            </div>
                            <div class="card-action">
                                <a class="waves-effect waves-light orange btn"><i class="material-icons left">comment</i>23 Komentar</a>
                            </div>
                        </div>

                </div>
            <a class="waves-effect waves-light btn blue right">lihat semua</a>
            </div>

            <div class="divider"></div>

               
        </div>
        <!-- SideBar-->

        <!--body -->
        <div class="col m3">

             <div class="card z-depth-3">
            <div class="card-content">
              <span class="card-title">Hallo !!</span>

              <p>
              <img src="{{ URL::asset('materialize/images/orang1.png') }}" width="120" height="160">
              Hallo, Nama saya Andreas, Selamat datang saya ucapkan buat anda, informasi yang anda berikan sangat membantu kami dalam mengatasi masalah yang ada di provinsi kita. Daftar dan login untuk memberi pengaduan kepada kami ya </p>
            </div>
            <div class="card-action">
              <a href="#modal1" class="modal-trigger">Masuk</a>
              <a href="#modal2" class="modal-trigger">Daftar</a>
            </div>
          </div>
            
        </div>
        <!--body -->

  </div>  
  <!-- Main Konten -->


 


<div id="footer" class="">
          <footer class="page-footer blue darken-2">

            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                
                  <h5 class="white-text">DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI RIAU </h5>
                  <p class="grey-text text-lighten-4">
                  
                  <br><i class="material-icons prefix">room</i> : Jl. Jendral Sudirman No. 460 Pekanbaru. 
                  <br><br><i class="material-icons prefix">call</i> : (+62) 0761 - 45505. 
                  <br><br><i class="material-icons prefix">email</i> : diskominfo@riau.go.id 
                  

                </div>
                
                
              </div>
            </div> 
            <div class="footer-copyright">
              <div class="container">
               &copy; 2016 Copyright  | DISKOMINFO Provinsi Riau . All Rights reserved. 


               <div class="right">
                  <!-- <table>
                    <tr>
                        <td><a href="https://twitter.com/diskominforiau" target="_blank" class="grey-text text-lighten-4"><i class="fa fa-twitter"></i></a></td>
                        <td><a href="https://www.facebook.com/pages/Dinas-Kominfo-Provinsi-Riau/104689396334224" class="grey-text text-lighten-4" target="_blank"><i class="fa fa-facebook"></i></td>
                        <td><a href="#" class="grey-text text-lighten-4" target="_blank"><i class="fa fa-google-plus"></i></a></td>
                    </tr>

                </table>-->
               </div>
              </div>
            </div>
          </footer>
    </div>



            <!--login modal-->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h2 class="center-align">Login</h2>
        
            <div class="divider"></div>
            <form class="col s12 m6 l6">
                <div class="row">
                    <div class="input-field col m10 offset-m1 blue-text">
                        <i class="material-icons prefix">perm_identity</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Username</label>
                    </div>
                    <div class="input-field col m10 offset-m1 blue-text ">
                        <i class="material-icons prefix">locked</i>
                        <input id="icon_password" type="password" class="validate">
                        <label for="icon_password">Password</label>
                    </div>
                    
                    
                </div>
            </form>
            <div class="divider"></div>
            <p class="center-align">
                <a href="#" class="btn btn-flat white modal-close">Cancel</a> &nbsp;
                <a href="#" class="waves-effect waves-white red btn btn-flat modal-action">Login</a>
            </p>
        
    </div>
</div>

<!--Signup modal-->
<div id="modal2" class="modal">
    <div class="modal-content">
        <h2 class="center-align">Daftar Akun</h2>
        
            <div class="divider"></div>
            <form class="col s12 m6 l6" action="{{ route('signup') }}" method="POST">
                <div class="row">
                    <div class="input-field col m10 offset-m1 blue-text">
                        <i class="material-icons prefix">perm_identity</i>
                        <input id="icon_prefix" type="text" class="validate" name="username" value="{{ Request::old('username') }}">
                        <label for="icon_prefix">Username</label>
                    </div>
                    <div class="input-field col m10 offset-m1 blue-text ">
                        <i class="material-icons prefix">locked</i>
                        <input id="icon_password" type="password" class="validate" name="password" value="{{ Request::old('password') }}">
                        <label for="icon_password">Password</label>
                    </div>
                    <div class="input-field col m10 offset-m1 blue-text">
                        <i class="material-icons prefix">email</i>
                        <input id="icon_prefix" type="email" class="validate" name="email" value="{{ Request::old('email') }}">
                        <label for="icon_prefix">Email</label>
                    </div>
                    <div class="input-field col m10 offset-m1 blue-text">
                        <i class="material-icons prefix">call</i>
                        <input id="icon_prefix" type="text" class="validate" name="nomor_hp" value="{{ Request::old('nomor_hp') }}">
                        <label for="icon_prefix">Nomor Hp</label>
                    </div>
                </div>
            
            <div class="divider"></div>
            <p class="center-align">
                <a href="#" class="btn btn-flat white modal-close">Cancel</a> &nbsp;
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </p>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
    </div>
</div>



<script type="text/javascript">
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
});
</script>


  <!--  Scripts-->
       
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{ URL::asset('materialize/js/materialize.min.js') }} "></script>
     

  </body>
  
</html>
    