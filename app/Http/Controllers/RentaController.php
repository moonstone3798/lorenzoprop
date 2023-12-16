<?php

namespace App\Http\Controllers;

use App\Models\Renta;
use Illuminate\Http\Request;

class RentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
        $rentas = Renta::paginate(8);
return view('adminAlquileres',
[ 'rentas'=>$rentas ]
);
    }

    public function alquiler()
    {
        $rentas = Renta::paginate(9);        
        return view('/alquiler',
        [ 'rentas'=>$rentas ]
       );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('agregarAlquiler');
    }
    public function mostrar($id)
    {
    
    $Renta = Renta::find($id);
    return view('mostrarAlquiler',
                [
                    'Renta'=>$Renta
                ]
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
            $imagen = time().'P.'.$ext;
            //subir
            $request->file('imagen')
                    ->move( public_path('rentas/'), $imagen );
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
            $ext2 = $request->file('imagen2')->extension();
            $imagen2 = time().'S.'.$ext2;
            //subir
            $request->file('imagen2')
                    ->move( public_path('rentas/'), $imagen2 );
        }

        return $imagen2;
    }



    
    private function subirImagen3(Request $request)
    {
        // si no enviaron archivo | método store()
        $imagen3 = 'noDisponible.jpg';

        //si no enviaron archivo | método update()
        if( $request->has('ImagenAnterior3') ){
            $imagen3 = $request->ImagenAnterior3;
        }

        // si enviaron imagen
        if( $request->file('imagen3') ){
            //renombrar archivo
                //time() . extensión-de-archivo
            $ext3 = $request->file('imagen3')->extension();
            $imagen3 = time().'T.'.$ext3;
            //subir
            $request->file('imagen3')
                    ->move( public_path('rentas/'), $imagen3 );
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
            $ext4 = $request->file('imagen4')->extension();
            $imagen4 = time().'C.'.$ext4;
            //subir
            $request->file('imagen4')
                    ->move( public_path('rentas/'), $imagen4 );
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
            $ext5 = $request->file('imagen5')->extension();
            $imagen5 = time().'Q.'.$ext5;
            //subir
            $request->file('imagen5')
                    ->move( public_path('rentas/'), $imagen5 );
        }

        return $imagen5;
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
     $Renta = new Renta;
     $Renta->id = $id;
     $Renta->dirección = $dirección;
     $Renta->precio= $precio;
     $Renta->descripción = $descripción;
     $Renta->imagen = $imagen;
     $Renta->imagen2 = $imagen2;
     $Renta->imagen3 = $imagen3;
     $Renta->imagen4 = $imagen4;
     $Renta->imagen5 = $imagen5;
     $Renta->save();
     //redirección + mensaje ok
     return redirect('/adminAlquileres')
         ->with('mensaje', 'La propiedad nro: '. $id. ' fue agregada correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Renta  $renta
     * @return \Illuminate\Http\Response
     */
    public function show(Renta $renta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Renta  $renta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $Renta = Renta::find($id);
        return view('modificarAlquiler',
                    [
                        'Renta'=>$Renta
                    ]
                );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Renta  $renta
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
        $Renta = Renta::find($request->id);
        $Renta->id = $id;
        $Renta->dirección = $dirección;
        $Renta->precio= $precio;
        $Renta->descripción = $descripción;
        $Renta->imagen = $imagen;
        $Renta->imagen2 = $imagen2;
        $Renta->imagen3 = $imagen3;
        $Renta->imagen4 = $imagen4;
        $Renta->imagen5 = $imagen5;
        $Renta->save();
        //redirección + mensaje ok
        return redirect('/adminAlquileres')
            ->with('mensaje', 'La propiedad nro: '. $id. ' fue modificada correctamente');


    }

    public function confirmar($id)
    {

        # obtener los datos de una Compra
        $Renta = Renta::find($id);

        # retornar la vista
        return view('eliminarAlquiler',
            [
                'Renta'=>$Renta
            ]
        );
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Renta  $renta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //

        # Producto::find($request->idProducto)->delete();
        Renta::destroy($request->id);
        //redirección con mensaje ok
        return redirect('/adminAlquileres')
            ->with('mensaje', 'La propiedad nro: '. $request->id. ' fue eliminada correctamente');
          
    }
}
