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

    @if(session('info'))
    <div class="alert alert-success" style="display: inline-block;padding:7px !important;width:55%;text-align:center">
      {{ session('info') }}
    </div>
    @endif




    <div class="row" style="margin-top:15px;">

      <div class="col-sm-12">

        <section class="panel">

          <header class="panel-heading" style="text-align: center;">

            Cuentas a pagar

          </header>



          <form method="post" action="{{ route('gasto_guardado') }}">
            @csrf

            <div hidden="true">
              <input id="usuario" name="usuario" value={{ auth()->user()->id }}>
            </div>

            <div class="login-wrap">

              <div class="input-group">

                <span class="input-group-addon"><label style="width: 80px">Detalle</label></span>

                <input id="detalle" name="detalle" type="text" class="form-control" style="width: 50%" required="">

              </div>

              <br>

              <div class="input-group">

                <span class="input-group-addon"><label style="width: 80px">Importe</label></span>

                <input id="importe" name="importe" type="text" class="form-control" style="width: 50%">

              </div>

              <br>

              <div class="input-group">

                <span class="input-group-addon"><label style="width: 80px">Mes</label></span>

                <select name="mes" id="mes" class="form-control" style="width: 50%">

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

                <span class="input-group-addon"><label style="width: 80px">Cuotas</label></span>

                <select name="cuotas" id="cuotas" class="form-control" style="width: 50%">

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

                <span class="input-group-addon"><label style="width: 80px">Pago</label></span>

                <select name="pago" id="pago" class="form-control" style="width: 50%">

                  <option value=""></option>

                  <option value="Si">Si</option>

                </select>

              </div>

              <br>

              <div class="input-group">

                <span class="input-group-addon"><label style="width: 80px">Tarj.cred.</label></span>

                <select name="tarjeta" id="tarjeta" class="form-control" style="width: 50%">

                  <option value=""></option>

                  <option value="Si">Si</option>

                </select>

              </div>

              <br>

            </div>

            <div style="padding-left:40px;text-align:center;">

              <button class="btn btn-primary btn-lg " style="width: 30%" type="submit">Agregar</button>

            </div>

          </form>

          <br>

          <br>



          <div class="tab">


            <button class="tablinks" onclick="selectTab(event, 'Tarjeta')" id="defaultOpen">Tarjeta de Credito</button>

            <button class="tablinks" onclick="selectTab(event, 'Efectivo')">Efectivo</button>



          </div>



          <div id="Efectivo" class="table-responsive tabcontent">

            <table class="table table-striped">

              <thead>

                <tr>

                  <th>Detalle</th>

                  <th>Importe</th>

                  <th>Mes</th>

                  <th>Pago</th>

                  <th>Editar</th>

                  <th>Eliminar</th>

                </tr>

              </thead>

              <tbody>

                @foreach($gastos as $gasto)

                @if($gasto->tarjeta == "")

                <tr>

                  <td>{{ $gasto->detalle}}</td>

                  <td>{{ $gasto->importe}}</td>

                  <td>{{ $gasto->mes}}</td>

                  <td>{{ $gasto->pago}}</td>

                  <td><a href="{{ route('editar_gasto',$gasto->id)}} ">Editar</a></td>

                  <td>
                    <a href="javascript:document.getElementById('delete-{{ $gasto->id }}').submit()">Eliminar</a>
                    <form id="delete-{{ $gasto->id }}" action="{{ route('eliminar_gasto',$gasto->id) }}" method="post">
                      @method('delete')
                      @csrf
                    </form>
                  </td>

                </tr>

                @endif
                @endforeach

              </tbody>


              <td>TOTAL:$ </td>

            </table>

          </div>





          <div id="Tarjeta" class="table-responsive tabcontent">

            <table class="table table-striped">

              <thead>

                <tr>

                  <th>Detalle</th>

                  <th>Importe</th>

                  <th>Mes</th>

                  <th>Cuota</th>

                  <th>Pago</th>

                  <th>Editar</th>

                  <th>Eliminar</th>

                </tr>

              </thead>

              <tbody>

                @foreach($gastos as $gasto)

                @if($gasto->tarjeta == "Si")

                <tr>

                  <td>{{ $gasto->detalle}}</td>

                  <td>{{ $gasto->importe}}</td>

                  <td>{{ $gasto->mes}}</td>

                  <td>{{ $gasto->cuotas}}</td>

                  <td>{{ $gasto->pago}}</td>

                  <td><a href="{{ route('editar_gasto',$gasto->id)}} ">Editar</a></td>

                  <td>
                    <a href="javascript:document.getElementById('delete-{{ $gasto->id }}').submit()">Eliminar</a>
                    <form id="delete-{{ $gasto->id }}" action="{{ route('eliminar_gasto',$gasto->id) }}" method="post">
                      @method('delete')
                      @csrf
                    </form>
                  </td>

                </tr>

                @endif
                @endforeach

              </tbody>

              <td>TOTAL:$ </td>

            </table>

          </div>

        </section>

      </div>

    </div>

    </div>

    <!-- page end-->

  </section>

</section>

<script>
  function selectTab(evt, tipo) {

    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");

    for (i = 0; i < tabcontent.length; i++) {

      tabcontent[i].style.display = "none";

    }

    tablinks = document.getElementsByClassName("tablinks");

    for (i = 0; i < tablinks.length; i++) {

      tablinks[i].className = tablinks[i].className.replace(" active", "");

    }

    document.getElementById(tipo).style.display = "block";

    evt.currentTarget.className += " active";

  }



  // Get the element with id="defaultOpen" and click on it

  document.getElementById("defaultOpen").click();
</script>

@endsection