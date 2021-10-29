<x-app-layout>
    <x-slot name="header">
        
<h1 style="text-align:center">Administrar Ventas</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="background:rgba(255, 255, 255, 0.329); width:100%">
             
<br>
@if ( session('mensaje') )
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

<table class="table table-borderless table-striped table-hover" >
    <thead>
        <tr>
            <th>Id</th>
            <th>Dirección</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Imagen 2</th>
            <th>Imagen 3</th>
            <th>Imagen 4</th>
            <th>Imagen 5</th>
            <th colspan="2">
            <button style=" text-decoration:none;"> <a href="/agregarVenta"  style="text-decoration: none; color:black">
                    Agregar
                </a></button>
            </th>
        </tr>
    </thead>
    <tbody>
@foreach( $compras as $compra )
        <tr>
            <td>{{ $compra->id }}</td>
            <td style="width:20px">{{ $compra->dirección }}</td>
            <td>{{ $compra->precio }}</td>
            <td style="width:70px">{{ $compra->descripción }}</td>
            <td><img src="/compras/{{ $compra->imagen }}" class="img-thumbnail" style="width: 150px ; height:120px; object-fit:cover"></td>
            <td><img src="/compras/{{ $compra->imagen2 }}" class="img-thumbnail" style="width: 150px; height:120px; object-fit:cover"></td>
            <td><img src="/compras/{{ $compra->imagen3 }}" class="img-thumbnail" style="width: 150px; height:120px; object-fit:cover"></td>
            <td><img src="/compras/{{ $compra->imagen4 }}" class="img-thumbnail" style="width: 150px; height:120px; object-fit:cover"></td>
            <td><img src="/compras/{{ $compra->imagen5 }}" class="img-thumbnail" style="width: 150px; height:120px; object-fit:cover"></td>
            <td>
                <button>
               <a href="/modificarVenta/{{ $compra->id }}"  style="text-decoration: none; color:black" >
                    Modificar
                </a></button>
            </td>
            <td>
                <button>
                 <a href="/eliminarVenta/{{ $compra->id }}"  style="text-decoration: none; color:black">
                    Eliminar
                </a></button>
            </td>
        </tr>
@endforeach
    </tbody>
</table>
<br><br>
<div class="d-flex justify-content-center">

    {{ $compras->links() }}
</div>

  
</div>
        </div>
    </div>
</x-app-layout>