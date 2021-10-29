@include('layouts.header')
    <main>
    <div class="social">
<ul>
    <li><a href="https://www.facebook.com/Lorenzo-Prop-103590901866065" target="_blank"  class="icon-facebook"></a></li><br>
    <li><a href="https://www.instagram.com/lorenzo.prop/?utm_medium=copy_link" target="_blank" class="icon-instagram"></a></li><br>
    <li><a href="https://api.whatsapp.com/send?phone=+5491150017070" target="_blank" class="icon-whatsapp"></a></li><br>
    <li><a href="mailto:info@lorenzoprop.com" class="icon-envelop"></a></li><br>
</ul>
</div>
  <video  autoplay muted="muted" loop  > <source src="../imagenes/Agregarunt.mp4" type="video/mp4"></video>


<div id="fondo1"><br><br><br><br>
<h2>¿Por qué elegir Lorenzo Prop?</h2><br>
<p>Lorenzo Prop. es una firma familiar con más de 40 años de trayectoria decidida a dar el mejor servicio. Porque todos sus miembros son Martilleros Universitarios que se encuentran en constante capacitación. Porque sus asesores son seleccionados con una estricta rigurosidad.
    Pero más importante, porque todos tiene vocación de servicio.
    Pruebe con un profesional.</p></div>
<div id="fondo2">
<div class="encontrar">
<img src="../imagenes/encontrar.png" alt="" id="columnas">
<h4 id="tit">ENCONTRAR PROPIEDADES</h4> 
<p>En Lorenzo Prop. sabemos que encontrar propiedades es una labor difícil. Nosotros ofrecemos un asesor especializado en la búsqueda de la mejor propiedad en el mejor precio. En estos tiempos donde la oferta es mas amplia que la demanda, entienda como hacer el mejor negocio.  </p>

</div>
<div class="asesoria">
<img src="../imagenes/asesoria.png" alt="" id="columnas">
<h4 id="tit">ASESORIA SECTORIZADA  </h4> 
<p>En nuestras sucursales puede encontrar personal que lo acompañe en todos los procesos, cada uno de ellos especializado en cada momento de su operación. Desde un sector de legales, vendedor, fotógrafos, cerradores, martilleros y escribanos. Todos esperando sus consultas y preocupaciones. </p>

</div>
<div class="compra"><img src="../imagenes/compra.png" alt="" id="columnas">
<h4 id="tit">COMPRA Y VENTA INMOBILIARIA </h4> 
<p>Sabemos que hoy una de las preocupaciones mas grandes que tienen nuestros clientes a la hora de vender es saber si van a poder encontrar lo que buscan. En Lorenzo Prop. nos encargamos de lograr que el reposicionamiento se concrete con éxito. Nuestros asesores trabajan full-time para lograr la tranquilidad de las personas que confiaron en nosotros.  </p>
</div>
</div>


<div id="contacto" class="contacto">
<form action="" method="POST">
<h1 >¿Tenés alguna duda? Escribinos!</h1>
<br>
<p id="centrar"style="">Los campos marcados con un * son obligatorios</p>
<br>
@csrf

<br><p id="centrar">*</p>
<input type="text" class="textbox" placeholder="Nombre" id="nombre" name="nombre" required>
<br>
@error('nombre')
<p><strong>{{$message}}</strong></p> 
@enderror
<br><p id="centrar">*</p>
<input type="email" class="textbox" placeholder="E-Mail" id="email" name="email" required>
<br>
@error('email')
<p><strong>{{$message}}</strong></p> 
@enderror
<br><p id="centrar">*</p>
<textarea placeholder="Mensaje" name="mensaje" id="mensaje" required></textarea>
<br>
@error('mensaje')
<p><strong>{{$message}}</strong></p> 
@enderror
<input type="submit" value="submit" style="margin-left:-57%; text-align:left">
<br>
<br>
<br>
</form>
</div>

    </main>
    @include('layouts.footer')