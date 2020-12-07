@extends('layouts.main_3')
@section('contenido_3')

<!--main content start-->

    <section id="main-content">

      <section class="wrapper">

        <div class="row">

          <div class="col-lg-12">

            <ol class="breadcrumb">

              <li><i class="fa fa-home"></i><a href="dashboard">Home</a></li>

            </ol>

          </div>

        </div>

        <!-- page start-->

        <form  method="post" action="{{ route('actualizar_servicio', $edit_service->id )}}" >
        @csrf
        @method('put')
        <div class="login-wrap">

        <div class="input-group">
   

        </div>

       

        <!-- Servicios -->

        <div class="input-group">

            <h2 style="font-size: 20px">Servicios</h2>

        </div>

        <br>

        <div class="input-group">

          <span class="input-group-addon"><label style="width: 80px">Tipo</label></span>

        <input id="tipo"name="tipo"type="text" class="form-control" autofocus style="width: 50%" required="" value="{{ $edit_service->tipo }}">

        </div>

        <br>

        <div class="input-group">

          <span class="input-group-addon"><label style="width: 80px">Fecha 1er vto</label></span>

          <input id="fechavto" name="fechavto" type="text" class="form-control" style="width: 50%" value="{{ $edit_service->fechavto }}">

        </div>

        <br>

        <div class="input-group">

        <span class="input-group-addon"><label style="width: 80px">Fecha 2do vto</label></span>

        <input id="fechavto" name="fechavto2" type="text" class="form-control" style="width: 50%" value="{{ $edit_service->fechavto2 }}">

        </div>

        <br>

        <div class="input-group">

          <span class="input-group-addon"><label style="width: 80px">Importe</label></span>

          <input id="importe" name="importe" type="text" class="form-control" style="width: 50%" value="{{ $edit_service->importe }}">

        </div>

        <br>

        <div class="input-group">

          <span class="input-group-addon"><label style="width: 80px">Pago</label></span>

            <select name="pago" id="pago" class="form-control" style="width: 50%">
                
                    <option value="{{ $edit_service->pago }}" >{{ $edit_service->pago }}</option>

                    @if( $edit_service->pago  == 'Si')
                    
                        <option value=""></option>

                    @else

                         <option value="Si">Si</option>

                    @endif

                </select>  

         </div>

        <br>

        <div class="input-group">

          <span class="input-group-addon"><label style="width: 80px">Mes</label></span>

          <input id="mes" name="mes" type="text" class="form-control" style="width: 50%" value="{{ $edit_service->mes    }}">

        </div>

        <br>

        <div>

        <button class="btn btn-primary btn-lg " style="width: 30%" type="submit">Guardar</button>
        <a class="btn btn-primary btn-lg " style="width: 30%" href="{{ route('dashboard') }}">Cancelar</a>

        </div>

        </div>

        </form>

        

        <!--Fin de servicios -->

    

        <!-- page end-->

      

      </section>



    </section>



          

        <!-- page end-->

      </section>

    </section>



  </section>

@endsection