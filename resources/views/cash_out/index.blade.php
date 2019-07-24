@extends('layouts.master')
@section('page_main_content')

<div class="box">
    <div class="box-header">
        <h1 class="box-title">All Cash Out</h1>
    </div>

<section class="content">
    <div class="row">
            <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <table id="example1" class="table table-bordered table-hover dataTable text-center" role="grid" aria-describedby="example1_info">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Admistration</th>
                            <th>Entertainment</th>
                            <th>Investment Withdraw</th>
                            <th>Total Debit</th>
                        </tr>
                    </thead>
                         @foreach($cash_out as $each)
                         <tr>
                             <td>{{ $each->id }}</td>
                             <td>{{ $each->member->name }}</td>
                             <td>{{ $each->date }}</td>
                             <td>{{ $each->admistration }}</td>
                             <td>{{ $each->entertainment }}</td>
                             <td>{{ $each->investment_withdraw }}</td>
                             <td>{{ $each->total_debit }}</td>
                         </tr>
                         @endforeach   
                    <tbody>
                    </tbody>
                            
                </table>
            </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
        </div>
</section>

</div>

@endsection