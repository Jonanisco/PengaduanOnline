@extends('Admin/Dasboard/layout/app')

@section('title')
  404 Page not Found
@stop

@section('content')

 <!-- Bagian Page Content -->
      <div class="col s9">


          <!-- Isi Content -->

          <div class="row" align="center">
              <div class="col s12 m12">
                <div class="card">
                  <div class="card-content">
                    
                    <p>

                        <img src="{{ URL::asset('materialize/images/404.png') }}">

                    </p>
                  </div>
            
            
            
                </div>
              </div>
          </div>
          <!-- Isi Content -->
      </div>

       




      <!-- Bagian Page Content -->

@endsection                