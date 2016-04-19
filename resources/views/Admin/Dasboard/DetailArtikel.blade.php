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
              <span class="card-title bold">Detail Artikel</span>
              <p>
          

                  <table class="responsive-table striped highlight">
                  <thead>
                 
                  </thead>
                  <tbody>


                   @foreach($DetailArtikel as $DetailArtikel)
                    <tr>
                        <td>Judul</td>
                        <td>:</td>
                        <td>{{ $DetailArtikel->judul }}</td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td>:</td>
                        <td>{{ $DetailArtikel->kategori }}</td>
                    </tr>
                    <tr>
                        <td>Penulis</td>
                        <td>:</td>
                        <td>{{-- $DetailArtikel->user->user --}}</td>
                    </tr>
                    <tr>
                        <td>Created At</td>
                        <td>:</td>
                        <td>{{ $DetailArtikel->created_at }}</td>
                    </tr>
                    <tr>
                        <td>Edited At</td>
                        <td>:</td>
                        <td>{{ $DetailArtikel->updated_at }}</td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td>:</td>
                        <td><img class="materialboxed" data-caption="{{ $DetailArtikel->judul }}" src="{{ route('artikel.gambar', ['namaGambar' => $DetailArtikel->gambar]) }}" width="50" height="90"></td>
                    </tr>
                    <tr>
                        <td>Artikel</td>
                        <td>:</td>
                        <td>{{ $DetailArtikel->artikel }}</td>
                    </tr>
                    <tr align="center">
                        <td colspan="3" align="center">
                          

                              <a href="{{ route('Artikel.Edit', ['post_id' => $DetailArtikel->id]) }}" class="modal-trigger waves-effect waves-light btn tooltipped blue accent-3" data-position="top" data-delay="50" data-tooltip="Ubah Artikel"><i class="material-icons">mode_edit</i></a> |

                              <a class="waves-effect waves-light btn tooltipped"  data-position="top" data-delay="50" data-tooltip="Simpan ke Draft" onclick="return confirm('Apakah kamu yakin ingin memindahkan artikel ini ke draft ?')"><i class="material-icons">library_books</i></a> | 

                              <a href="{{ route('post.delete', ['post_id' => $DetailArtikel->id]) }}"  data-position="top" data-delay="50" data-tooltip="Hapus Artikel"  class="waves-effect waves-light btn tooltipped red accent-3" onclick="return confirm('Apakah kamu yakin ingin menghapus artikel ini ?')"><i class="material-icons">delete</i></a>


                        </td>
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