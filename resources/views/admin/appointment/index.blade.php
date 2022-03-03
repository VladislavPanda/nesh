@extends('layouts.admin')

@section('content')
<div class="card">
    <!--<div class="card-header">
      <h3 class="card-title">DataTable with minimal features & hover style</h3>
    </div>-->
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>ID</th>
          <th>Имя</th>
          <th>Телефон</th>
          <th>Дата визита</th>
          <th>Первый платёж</th>
          <th>Общая сумма</th>
          <th>Платёж 1</th>
          <th>Платёж 2</th>
          <th>Платёж 3</th>
          <th>Платёж 4</th>
          <th>Сумма рассрочки</th>
        </tr>
        </thead>
        <tbody>
            @foreach($appointments as $key => $value)
                <tr>
                    <td>{{$value['id']}}</td>
                    <td>{{$value['name']}}</td>
                    <td>{{$value['phone']}}</td>
                    <td>{{$value['visit_date']}}</td>
                    <td>{{$value['initial_fee']}}</td>
                    <td>{{$value['total_price']}}</td>
                    <td>{{$value['installment_payment_date1']}}</td>
                    <td>{{$value['installment_payment_date2']}}</td>
                    <td>{{$value['installment_payment_date3']}}</td>
                    @if(isset($value['installment_payment_date4'])) <td>{{$value['installment_payment_date4']}}</td> 
                    @else <td>-</td> @endif
                    <td>{{$value['installment_sum']}}</td>
                    <td>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#procedures" data-target-id="{{ $value['id'] }}" id="procedures_modal" data-url="{{ route('procedures_modal', ['id' => $value['id']])}}">
                        Список процедур
                      </button>
                    </td>
                </tr>

                <div class="modal fade" id="procedures">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Список процедур</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" id="modal-body">
                      
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            @endforeach
        </tbody>
        <tfoot>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection