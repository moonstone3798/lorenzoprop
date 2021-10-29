@include('layouts.header')


<h1 id="alquiler">Propiedades en Alquiler</h1>
<br>
<div class="row">

@foreach($rentas as $renta)
<a href="./mostrarAlquiler/{{$renta->id}}&#img1">
                <div class="col">
                    <div class="card" >
                        <img src="/rentas/{{ $renta->imagen }} ">
                            <br>
                            <p>{{ $renta->dirección }}</p>
                            <br>
                            <p>$ {{$renta->precio}}<br></p>
                       </div>
                    <br><br></a>
                </div>

            @endforeach
<br><br>

</div><div class="social" >
    <ul>
        <li><a href="https://www.facebook.com/Lorenzo-Prop-103590901866065" target="_blank"  class="icon-facebook"></a></li><br>
        <li><a href="https://www.instagram.com/lorenzo.prop/?utm_medium=copy_link" target="_blank" class="icon-instagram"></a></li><br>
        <li><a href="https://api.whatsapp.com/send?phone=+5491150017070" target="_blank" class="icon-whatsapp"></a></li><br>
        <li><a href="mailto:info@lorenzoprop.com" class="icon-envelop"></a></li><br>
    </ul>
    </div>
    

<div class="paginador">
{{ $rentas->links() }}
</div>

@include('layouts.footer')