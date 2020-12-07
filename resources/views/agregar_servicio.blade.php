@extends('layouts.main_2')
@section('contenido_2')

    <!--main content start-->

     <section id="main-content">

      <section class="wrapper">

        <div class="row">

          <div class="col-lg-12">

            <ol class="breadcrumb">

              <li><i class="fa fa-home"></i><a href="{{ route('dashboard') }}">Home</a></li>

            </ol>

          </div>

        </div>

        <!-- page start-->

        <form  method="post" action="{{ route('servicio_guardado') }}" >
        @csrf
        <div class="login-wrap">

        <div class="input-group">

        <span class="input-group-addon"><label style="width: 60px">Mes</label></span>

        <input id="mes"name="mes"type="text" class="form-control" autofocus style="width: 50%" required="" value="">

        </div>

        <hr/>

        <!-- Servicios -->

        <div class="input-group">

            <h2 style="font-size: 20px">Servicios</h2>

        </div>

        <br>

        <div class="input-group">

          <span class="input-group-addon"><label style="width: 80px">Tipo</label></span>

          <input id="tipo"name="tipo"type="text" class="form-control" autofocus style="width: 50%" required="" value="">

        </div>

        <br>

        <div class="input-group">

          <span class="input-group-addon"><label style="width: 80px">Fecha vto 1</label></span>

          <input id="fechavto" name="fechavto1" type="text" class="form-control" style="width: 50%" value="">

        </div>

        <br>

         <div class="input-group">

          <span class="input-group-addon"><label style="width: 80px">Fecha vto 2</label></span>

          <input id="fechavto" name="fechavto2" type="text" class="form-control" style="width: 50%" value="">

        </div>

        <br>

        <div class="input-group">

          <span class="input-group-addon"><label style="width: 80px">Importe</label></span>

          <input id="importe" name="importe" type="text" class="form-control" style="width: 50%" value="">

        </div>

        <br>

        <div class="input-group">

          <span class="input-group-addon"><label style="width: 80px">Pago</label></span>

            <select name="pago" id="pago" class="form-control" style="width: 50%">

              <option value=""></option>

              <option value="Si">Si</option>

            </select>  

         </div>

        <br>

        <div style="padding-left:20px;">

        <button class="btn btn-primary btn-lg " style="width: 30%" type="submit" >Agregar</button>

        <a class="btn btn-primary btn-lg " style="width: 30%" href="{{ route('dashboard') }}" >Cancelar</a>

        </div>

        </div>

        </form>

        

        <!--Fin de servicios -->

        <!-- page end-->

      

      </section>



    </section>



  </section>


@endsection