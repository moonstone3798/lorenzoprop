
<x-app-layout>
    <x-slot name="header">
    <h1>Modificar una Venta</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="modificar">

            <form action="/modificarVenta" method="post" enctype="multipart/form-data" >
                @csrf
                @method('put')
                <label> Dirección: </label>
               <br>
                <input type="text" name="dirección"
                       value="{{ old('dirección', $Compra->dirección) }}"
                       class="form-control">
                <br><br>
                <label>Precio: </label>
           <br>
                <input type="text" name="precio"
                       value="{{ old('precio', $Compra->precio) }}"
                       class="form-control">
                <br><br>
                <label>Descripción: </label>
                <br>
                <input type="text" name="descripción"
                       value="{{ old('descripción', $Compra->descripción) }}"
                       class="form-control">
                <br><br>

                <label>Imagen actual 1:</label> <br>
                <img src="/compras/{{ $Compra->imagen }}" class="img-thumbnail my-2"><br>
                <label>  Imagen nueva (opcional):</label><br>
                <div class="custom-file mt-1 mb-4">
                    <input type="file" name="imagen"  class="custom-file-input" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang" data-browse="Buscar en disco"> </label>         </div>
                    <br><br>     <br>

                    <label>Imagen actual 2:</label><br>
                <img src="/compras/{{ $Compra->imagen2 }}" class="img-thumbnail my-2" ><br> 
                <label>  Imagen nueva (opcional):</label><br>
                <div class="custom-file mt-1 mb-4">
                    <input type="file" name="imagen2"  class="custom-file-input" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang" data-browse="Buscar en disco"> </label>         </div>
                    <br><br>

                    <label>Imagen actual 3:</label> <br>
                <img src="/compras/{{ $Compra->imagen3 }}" class="img-thumbnail my-2"><br>
                <label>  Imagen nueva (opcional):</label><br>
                <div class="custom-file mt-1 mb-4">
                    <input type="file" name="imagen3"  class="custom-file-input" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang" data-browse="Buscar en disco"></label>         </div>
                    <br><br>

                    <label>Imagen actual 4:</label> <br>
                <img src="/compras/{{ $Compra->imagen4 }}" class="img-thumbnail my-2" > <br>
                <label>  Imagen nueva (opcional):</label> <br>
                <div class="custom-file mt-1 mb-4">
                    <input type="file" name="imagen4"  class="custom-file-input" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang" data-browse="Buscar en disco"> </label>         </div>
                    <br><br>

                    <label>Imagen actual 5:</label><br>
                <img src="/compras/{{ $Compra->imagen5 }}" class="img-thumbnail my-2"><br>
                <label>  Imagen nueva (opcional):</label><br>
                <div class="custom-file mt-1 mb-4">
                    <input type="file" name="imagen5"  class="custom-file-input" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang" data-browse="Buscar en disco"></label>         </div>
                    <br><br>
                </div>

              
                       <input type="hidden" name="id"
                       value="{{ $Compra->id }}">
                <input type="hidden" name="ImagenAnterior"
                       value="{{ $Compra->imagen }}">
                       <input type="hidden" name="ImagenAnterior2"
                       value="{{ $Compra->imagen2 }}">
                       <input type="hidden" name="ImagenAnterior3"
                       value="{{ $Compra->imagen3 }}">
                       <input type="hidden" name="ImagenAnterior4"
                       value="{{ $Compra->imagen4 }}">
                       <input type="hidden" name="ImagenAnterior5"
                       value="{{ $Compra->imagen5 }}">

                <br>
                <button class="btn btn-dark mb-3" style="margin-left:37%; background: whitesmoke; margin-right:10px">Modificar Venta</button>
                <button> <a href="/adminVentas" class="btn btn-outline-secondary mb-3" style="text-decoration: none; color:black; background: whitesmoke">
                Volver al panel de Ventas
                </a></button>
               
            </form>

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


        </div>
        </div>
    </div>
</x-app-layout>