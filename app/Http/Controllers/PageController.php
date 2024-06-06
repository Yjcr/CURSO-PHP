<?php
namespace App\Http\Controllers;
use App\Models\Post;
// importamos el modelo para hacer un query a nuestra base de datos
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('vistas/home');
    }
    public function blog()
    {
        // $posts = [
        //     ['id'=> 1, 'title'=>'hi, world', 'slug'=>'aguamiel'],
        //     ['id'=> 2, 'title'=>"i don't want it", 'slug'=>'aquamarine'],
        // ];

        // $posts = Post::get();
        // esta linea de codigo nos permitira tomar cada registro de nuestra tabla como un ojeto
        
        // $posts = Post::first();
        // esta propiedad nos permite acceder al primer registro de nuestra bd

        // $posts = Post::find(7);
        // esta propiedad nos permite acceder a un registro bajo id 

        // $posts = Post::latest('id')->paginate();
        // esta linea de codigo establece que nuestro registros se visualizaran en orden descendente bajo un paginacion que toma en cuenta el id 
        $posts = Post::paginate();
        // dd($posts);
        // esta funcion nos permite visualizar el resultado de una consulta en nuestra db
        return view('vistas/blog',['posts'=>$posts]);
    }

//     public function post($slug)
//     {
//         $post = $slug;
//         return view('vistas/post',['post'=>$post]);
//     }
// }
    public function post(Post $post)
    // aca hacemos mencion al modelo, puesto que esta recibiendo un registro que fue seleccionado previamente en la vista
    {
        return view('vistas/post',['post'=>$post]);
    }
}
