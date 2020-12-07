<?php

namespace App\Http\Controllers;
use App\Service;
use App\Cuenta;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $services = Service::all();
        return view('dashboard',compact('services'));
    }

    public function agregar_servicio(){
        return view('agregar_servicio');
    }

    public function agregar_servicio_database(Request $request){
        
        $newService = new Service;
        $newService->mes = $request->input('mes');
        $newService->tipo = $request->input('tipo');
        $newService->fechavto = $request->input('fechavto');
        $newService->fechavto2 = $request->input('fechavto2');
        $newService->importe = $request->input('importe');
        $newService->pago = $request->input('pago');
        $newService->save();
    
        return redirect()->route('dashboard')->with('info','Servicio guardado');

    }

    public function eliminar_servicio($id){

        $service = Service::findOrfail($id);
        $service->delete();
    
        return redirect()->route('dashboard')->with('info','Servicio eliminado');
    }

    public function editar_servicio($id){

        $edit_service = Service::findOrfail($id);
        return view('editar_servicio',compact('edit_service'));

    }

    public function editar_servicio_database(Request $request, $id){
        
        $new_service_data = Service::findOrfail($id);
        $new_service_data->mes = $request->input('mes');
        $new_service_data->tipo = $request->input('tipo');
        $new_service_data->fechavto = $request->input('fechavto');
        $new_service_data->fechavto2 = $request->input('fechavto2');
        $new_service_data->importe = $request->input('importe');
        $new_service_data->pago = $request->input('pago');
        $new_service_data->save();
        return redirect()->route('dashboard')->with('info','Servicio actualizado');
    }

    public function mostrar_cuentas(){
        $gastos = Cuenta::all();       
        return view('cuentas_a_pagar',compact('gastos'));
    }

    public function guardar_gasto(Request $request){
        $newGasto = new Cuenta;
        $newGasto->id_user = $request->input('usuario');
        $newGasto->detalle = $request->input('detalle');
        $newGasto->importe = $request->input('importe');
        $newGasto->mes = $request->input('mes');
        $newGasto->cuotas = $request->input('cuotas');
        $newGasto->pago = $request->input('pago');
        $newGasto->tarjeta = $request->input('tarjeta');
        $newGasto->save();
        return redirect()->route('cuentas')->with('info','Registro guardado');
    }

    public function eliminar_compra($id){
        $newCuenta = Cuenta::findOrFail($id);
        $newCuenta->delete();
        return redirect()->route('cuentas')->with('info','Registro eliminado');
    }

    public function editar_gasto($id){

        $edit_gasto = Cuenta::findOrfail($id);
        return view('editar_gasto',compact('edit_gasto'));

    }

    public function editar_gasto_database(Request $request , $id){
        $newGasto = Cuenta::findOrfail($id);
        $newGasto->detalle = $request->input('detalle');
        $newGasto->importe = $request->input('importe');
        $newGasto->mes = $request->input('mes');
        $newGasto->cuotas = $request->input('cuotas');
        $newGasto->pago = $request->input('pago');
        $newGasto->tarjeta = $request->input('tarjeta');
        $newGasto->save();
        return redirect()->route('cuentas')->with('info','Servicio actualizado');
    }

}
