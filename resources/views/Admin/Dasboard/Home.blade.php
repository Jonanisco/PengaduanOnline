@extends('Admin/Dasboard/layout/app')

@section('title')
  Home
@stop

@section('content')

 <!-- Bagian Page Content -->
      <div class="col s9">


          <!-- Isi Content -->
          

          <div class="row">
        <div class="col s12 m12">
          <div class="card">
            <div class="card-content">
              <span class="card-title bold">Buat Postingan Baru</span>
              <p>
                  
                    <div class="row">
    <form class="col s12" action="{{ route('post.created') }}" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="first_name" type="text" class="validate" name="judul" value="{{ Request::old('judul') }}">
          <label for="first_name">Judul Postingan</label>
        </div>
        <div class="input-field col s6">
         
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">list</i>
          <select name="kategori" value="{{ Request::old('kategori') }}">
      <option value="" disabled selected>Pilih Kategori Artikel</option>
      <option value="Kerusakan Jalan">Kerusakan Jalan</option>
      <option value="Infrastruktur Kota">Infrastruktur Kota</option>
      <option value="Bencana Alam">Bencana Alam</option>
      <option value="Kriminalitas">Kriminalitas</option>
    </select>
    <label>Kategori Postingan</label>
  
<script type="text/javascript">
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('select').material_select();
});
</script>  
        </div>
        <div class="input-field col s6">
         
        </div>
      </div>
      
    <div class="row">
    
        <div class="input-field col s12">
          <i class="material-icons prefix">description</i>
          <textarea id="icon_prefix2" class="materialize-textarea" name="artikel">{{ Request::old('artikel') }}</textarea>
          <label for="icon_prefix2">Isi Postingan</label>
        </div>
    
  </div>
  <div class="row">
      <div class="file-field input-field col s6">
      <div class="btn  red accent-3">

        <span>Foto</span>
        <input type="file" name="foto_artikel">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">

      </div>
    </div>
    </div>
  @include('Admin/Dasboard/layout/error_message')
    
  </div>


              </p>
            </div>
            <div class="card-action">
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
              </button>


            </div>
            
            <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
          </div>
        </div>
      </div>




          

          <!-- Isi Content -->
        


          

        


      </div>

       




      <!-- Bagian Page Content -->

@endsection                