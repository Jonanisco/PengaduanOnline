<?php

namespace App\Http\Controllers;

use input;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Post;
use App\Http\Requests;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    
    public function getDasboard()
    {   
        return view('Admin.Dasboard.Home', ['posts']);
    }

    public function getHalamanKerusakanJalan()
    {

        //$posts = Post::paginate(3);
        $posts = Post::orderBy('created_at', 'desc')->paginate(4);
        //$posts_page = DB::table('posts')->paginate(4);
        return view('Admin.dasboard.kerusakanjalan', ['posts' => $posts]);

    }


    public function getDetailArtikel($post_id)
    {

        
        $DetailArtikel = Post::where('id', $post_id)->get();
        return view('Admin.dasboard.DetailArtikel', ['DetailArtikel' => $DetailArtikel]);


    }
    public function getEditArtikel($post_id)
    {

        
        $EditArtikel = Post::where('id', $post_id)->get();
        return view('Admin.dasboard.EditArtikel', ['EditArtikel' => $EditArtikel]);


    }


    public function CreatePost(Request $request)
    {
        //Validasi inputan
        $this->validate($request, [
            'judul' => 'required|unique:posts',
            'kategori' => 'required',
            'artikel' => 'required',
            'foto_artikel' => 'required|image|max:2048',
            
            
            ]);


        $post = new Post();
        $post->artikel = $request['artikel'];
        $post->judul = $request['judul'];
        $post->kategori = $request['kategori'];
        $pesan = "Ada yang salah, silahkan cek kolom atau file harus dengan gambar";

        $gambar = "default.jpg";

        $user = Auth::user();
            $file = $request->file('foto_artikel');
            
            $filename= $request['judul'] . ' - ' . $user->id . '.jpg'; 

            if($file){
                Storage::disk('artikel')->put($filename, File::get($file));
                $gambar = $filename;
            }

        $post->gambar = $gambar;

            if ($request->user()->posts()->save($post)){

            $pesan = "Artikel Berhasil Dimasukkan";
        }
        
        
        
        return redirect()->route('dasboard')->with('message',$pesan);
    
    }

    public function DeletePost($post_id)
    {
        //$post = Post::where('id','>', 2)
        $post = Post::where('id', $post_id)->first();



        //-- Hapus file dari storage  --//
        $namaFile = $post->gambar;              
        $path = storage_path().'/Artikel/';
        File::delete($path.$namaFile);
        //-----------------------------//
        $post->delete();

        return redirect()->route('kerusakanjalan')->with('deletepost', 'Artikel berhasil dihapus');
    }

    public function EditJudul(Request $request)
    {

        $this->validate($request, [
            'judul' => 'required'
           ]);

        $post = Post::find($request['postId']);
        $post->judul = $request['judul'];
        $post->update();
        return redirect()->route('Artikel.Edit', ['post_id' => $request['postId']])->with('message', 'Judul berhasil di ubah');

    }

    public function EditKategori(Request $request)
    {

        $this->validate($request, [
            'kategori' => 'required'
           ]); 

        echo $request['kategori']. " .Andreas Jonanisco";

        $post = Post::find($request['postId']);
        $post->kategori = $request['kategori'];
        $post->update();
        return redirect()->route('Artikel.Edit', ['post_id' => $request['postId']])->with('message', 'Kategori berhasil di ubah'); 

    }

    public function EditIsi(Request $request)
    {

        $this->validate($request, [
            'artikel' => 'required'
           ]);

        $post = Post::find($request['postId']);
        $post->artikel = $request['artikel'];
        $post->update();
        return redirect()->route('Artikel.Edit', ['post_id' => $request['postId']])->with('message', 'artikel berhasil di ubah');

    }

    public function EditGambar(Request $request)
    {

        $this->validate($request, [
            'foto_artikel' => 'required|image|max:2048'
           ]);

        $post = Post::find($request['postId']);

        //-- Hapus file dari storage  --//
        $namaFile = $post->gambar;              
        $path = storage_path().'/Artikel/';
        File::delete($path.$namaFile);
        //-----------------------------//
        
        $gambar = "default.jpg";

        $user = Auth::user();
            $file = $request->file('foto_artikel');
            
            $filename= $post->judul . ' - ' . $user->id . '.jpg'; 

            if($file){
                Storage::disk('artikel')->put($filename, File::get($file));
                $gambar = $filename;
                $post->gambar = $gambar;

                $post->update();
                return redirect()->route('Artikel.Edit', ['post_id' => $request['postId']])->with('message', 'Gambar berhasil di ubah');
            }

        

    }


    public function getGambar($namaGambar)
    {
        $file = Storage::disk('artikel')->get($namaGambar);
        return new Response($file, 200);
    }



}
