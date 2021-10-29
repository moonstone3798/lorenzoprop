<x-app-layout>
    <x-slot name="header">
        
<h1 style="text-align:center">Administrar Alquileres</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="background:rgba(255, 255, 255, 0.329)">
            

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
            <button style="  text-decoration:none;"> <a href="/agregarAlquiler"  style="text-decoration: none; color:black;">
                    Agregar
                </a></button>
            </th>
        </tr>
    </thead>
    <tbody>
@foreach( $rentas as $renta )
        <tr>
            <td>{{ $renta->id }}</td>
            <td style="width:20px">{{ $renta->dirección }}</td>
            <td>{{ $renta->precio }}</td>
            <td style="width:70px">{{ $renta->descripción }}</td>
            <td><img src="/rentas/{{ $renta->imagen }}" class="img-thumbnail" style="width: 150px ; height:120px; object-fit:cover"></td>
            <td><img src="/rentas/{{ $renta->imagen2 }}" class="img-thumbnail" style="width: 150px; height:120px; object-fit:cover"></td>
            <td><img src="/rentas/{{ $renta->imagen3 }}" class="img-thumbnail" style="width: 150px; height:120px; object-fit:cover"></td>
            <td><img src="/rentas/{{ $renta->imagen4 }}" class="img-thumbnail" style="width: 150px; height:120px; object-fit:cover"></td>
            <td><img src="/rentas/{{ $renta->imagen5 }}" class="img-thumbnail" style="width: 150px; height:120px; object-fit:cover"></td>
            <td>
                <button>
               <a href="/modificarAlquiler/{{ $renta->id }}"  style="text-decoration: none; color:black" >
                    Modificar
                </a></button>
            </td>
            <td>
                <button>
                 <a href="/eliminarAlquiler/{{ $renta->id }}"  style="text-decoration: none; color:black">
                    Eliminar
                </a></button>
            </td>
        </tr>
@endforeach
    </tbody>
</table>
<br><br>
<div class="d-flex justify-content-center">

    {{ $rentas->links() }}
</div>


</div>
        </div>
    </div>
</x-app-layout>