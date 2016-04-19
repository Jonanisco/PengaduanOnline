<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{!! csrf_token() !!}" />

    <title>Login | Admin</title>

    <!-- Materialize css core -->

     <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ URL::asset('materialize/css/materialize.min.css') }}"  media="screen,projection"/>
    
      <link type="text/css" rel="stylesheet" href="{{ URL::asset('materialize/css/login.css') }}"  media="screen,projection"/>
      
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

      <body class="red accent-2">


        
    
<div id="login-page" class="row">
    <div class="col s12 z-depth-5 card-panel">
    <div class="progress red">
      <div class="indeterminate"></div>
  </div>
      <form class="login-form" action="{{ route('signin') }}"  method="POST">
        <div class="row">
          <div class="input-field col s12 center">
          <br>
            <img src="{{ URL::asset('materialize/images/email-open.png')}}" alt="">
            <p class="center login-form-text flow-text">Pengaduan Online</p>
          </div>
          </div>
          <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
                  <input id="username" name="username" type="text" class="validate" value="{{ Request::old('user') }}">
                  <label for="username">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
           <i class="material-icons prefix">lock</i>
                  <input id="password" name="password" type="password" class="validate">
                  <label for="password">Password</label>
          </div>
        </div>
        
        
        
        <div class="row">
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light col s12" type="submit" name="action">Login
      </button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
          </div>
        </div>
    </form>
    </div>
    </div>
    




        <footer class="page-footer">
          
          <div class="footer-copyright">
            <div class="container">
            &copy; 2016 Copyright | DISKOMINFO Provinsi Riau
            
            </div>
          </div>
        </footer>


    
    
    @if(count($errors) > 0)
    @foreach($errors->all() as  $error)
    <script>

    
    
    $.noConflict();
    jQuery(document).ready(function($){
            $.amaran({
                'theme'     :'colorful',
                'content'   :
                {
                
                bgcolor           :'#fafafa',
                color             :'#000',
                message           :'{{ $error }}',
                
              },
                'cssanimationIn'    :'shake',
                'cssanimationOut'   :'fadeOutRight',
            });
        });
    </script>
    @endforeach
    @endif


    @if(Session::has('message'))

    <script>

    
    
    $.noConflict();
    jQuery(document).ready(function($){

        
            $.amaran({
                'theme'     :'colorful',
                'content'   :
                {
                
                bgcolor           :'#fafafa',
                color             :'#000',
                message           :'{{ Session::get('message') }}',

                
              },
                'delay'     :5000,
                'cssanimationIn'    :'shake',
                'cssanimationOut'   :'fadeOutRight',
            });
        });
    </script>

                
                @endif




 

  </body>

  


      <!-- Bagian Page Content -->

      
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{ URL::asset('materialize/js/materialize.min.js') }} "></script>
     

</html>

