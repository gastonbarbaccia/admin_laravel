@extends('layouts.main')
@section('contenido')


    <!--main content start-->

    <section id="main-content">

      <section class="wrapper">

        <div class="row">

          <div class="col-lg-12">

            <ol class="breadcrumb">

              <li><i class="fa fa-home"></i><a href="">Home</a></li>

            </ol>

          </div>

        </div>

        <!-- page start-->



        <a class="btn btn-primary" style="display: inline-block;" href="{{ route('servicios')}}"><b>Agregar servicio</b></a>
        
        
            @if(session('info'))
                <div class="alert alert-success" style="display: inline-block;padding:7px !important;width:30%;text-align:center"> 
                  {{ session('info') }}
                </div>
            @endif
       <?php
       
       $total = 0;

       ?>

        <div class="row" style="padding-top:1%">
            
          <div class="col-sm-12" >

          <header class="panel-heading" style="text-align: center;">
                            Servicios
          </header>

            <section class="panel table-responsive tabcontent">

              <table class="table table-striped">

                <thead>

                  <tr>

                    <th>Tipo</th>

                    <th>Fecha 1er Vto</th>

                    <th>Fecha 2er Vto</th>

                    <th>Importe</th>

                    <th>Mes</th>

                    <th>Pago</th>

                    <th>Editar</th>

                    <th>Eliminar</th>

                  </tr>

                </thead>

                <tbody>
              
                  @php
                    $total = 0;
                  @endphp

                  @foreach ($services as $service)
                    
                    <tr>

                    <td>{{ $service->tipo }}</td>

                    <td>{{ $service->fechavto }}</td>

                    <td>{{ $service->fechavto2 }}</td>

                    <td>{{ $service->importe }}</td>

                    <td>{{ $service->mes }}</td>

                    <td>{{ $service->pago }}</td>

                    <td>
                    <a href="{{ route('editar_servicio',$service->id)}} ">Editar</a>
                    </td>
                  
                    <td>
                      <a href="javascript:document.getElementById('delete-{{$service->id}}').submit() ">Eliminar</a>
                      <form id="delete-{{ $service->id }}" action="{{ route('eliminar_servicio', $service->id) }}" method="post">
                        @method('delete')
                        @csrf
                      </form>
                    </td>

                  </tr>
                  
                  @php

                  if($service->pago != 'Si'){
                    $total+=$service->importe;
                    }
                  
                  @endphp 

                  @endforeach

                </tbody>


        <td>TOTAL: $<?php echo $total ?></td>


              </table>

            </section>

          </div>

        </div>

        <!-- page end-->

      </section>

    </section>

  </section>
  
@endsection



