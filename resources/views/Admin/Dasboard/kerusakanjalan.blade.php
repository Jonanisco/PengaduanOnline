@extends('Admin/Dasboard/layout/app')

@section('title')
  Kerusakan Jalan
@stop

@section('content')

 <!-- Bagian Page Content -->
      <div class="col s9">


          <!-- Isi Content -->

          <div class="row">

          <div class="card">
            <div class="card-content">
              <span class="card-title bold">Artikel Kerusakan Jalan</span>
              <p>
          
          
                <table class="responsive-table striped highlight">
                  <thead>
                    <tr>
                        <th data-field="no">No</th>
                        <th data-field="judul">Judul Artikel</th>
                        <th data-field="kategori">Kategori</th>
                        <th data-field="gambar">Gambar</th>
                        <th data-field="penulis">Di Tulis Oleh</th>
                        <th data-field="aksi" class="text center" align="center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php  $nomor = 1; ?>

                  @foreach($posts as $post)
                    <tr>
                      <td>{{ $nomor++ }}</td>
                      <!--<td>{{ substr($post->judul, 0, 5) }} ...</td>-->
                      <td><a href="{{ route('Artikel.Detail', ['post_id' => $post->id]) }}" class="tooltipped black-text" data-position="top" data-delay="50" data-tooltip="Lihat detail artikel ini" target="_blank">{{ $post->judul }}</a></td>

                      <td>{{ $post->kategori }}</td>

                      <td><img class="materialboxed" data-caption="{{ $post->judul }}" src="{{ route('artikel.gambar', ['namaGambar' => $post->gambar]) }}" width="50" height="90"></td>
                      <td>{{-- $post->user->username --}}</td>

                      <td align="center">
                        
                          <a href="#modal1" class="modal-trigger waves-effect waves-light btn tooltipped blue accent-3" data-position="top" data-delay="50" data-tooltip="Ubah Artikel"><i class="material-icons">mode_edit</i></a> |

                          <a class="waves-effect waves-light btn tooltipped"  data-position="top" data-delay="50" data-tooltip="Simpan ke Draft" onclick="return confirm('Apakah kamu yakin ingin memindahkan artikel ini ke draft ?')"><i class="material-icons">library_books</i></a> | 

                          <a href="{{ route('post.delete', ['post_id' => $post->id]) }}"  data-position="top" data-delay="50" data-tooltip="Hapus Artikel"  class="waves-effect waves-light btn tooltipped red accent-3" onclick="return confirm('Apakah kamu yakin ingin menghapus artikel ini ?')"><i class="material-icons">delete</i></a> 
                          

                      </td>
                    </tr>
                  @endforeach 
                  </tbody>
            </table>  
            {!! $posts->links() !!}
       <!--   @foreach($posts as $post)
            
              <div class="col s4 m4 l4">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="{{ URL::asset('materialize/images/office.jpg') }}">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">{{ $post->judul }}<i class="material-icons right">more_vert</i></span>
                  <p><a href="#">Lihat Artikel Penuh</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">{{ $post->judul }}<i class="material-icons right">close</i></span>
                  <p>{{ $post->artikel }}</p>
                </div>
                <div class="card-action">
                          <a href="{{ route('post.delete', ['post_id' => $post->id]) }}" class="waves-effect waves-light btn" onclick="return confirm('Apakah kamu yakin ingin menghapus artikel ini ?')">DELETE</a> |
                          <a class="waves-effect waves-light btn">DRAFT</a>
                </div>
              </div>
          </div>
            

           @endforeach -->

         


          
         
          



         
          

            








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

      <!-- Modal Structure -->
        <div id="modal1" class="modal modal-fixed-footer">
          <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
          </div>
        </div>

@endsection                