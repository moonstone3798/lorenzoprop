@include('layouts.header')
<div class="mostrar">
        <h1>{{ $Compra->dirección }}</h1>
<br>
<div  class="modal"  id="img1">
<div class="imagenes">


<a href="#img5">&#60;</a>
    <img src="/compras/{{ $Compra->imagen }}" >
    <a href="#img2">></a>
</div>
</div>
<div  class="modal" id="img2">
<div class="imagenes">
    <a href="#img1">&#60;</a>
   <img src="/compras/{{ $Compra->imagen2 }}">
    <a href="#img3">></a>
</div>
</div>

<div  class="modal" id="img3">
<div class="imagenes">
    <a href="#img2">&#60;</a>
   <img src="/compras/{{ $Compra->imagen3 }}" >
    <a href="#img4">></a>
</div>
</div>
<div  class="modal" id="img4">
<div class="imagenes">
    <a href="#img3">&#60;</a>
   <img src="/compras/{{ $Compra->imagen4 }}">
    <a href="#img5">></a>
</div>
</div>
<div  class="modal" id="img5">
<div class="imagenes">
    <a href="#img4">&#60;</a>
   <img src="/compras/{{ $Compra->imagen5 }}" >
    <a href="#img1">></a>
</div>
</div>
<br><br>
<p>us$ {{$Compra->precio}}</p>
<p class="bajar">{{ $Compra->descripción }}</p>

</div>

        @if( $errors->any() )
            <div class="alert alert-danger col-8 mx-auto p-2">
                <ul>
                    @foreach( $errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @include('layouts.footer')