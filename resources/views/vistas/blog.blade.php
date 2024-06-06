@extends('vistas/section/template')
@section('content')
<style>
   a{
      text-decoration: none;
      color:green;
   }
   h1{
      display: flex;
      color: darkgrey;
   }
</style>
<h1>Listado de Post's, crack</h1>
    @foreach ($posts as $post)
     <p>
        <strong>{{ $post -> id }})</strong>
        <a href="{{ route('post',  $post -> slug ) }}">   
        <!-- aca redireccionamos al usuario a la pestana post, y a su vez el dato "slug"
        perteneciente al post. todo esto a traves de la funcion 'route'; la cual el primer parametro debe contener
        la ruta a la cual enviar la informacion, y el segundo el dato que vas a enviar. -->
           {{ $post->title }}
        </a>
     </p>
     <span>{{$post->user->name}}</span>
     @endforeach
     {{ $posts->links() }}
@endsection 