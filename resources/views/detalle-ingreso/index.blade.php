@extends('layouts.app')

@section('template_title')
    Detalle Ingreso
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalle ingresos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalle_ingresos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
                                        
										<th>Articulo Id</th>
										<th>Ingreso Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($detalleIngresos as $ingreso)
                                    <tr>
                                        <td>{{$ingreso->id}}</td>
                                        <td>{{$ingreso->articulo_id}}</td>
                                        <td>{{$ingreso->ingreso_id}}</td>
                                        <td>
                                            <form action="{{ route('detalle_ingresos.destroy', [$ingreso->id]) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{url('detalle_ingresos/'.$ingreso->id.'/edit')}}" class="btn btn-success">Mostrar detalles</a>
                                                <button class="btn btn-danger">Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
