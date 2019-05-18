@extends('layouts.master')
@section('page_main_content')

<div class="box">
    <div class="box-header">
        <h1 class="box-title">Monthly Summery</h1><br>
        <strong style="color: #999;">{{ DateTime::createFromFormat('!m', $month)->format('F') }} {{$year}}</strong>
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
                            <th colspan="2"></th>
                            <th colspan="5">Cash In</th>
                            <th colspan="4">Cash Out</th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Premium</th>
                            <th>Admistration</th>
                            <th>Fine</th>
                            <th>Profit</th>
                            <th>Total Credit</th>
                            <th>Admistration</th>
                            <th>Entertainment</th>
                            <th>Others</th>
                            <th>Total Debit</th>
                            <th>Comments</th>
                        </tr>
                    </thead>   
                    <tbody>
                        @php
                            $in_admistration = $premium = $fine = $profit = $total_credit = $out_admistration = $entertainment = $others = $total_debit = 0;
                        @endphp
                        @foreach($reports as $report)
                        <tr>
                            <td>{{ $report->member_id }}</td>
                            <td>{{ $report->member->name }}</td>
                            <td>{{ $report->premium }}</td>
                            <td>{{ $report->in_admistration }}</td>
                            <td>{{ $report->fine }}</td>
                            <td>{{ $report->profit }}</td>
                            <td>{{ $report->total_credit }}</td>
                            <td>{{ $report->out_admistration }}</td>
                            <td>{{ $report->entertainment }}</td>
                            <td>{{ $report->others }}</td>
                            <td>{{ $report->total_debit }}</td>
                            <td>{{ $report->comments }}</td>
                        </tr>
                        @php
                            $in_admistration += $report->in_admistration;
                            $premium += $report->premium;
                            $fine += $report->fine;
                            $profit += $report->profit;
                            $total_credit += $report->total_credit;
                            $out_admistration += $report->out_admistration;
                            $entertainment += $report->entertainment;
                            $others += $report->others;
                            $total_debit += $report->total_debit;
                        @endphp

                        @endforeach 
                        
                        <tr style="font-weight: bold; background: #222d32; color: #fff;">
                            <td></td>
                            <td>Total</td>
                            <td>{{ $premium }}</td>
                            <td>{{ $in_admistration }}</td>
                            <td>{{ $fine }}</td>
                            <td>{{ $profit }}</td>
                            <td>{{ $total_credit }}</td>
                            <td>{{ $out_admistration }}</td>
                            <td>{{ $entertainment }}</td>
                            <td>{{ $others }}</td>
                            <td>{{ $total_debit }}</td>
                        </tr>
                    </tbody>
                            
                </table>
            </div>
            <div>
                <legend>BANK BALANCE : {{ $total_credit - $total_debit }}</legend>
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