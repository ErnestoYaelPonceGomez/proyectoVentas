<?php

namespace App\Http\Controllers;

use App\Models\DetalleIngreso;
use App\Models\Articulo;
use App\Models\Ingreso;
use Illuminate\Http\Request;

/**
 * Class DetalleIngresoController
 * @package App\Http\Controllers
 */
class DetalleIngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleIngresos = DetalleIngreso::all();

        return view('detalle-ingreso.index')->with('detalleIngresos', $detalleIngresos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articulos=articulo::all();
        $ingresos=ingreso::all();
        return view('detalle-ingreso.create',['articulos'=>$articulos,'ingresos'=>$ingresos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalleIngreso = new DetalleIngreso();
        $detalleIngreso->articulo_id = $request->get('articulos');
        $detalleIngreso->ingreso_id = $request->get('ingresos');

        $detalleIngreso->save();

        return redirect('detalle_ingresos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleIngreso = DetalleIngreso::find($id);
        return view('detalle-ingreso.show', compact('detalleIngreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleIngreso= DetalleIngreso::findOrFail($id);
        $articulos=articulo::find($detalleIngreso->articulo_id);
        $ingresos=ingreso::find($detalleIngreso->ingreso_id);
        
        return view('detalle-ingreso.consultaDI',compact('detalleIngreso','articulos','ingresos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetalleIngreso $detalleIngreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleIngreso $detalleIngreso)
    {
        request()->validate(DetalleIngreso::$rules);

        $detalleIngreso->update($request->all());

        return redirect()->route('detalle-ingresos.index')
            ->with('success', 'DetalleIngreso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalleIngreso = DetalleIngreso::find($id);
        $detalleIngreso->delete();
        return redirect('detalle-ingreso');
    }
}
