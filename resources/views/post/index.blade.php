
<h1>Posts</h1>
<ul>@foreach($usuarios as $usuario)
    <li> Id: {{$usuario->id}}</li>
  <li> Nome: {{$usuario->Nome}}</li>
   <li>Email: {{$usuario->Email}}</li>
   @endforeach
</ul>