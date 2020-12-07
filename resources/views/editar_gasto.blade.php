@extends('layouts.main_4')
@section('contenido_4')

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

    @if(session('info'))
    <div class="alert alert-success" style="display: inline-block;padding:7px !important;width:55%;text-align:center">
      {{ session('info') }}
    </div>
    @endif




    <div class="row" style="margin-top:15px;">

      <div class="col-sm-12">

        <section class="panel">

          <header class="panel-heading" style="text-align: center;">

            Editar gasto

          </header>



          <form  method="post" action="{{ route('actualizar_gasto', $edit_gasto->id )}}" >
            @csrf
            @method('put')

            <div hidden="true">
              <input id="usuario" name="usuario" value={{ auth()->user()->id }}>
            </div>

            <div class="login-wrap">

              <div class="input-group">

                <span class="input-group-addon"><label style="width: 80px">Detalle</label></span>

                <input id="detalle" name="detalle" type="text" class="form-control" style="width: 50%" required="" value="{{ $edit_gasto->detalle }}">

              </div>

              <br>

              <div class="input-group">

                <span class="input-group-addon"><label style="width: 80px">Importe</label></span>

                <input id="importe" name="importe" type="text" class="form-control" style="width: 50%" value="{{ $edit_gasto->importe }}">

              </div>

              <br>

              <div class="input-group">
                @php
                  $mes_seleccionado = $edit_gasto->mes;    
                @endphp
                
                <span class="input-group-addon"><label style="width: 80px">Mes</label></span>

                <select name="mes" id="mes" class="form-control" style="width: 50%" value="<?php echo $mes_seleccionado?>">

                  <option value="<?php echo $mes_seleccionado?>"><?php echo $mes_seleccionado?></option>

                  <option value="-"></option>

                  <option value="Enero">Enero</option>

                  <option value="Febrero">Febrero</option>

                  <option value="Marzo">Marzo</option>

                  <option value="Abril">Abril</option>

                  <option value="Mayo">Mayo</option>

                  <option value="Junio">Junio</option>

                  <option value="Julio">Julio</option>

                  <option value="Agosto">Agosto</option>

                  <option value="Septiembre">Septiembre</option>

                  <option value="Octubre">Octubre</option>

                  <option value="Noviembre">Noviembre</option>

                  <option value="Diciembre">Diciembre</option>

                </select>

              </div>

              <br>

              <div class="input-group">
                @php
                  $cuotas_seleccionadas = $edit_gasto->cuotas;    
                @endphp

                <span class="input-group-addon"><label style="width: 80px">Cuotas</label></span>

                <select name="cuotas" id="cuotas" class="form-control" style="width: 50%" value="<?php echo $cuotas_seleccionadas ?>">
                 
                  <option value="<?php echo $cuotas_seleccionadas ?>"><?php echo $cuotas_seleccionadas ?></option>
                  
                  <option value="-"></option>

                  <option value="1">1</option>

                  <option value="2">2</option>

                  <option value="3">3</option>

                  <option value="4">4</option>

                  <option value="5">5</option>

                  <option value="6">6</option>

                  <option value="7">7</option>

                  <option value="8">8</option>

                  <option value="9">9</option>

                  <option value="10">10</option>

                  <option value="11">11</option>

                  <option value="12">12</option>

                </select>

              </div>

              <br>

              <div class="input-group">
                @php
                  $pago_seleccionado = $edit_gasto->pago;    
                @endphp

                <span class="input-group-addon"><label style="width: 80px">Pago</label></span>

                <select name="pago" id="pago" class="form-control" style="width: 50%" value="<?php echo $pago_seleccionado ?>">
                  
<?php 
                  if($pago_seleccionado == "Si"){
?>
                  <option value="Si">Si</option>
                  <option value="-"></option>
                  
<?php
                  }else{
?>
                    <option value="-"></option>
                    <option value="Si">Si</option>
<?php
                  }
?>

                </select>

              </div>

              <br>

              <div class="input-group">
                @php
                $tajeta_bool = $edit_gasto->tarjeta;    
                @endphp

                <span class="input-group-addon"><label style="width: 80px">Tarj.cred.</label></span>

                <select name="tarjeta" id="tarjeta" class="form-control" style="width: 50%" value="{{ $edit_gasto->tarjeta }}">

                  <?php 
                  if($tajeta_bool == "Si"){
?>
                  <option value="Si">Si</option>
                  <option value="-"></option>
                  
<?php
                  }
                  if($tajeta_bool == ""){
?>
                    <option value="-"></option>
                    <option value="Si">Si</option>
<?php
                  }
?>

                </select>

              </div>

              <br>

            </div>

            <div>

              <button class="btn btn-primary btn-lg " style="width: 30%" type="submit">Guardar</button>
              <a class="btn btn-primary btn-lg " style="width: 30%" href="{{ route('cuentas') }}">Cancelar</a>
      
            </div>

          </form>

        </section>

      </div>

    </div>

    <!-- page end-->

  </section>

</section>


@endsection