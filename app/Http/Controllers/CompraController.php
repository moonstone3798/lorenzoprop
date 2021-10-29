<?php

namespace App\Http\Controllers;
use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $compras = Compra::paginate(8);
return view('adminVentas',
[ 'compras'=>$compras ]
);
    }

    public function ventas()
    {
        $compras = Compra::paginate(9);        
        return view('/ventas',
        [ 'compras'=>$compras ]
       );
    }
    private function subirImagen(Request $request)
    {
        // si no enviaron archivo | método store()
        $imagen = 'noDisponible.jpg';

        //si no enviaron archivo | método update()
        if( $request->has('ImagenAnterior') ){
            $imagen = $request->ImagenAnterior;
        }

        // si enviaron imagen
        if( $request->file('imagen') ){
            //renombrar archivo
                //time() . extensión-de-archivo
            $ext = $request->file('imagen')->extension();
            $imagen = time().'.'.$ext;
            //subir
            $request->file('imagen')
                    ->move( public_path('compras/'), $imagen );
        }

        return $imagen;
    }


    private function subirImagen2(Request $request)
    {
        // si no enviaron archivo | método store()
        $imagen2 = 'noDisponible.jpg';

        //si no enviaron archivo | método update()
        if( $request->has('ImagenAnterior2') ){
            $imagen2 = $request->ImagenAnterior2;
        }

        // si enviaron imagen
        if( $request->file('imagen2') ){
            //renombrar archivo
                //time() . extensión-de-archivo
            $ext = $request->file('imagen2')->extension();
            $imagen2 = time().'.'.$ext;
            //subir
            $request->file('imagen2')
                    ->move( public_path('compras/'), $imagen2 );
        }

        return $imagen2;
    }



    
    private function subirImagen3(Request $request)
    {
        // si no enviaron archivo | método store()
        $imagen3 = 'noDisponible.jpg';

        //si no enviaron archivo | método update()
        if( $request->has('ImagenAnterior3') ){
            $imagen2 = $request->ImagenAnterior3;
        }

        // si enviaron imagen
        if( $request->file('imagen3') ){
            //renombrar archivo
                //time() . extensión-de-archivo
            $ext = $request->file('imagen3')->extension();
            $imagen3 = time().'.'.$ext;
            //subir
            $request->file('imagen3')
                    ->move( public_path('compras/'), $imagen3 );
        }

        return $imagen3;
    }
    private function subirImagen4(Request $request)
    {
        // si no enviaron archivo | método store()
        $imagen4 = 'noDisponible.jpg';

        //si no enviaron archivo | método update()
        if( $request->has('ImagenAnterior4') ){
            $imagen4 = $request->ImagenAnterior4;
        }

        // si enviaron imagen
        if( $request->file('imagen4') ){
            //renombrar archivo
                //time() . extensión-de-archivo
            $ext = $request->file('imagen4')->extension();
            $imagen4 = time().'.'.$ext;
            //subir
            $request->file('imagen4')
                    ->move( public_path('compras/'), $imagen4 );
        }

        return $imagen4;
    }
    private function subirImagen5(Request $request)
    {
        // si no enviaron archivo | método store()
        $imagen5 = 'noDisponible.jpg';

        //si no enviaron archivo | método update()
        if( $request->has('ImagenAnterior5') ){
            $imagen5 = $request->ImagenAnterior5;
        }

        // si enviaron imagen
        if( $request->file('imagen5') ){
            //renombrar archivo
                //time() . extensión-de-archivo
            $ext = $request->file('imagen5')->extension();
            $imagen5 = time().'.'.$ext;
            //subir
            $request->file('imagen5')
                    ->move( public_path('compras/'), $imagen5 );
        }

        return $imagen5;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('agregarVenta');
    }
    public function mostrar($id)
    {
    
    $Compra = Compra::find($id);
    return view('mostrarVentas',
                [
                    'Compra'=>$Compra
                ]
            );

    }
    private function validar(Request $request) :void
    {
        $request->validate(
            [
                'dirección'=>'required|min:2|max:250',
                'precio'=>'required',
                'descripción'=>'required|min:3|max:300',
                'imagen'=>'max:2048',
                'imagen2'=>'max:2048',
                'imagen3'=>'max:2048',
                'imagen4'=>'max:2048',
                'imagen5'=>'max:2048'
            ],
            [
                'dirección.required'=>'Complete el campo dirección',
                'dirección.min'=>'la dirección debe tener como mínimo 2 caracteres',
                'dirección.max'=>'El campo dirección debe tener 250 caracteres como máximo',
                'precio.required'=>'Complete el campo precio',
                'descripción.required'=>'Complete el campo descripción',
                'descripción.min'=>'la descripción debe tener como mínimo 2 caracteres',
                'descripción.max'=>'El campo descripción debe tener 300 caracteres como máximo',
                'imagen.max'=>'Debe ser una imagen de 2MB como máximo',
                'imagen2.max'=>'Debe ser una imagen de 2MB como máximo',
                'imagen3.max'=>'Debe ser una imagen de 2MB como máximo',
                'imagen4.max'=>'Debe ser una imagen de 2MB como máximo',          
                'imagen5.max'=>'Debe ser una imagen de 2MB como máximo'
            ]
            );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //validar
        $dirección = $request->dirección;
        $precio = $request->precio;
        $descripción = $request->descripción;
        $id = $request->id;
        $this->validar($request);
          //subir imagen
          $imagen = $this->subirImagen($request);
          $imagen3 = $this->subirImagen3($request);
          $imagen2 = $this->subirImagen2($request);
          $imagen4 = $this->subirImagen4($request);
          $imagen5 = $this->subirImagen5($request);
        //instanciar + asignar + guardar
        $Compra = new Compra;
        $Compra->id = $id;
        $Compra->dirección = $dirección;
        $Compra->precio= $precio;
        $Compra->descripción = $descripción;
        $Compra->imagen = $imagen;
        $Compra->imagen2 = $imagen2;
        $Compra->imagen3 = $imagen3;
        $Compra->imagen4 = $imagen4;
        $Compra->imagen5 = $imagen5;
        $Compra->save();
        //redirección + mensaje ok
        return redirect('/adminVentas')
            ->with('mensaje', 'La propiedad nro: '. $id. ' fue agregada correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $Compra = Compra::find($id);
        return view('modificarVenta',
                    [
                        'Compra'=>$Compra
                    ]
                );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        //validar
        $dirección = $request->dirección;
        $precio = $request->precio;
        $descripción = $request->descripción;
        $id = $request->id;
        $this->validar($request);
          //subir imagen
          $imagen = $this->subirImagen($request);
          $imagen2 = $this->subirImagen2($request);
          $imagen3 = $this->subirImagen3($request);
          $imagen4 = $this->subirImagen4($request);
          $imagen5 = $this->subirImagen5($request);
        //instanciar + asignar + guardar
        $Compra = Compra::find($request->id);
        $Compra->id = $id;
        $Compra->dirección = $dirección;
        $Compra->precio= $precio;
        $Compra->descripción = $descripción;
        $Compra->imagen = $imagen;
        $Compra->imagen2 = $imagen2;
        $Compra->imagen3 = $imagen3;
        $Compra->imagen4 = $imagen4;
        $Compra->imagen5 = $imagen5;
        $Compra->save();
        //redirección + mensaje ok
        return redirect('/adminVentas')
            ->with('mensaje', 'La propiedad nro: '. $id. ' fue modificada correctamente');


    }

    public function confirmar($id)
    {

        # obtener los datos de una Compra
        $Compra = Compra::find($id);

        # retornar la vista
        return view('eliminarVenta',
            [
                'Compra'=>$Compra
            ]
        );
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //

        # Producto::find($request->idProducto)->delete();
        Compra::destroy($request->id);
        //redirección con mensaje ok
        return redirect('/adminVentas')
            ->with('mensaje', 'La propiedad nro: '. $request->id. ' fue eliminada correctamente');
          
    }
}
