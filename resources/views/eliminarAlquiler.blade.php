
<x-app-layout>
    <x-slot name="header">
    <h1 style="text-align:center">Eliminar Alquiler</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="background:rgba(255, 255, 255, 0.329); width:100%">

       

            <div class="col">
                <img src="/rentas/{{ $Renta->imagen }}" class="img-thumbnail" style="width:400px; height:350px; object-fit:cover; margin-left:33.5%">
            </div>
            <div class="col text-danger align-self-center">
            <form action="/eliminarAlquiler" method="post" style="text-align:center">
            @csrf
            @method('delete')
                <h2>{{ $Renta->id }}</h2>
                <br>
                <label>   dirección  {{ $Renta->dirección }} </label>
                <br>
                <label> precio  $ {{ $Renta->precio }}</label>
                <br>
                <label> descripción  {{ $Renta->descripción }}</label>
                <br>
                  

                <input type="hidden" name="id"
                       value="{{ $Renta->id}}">
                <input type="hidden" name="dirección"
                       value="{{ $Renta->dirección}}">
                <button class="btn btn-danger btn-block my-3">Confirmar baja</button>
                <a href="/adminAlquileres" class="btn btn-outline-secondary btn-block">
                    Volver a panel
                </a>

            </form>
            </div>
        </form>

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