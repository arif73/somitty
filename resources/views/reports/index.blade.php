@extends('layouts.master')
@section('page_main_content')


<div class="box">
    <div class="box-header">
        <h1 class="box-title">Monthly Summary</h1><br>
        <strong style="color: #999;">{{ DateTime::createFromFormat('!m', $month)->format('F') }} {{$year}}</strong>
    </div>

<section class="content">
    <div class="row">
            <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">

            
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="text-align: center;"><legend>Members Reposts</legend></div>
                <div class="col-md-4"></div>
            </div>

            <div class="dataTables_wrapper form-inline dt-bootstrap table-responsive">
                <table class="table table-bordered table-hover text-center" role="grid">
                    <thead>
                        <tr>
                            <th colspan="2"></th>
                            <th colspan="5">Cash In</th>
                            <th colspan="5">Cash Out</th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Premium</th>
                            <th>Admin</th>
                            <th>Fine</th>
                            <th>Profit</th>
                            <th>Total Credit</th>
                            <th>Admin</th>
                            <th>Entertainment</th>
                            <th>Invest. Withdraw</th>
                            <th>Others</th>
                            <th>Total Debit</th>
                            <th>Comments</th>
                        </tr>
                    </thead>   
                    <tbody>
                        @php
                            $in_admistration = $premium = $fine = $profit = $total_credit = $out_admistration = $entertainment = $investment_withdraw = $others = $total_debit = 0;
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
                            <td>{{ $report->investment_withdraw }}</td>
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
                            $investment_withdraw += $report->investment_withdraw;
                            $others += $report->others;
                            $total_debit += $report->total_debit;
                        @endphp

                        @endforeach 
                        
                        <tr style="font-weight: bold;">
                            <td></td>
                            <td>Total</td>
                            <td>{{ $premium }}</td>
                            <td>{{ $in_admistration }}</td>
                            <td>{{ $fine }}</td>
                            <td>{{ $profit }}</td>
                            <td style="color: #22af28;">{{ $total_credit }}</td>
                            <td>{{ $out_admistration }}</td>
                            <td>{{ $entertainment }}</td>
                            <td>{{ $investment_withdraw }}</td>
                            <td>{{ $others }}</td>
                            <td style="color: red;">{{ $total_debit }}</td>
                            <td style="background: #222d32; color: #fff;">{{ $total_credit - $total_debit }}</td>
                        </tr>
                    </tbody>
                            
                </table>
            </div>

            <br> <hr> <br>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="text-align: center;"><legend>Investment Summary</legend></div>
                <div class="col-md-4"></div>
            </div>

            <div class="dataTables_wrapper form-inline dt-bootstrap table-responsive">
                <table class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th></th>
                            <th colspan="3">Cash In</th>
                            <th colspan="4">Cash Out</th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Investment Name</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Investment Name</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>   
                    <tbody>
                        @php $total_cash_in = $total_cash_out = 0; @endphp
                        @foreach($investments as $investment)
                        <tr>
                            <td>{{ $investment->id }}</td>

                            @if($investment->purpose == 'cash_in')
                                <td>{{ get_investment_by_id($investment->details)->details }}</td>
                                <td>{{ Carbon\Carbon::parse($investment->created_at)->toDateString() }}</td>
                                <td>{{ $investment->amount }}</td>
                                <td>-</td>
                                <td>-</td>
                                <td>0</td>
                                <td>-</td>

                                @php $total_cash_in += $investment->amount; @endphp
                            @else
                                <td>-</td>
                                <td>-</td>
                                <td>0</td>
                                <td>{{ $investment->details }}</td>
                                <td>{{ Carbon\Carbon::parse($investment->created_at)->toDateString() }}</td>
                                <td>{{ $investment->amount }}</td>
                                <td>{{ $investment->status == 1 ? 'Running' : 'Closed' }}</td>
                                
                                @php $total_cash_out += $investment->amount; @endphp
                            @endif
                        </tr>

                        @endforeach 
                        
                        <tr style="font-weight: bold;">
                            <td></td>
                            <td>Total</td>
                            <td></td>
                            <td style="color: #22af28;">{{ $total_cash_in }}</td>
                            <td></td>
                            <td></td>
                            <td style="color: red;">{{ $total_cash_out }}</td>
                            <td style="background: #222d32; color: #fff;">
                                {{ $total_cash_in - $total_cash_out }}
                            </td>
                        </tr>
                    </tbody>
                            
                </table>

                <table>
                    <thead>
                        <tr>
                            <th>Total Bank Balance : </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-weight: bold; color: #195005;">
                            <td>৳ {{ ($total_credit + $total_cash_in) - ($total_debit + $total_cash_out) }}</td>
                        </tr>
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