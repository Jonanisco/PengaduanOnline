@extends('Admin/Dasboard/layout/app')

@section('title')
  Detail Artikel
@stop

@section('content')

 <!-- Bagian Page Content -->
      <div class="col s9">


          <!-- Isi Content -->

          <div class="row">

          <div class="card">
            <div class="card-content">
              <span class="card-title bold">Ubah Artikel</span>
              <p>
          

                  <table class="responsive-table striped highlight">
                  <thead>
                 
                  </thead>
                  <tbody>


                   @foreach($EditArtikel as $EditArtikel)
                    <tr>
                        <form class="col s12" action="{{ route('post.update.judul') }}" method="post">
                        <td>Judul</td>
                        <td>:</td>
                        <td>
                        <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate" name="judul" value="{{ $EditArtikel->judul }}">
                        </div>                        
                        </td>
                        <td>
                          <input type="hidden" value="{{ $EditArtikel->id }}" name="postId">  
                         <button data-position="top" data-delay="50" data-tooltip="Update"  class="waves-effect waves-light btn tooltipped orange accent-3" onclick="return confirm('Apakah kamu yakin ingin mengubah judul artikel ini ?')" type="submit" name="action"><i class="material-icons center">system_update_alt</i>
                         </button>
                          
                        </td>

                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                        </form>
                    </tr>
                    <tr>
                    <form class="col s12" action="{{ route('post.update.kategori') }}" method="post">
                        <td>Kategori</td>
                        <td>:</td>
                        <td>

                        <div class="input-field col s6">
          
                        <select name="kategori" value="{{ Request::old('kategori') }}">
                          <option value="" disabled selected>Pilih Kategori Artikel</option>
                          <option value="Kerusakan Jalan">Kerusakan Jalan</option>
                          <option value="Infrastruktur Kota">Infrastruktur Kota</option>
                          <option value="Bencana Alam">Bencana Alam</option>
                          <option value="Kriminalitas">Kriminalitas</option>
                        </select>
                        <label>{{ $EditArtikel->kategori }}</label>
                      
                        <script type="text/javascript">
                            $(document).ready(function(){
                            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                            $('select').material_select();
                        });
                        </script>  
                        </div>

                        
                        </td>
                        <td>
                          <input type="hidden" value="{{ $EditArtikel->id }}" name="postId">
                          <button data-position="top" data-delay="50" data-tooltip="Update"  class="waves-effect waves-light btn tooltipped orange accent-3" onclick="return confirm('Apakah kamu yakin ingin mengubah kategori artikel ini ?')" type="submit" name="action"><i class="material-icons center">system_update_alt</i>
                         </button>
                        </td>

                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                        </form>
                    </tr>
                    
                    <tr>
                        <form class="col s12" action="{{ route('post.update.gambar') }}" method="post" enctype="multipart/form-data">
                        <td>Gambar</td>
                        <td>:</td>
                        <td><img class="materialboxed" data-caption="{{ $EditArtikel->judul }}" src="{{ route('artikel.gambar', ['namaGambar' => $EditArtikel->gambar]) }}" width="50" height="90">

                        <div class="file-field input-field col s6">
      <div class="btn  red accent-3">

        <span>Foto</span>
        <input type="file" name="foto_artikel">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">

      </div>
    </div>

                        </td>

                        <td>
                          <button data-position="top" data-delay="50" data-tooltip="Update"  class="waves-effect waves-light btn tooltipped orange accent-3" onclick="return confirm('Apakah kamu yakin ingin mengubah gambar artikel ini ?')" type="submit" name="action"><i class="material-icons center">system_update_alt</i>
                         </button>
                        </td>
                        <input type="hidden" value="{{ $EditArtikel->id }}" name="postId">
                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                        </form>
                    </tr>
                    <tr>
                        <form class="col s12" action="{{ route('post.update.isi') }}" method="post">
                        <td>Artikel</td>
                        <td>:</td>
                        <td>

                        <div class="input-field col s6">
          
          <textarea id="icon_prefix2" class="materialize-textarea" name="artikel">{{ $EditArtikel->artikel }}</textarea>
          <label for="icon_prefix2">Isi Postingan</label>
        </div>

                        </td>
                        <td>
                          <input type="hidden" value="{{ $EditArtikel->id }}" name="postId">
                          <button data-position="top" data-delay="50" data-tooltip="Update"  class="waves-effect waves-light btn tooltipped orange accent-3" onclick="return confirm('Apakah kamu yakin ingin mengubah isi artikel ini ?')" type="submit" name="action"><i class="material-icons center">system_update_alt</i>
                         </button>
                        </td>
                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                        </form>
                    </tr>
                    
                  @endforeach


                  </tbody>
                  </table>

          
         
          



         
          

            








           </p>
           </div>
           </div>

            
          </div>
           

          @include('Admin/Dasboard/layout/error_message')
      </div>







      <script type="text/javascript">
        $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
    });
      </script>


      <!-- Bagian Page Content -->

      
@endsection                