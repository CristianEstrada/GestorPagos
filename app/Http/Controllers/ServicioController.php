<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServicioController extends Controller
{
    //
    public function list()
    {
        // $servicio = new servicio();
        // $servicio->frecuencia = 2;
        // $servicio->provedor='EAAV';
        // $servicio->nombre='Acueducto';
        // $servicio->save();

        $servicios = Servicio::All();
        // $servicios = Servicio::Select("frecuencia","nombre","provedor") -> orderBy("frecuencia")->get();

        // dd($servicios);

        return view("servicios.index",compact("servicios"));
    }
    public function new(Request $request){
        $servicio=new Servicio($request->all());
        $servicio->save();
        return redirect(route('listServicios'));
    }
    public function delete($idservicio){
      $servicio=Servicio::find($idservicio);
      $servicio->delete();
      return redirect(route('listServicios'));
    }
    public function update($idservicio){
      $servicios = Servicio::all();
      return view("servicios.index",compact("servicios","idservicio"));
    }
    public function store($idservicio,Request $request)
    {
      $servicio = servicio::find($idservicio);


      $servicio->frecuencia=$request->input()["frecuencia"];
      $servicio->nombre=$request->input()["nombre"];
      $servicio->provedor=$request->input()["proveedor"];
      $servicio->save();
      return redirect(route('listServicios'));
    }
}
