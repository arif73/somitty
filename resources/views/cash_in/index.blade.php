@extends('layouts.master')
@section('page_main_content')

<div class="box">
    <div class="box-header">
        <h1 class="box-title">All Cash In</h1>
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
                            <th>Premium</th>
                            <th>Admistration</th>
                            <th>Fine</th>
                            <th>Profit</th>
                            <th>Total Credit</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                            
                    <tbody>
                        @foreach($cash_in as $each)
                        <tr>
                            <td>{{ $each->id }}</td>
                            <td>{{ $each->member->name }}</td>
                            <td>{{ Carbon\Carbon::parse($each->date)->format('d-M-Y') }}</td>
                            <td>{{ $each->premium }}</td>
                            <td>{{ $each->admistration }}</td>
                            <td>{{ $each->fine }}</td>
                            <td>{{ $each->profit }}</td>
                            <td>{{ $each->total_credit }}</td>
                            <td>{{ $each->comments }}</td>
                        </tr>
                        @endforeach
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