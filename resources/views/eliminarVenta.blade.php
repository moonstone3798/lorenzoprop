
<x-app-layout>
    <x-slot name="header">
    <h1 style="text-align:center">Eliminar Venta</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="background:rgba(255, 255, 255, 0.329); width:100%; ">
        

            <div class="col">
                <img src="/compras/{{ $Compra->imagen }} " class="img-thumbnail" style="width:400px; height:350px; object-fit:cover; margin-left:33%">
            </div>
            
            <div class="col text-danger align-self-center">
            <form action="/eliminarVenta" method="post" style="text-align:center">
            @csrf
            @method('delete')
            <label>   Id:  {{ $Compra->id }} </label>
                <br><br>
                <label>   Dirección:  {{ $Compra->dirección }} </label>
                <br><br>
                <label> Precio:  usd {{ $Compra->precio }}</label>
                <br><br>
                <label> Descripción:  {{ $Compra->descripción }}</label>
                <br><br><br>
                  

                <input type="hidden" name="id"
                       value="{{ $Compra->id}}">
                <input type="hidden" name="dirección"
                       value="{{ $Compra->dirección}}">
                <button class="btn btn-danger btn-block my-3">Confirmar baja</button>
                <button><a href="/adminVentas" class="btn btn-outline-secondary btn-block">
                    Volver a panel
                </a></button>

            </form>
            </div>
        

            <script>
                Swal.fire(
                    'Advertencia',
                    'Si pulsa el botón "Confirmar baja", se eliminará la propiedad seleccionada.',
                    'warning'
                )
            </script>


</div>
        </div>
    </div>
</x-app-layout>