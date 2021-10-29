<x-app-layout>
    <x-slot name="header">
    <h1>Agregar un nuevo Alquiler</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="background:rgba(255, 255, 255, 0.329)">
            
@if( $errors->any() )
            <div class="alert alert-danger col-8 mx-auto p-2" style="background:rgba(240, 14, 38); width:30%; margin-bottom:18px; margin-top:-6px">
                <ul>
                @foreach( $errors->all() as $error )
                    <li style="text-align:center; color:black; list-style=circle">{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
       

        <div class="agregar">

            <form action="/agregarAlquiler" method="post">
            @csrf
                <div class="form-group">
                    <label for="dirección">Ingrese la Dirección </label>
                    <input type="text" name="dirección"
                           value="{{ old('dirección') }}"
                           class="form-control" id="dirección">
                           <br><br><br>
                           <label for="precio">Ingrese el Precio </label>
                    <input type="text" name="precio"
                           value="{{ old('precio') }}"
                           class="form-control" id="precio">
                           <br><br><br>
                           <label for="descripción">Ingrese la Descripción</label>
                           <br>
                           <textarea name="descripción" id="descripción" value="{{ old('descripción') }}" cols="30" rows="10" style="width: 50%"></textarea>
 
                  
                           <br><br><br>
<label for="imagen">Ingrese imagen</label>
<input type="file" name="imagen"  class="custom-file-input" id="customFileLang" lang="es">
<label class="custom-file-label" for="customFileLang" data-browse="Buscar en disco"> </label>                    
<br><br><br>

<label for="imagen2">Ingrese imagen </label>
<input type="file" name="imagen2"  class="custom-file-input" id="customFileLang" lang="es">
<label class="custom-file-label" for="customFileLang" data-browse="Buscar en disco"> </label>

<br><br><br>
<label for="imagen3">Ingrese imagen</label>
<input type="file" name="imagen3"  class="custom-file-input" id="customFileLang" lang="es">
<label class="custom-file-label" for="customFileLang" data-browse="Buscar en disco"> </label>
<br><br><br>
<label for="imagen4">Ingrese imagen</label>
<input type="file" name="imagen4"  class="custom-file-input" id="customFileLang" lang="es">
<label class="custom-file-label" for="customFileLang" data-browse="Buscar en disco"> </label>
<br><br><br>
<label for="imagen5">Ingrese imagen</label>
<input type="file" name="imagen5"  class="custom-file-input" id="customFileLang" lang="es">
<label class="custom-file-label" for="customFileLang" data-browse="Buscar en disco"> </label>
                </div>
                <br><br>
                <button class="btn btn-dark mr-3" style="background: whitesmoke">Agregar Alquiler</button>
                <button> <a href="/adminAlquileres" style="color:black; background: whitesmoke">Volver al panel de Alquiler</a></button>
            </form>
            <br><br>
        </div>
    </div>
     



        </div>
        </div>
    </div>
</x-app-layout>