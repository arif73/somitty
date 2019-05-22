@extends('layouts.master')
@section('page_main_content')

<div class="box">
    <div class="box-header">
        <h1 class="box-title">Bank Balance</h1>
        <a href="{{ url('/bank-balance/edit') }}" style="float: right;" class="btn btn-danger">Edit Bank Balance</a>
    </div>

	<section class="content">
		<div class="row">
		   <div class="col-md-12">
		   		<div class="box">Total Available Bank Balance</div>
		   		<div class="box-body">
		   			<table>
		   				<thead>
		   					<tr>
		   						<th>Amount</th>
		   						<th>Last Update</th>
		   					</tr>
		   				</thead>
		   				<tbody>
		   					<tr>
		   						<td>৳ {{ $balance->total_amount }}</td>
		   						<td>{{ Carbon\Carbon::parse($balance->updated_at)->toDateString() }}</td>
		   					</tr>
		   				</tbody>
		   			</table>
		   		</div>
		   </div>
		</div>
    </section>
</div>
@endsection
