@extends('layouts.master')
@section('page_main_content')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-header">
        	<div class="row">
        		<div class="col-md-5"></div>
        		<div class="col-md-2">
        			<img src="{{ asset('/logo.jpeg') }}" alt="company logo" style="width: 80%;">
        		</div>
        		<div class="col-md-5"></div>
        	</div>
        	<hr style="border: 1px solid #d2d6de;">
        	<div class="row">
        		<div class="col-md-10">
        			<strong>System Summary</strong>
        		</div>
        		<div class="col-md-2" style="float: right;">{{ Carbon\Carbon::today()->format('d-M-Y') }} -
        			<span>{{ Carbon\Carbon::today()->format('l') }}</span>
        		</div>
        	</div>
        	<hr style="border: 1px solid #d2d6de;">
        </div>

        <div class="box-body">
           <div class="col-md-4 col-sm-8 col-xs-12">
           
               <a href="{{ url('user') }}" class="info-box info_box_index" style="color: #000; text-decoration: none; background: #ffefef; border: 1px solid #ddd8d8;">
                   <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>
                   <div class="info-box-content">
                       <span class="info-box-text">Number of Admins</span>
                       <span class="info-box-number" style="margin-top: 10px;">{{ $admins }}</span>
                   </div><!-- /.info-box-content -->
               </a><!-- /.info-box -->
            </div>

			
			<div class="col-md-4 col-sm-8 col-xs-12">

			   <a href="{{ url('member') }}" class="info-box info_box_index" style="color: #000; text-decoration: none; background: #ffefef; border: 1px solid #ddd8d8;">
			       <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
			       <div class="info-box-content">
			           <span class="info-box-text">Total Member</span>
			           <span class="info-box-number" style="margin-top: 10px;"> {{ $members }} </span>
			       </div><!-- /.info-box-content -->
			   </a><!-- /.info-box -->

			   </div>

			   <div class="col-md-4 col-sm-8 col-xs-12">
			   
			   <a href="{{ url('cash-in') }}" class="info-box info_box_index" style="color: #000; text-decoration: none; background: #ffefef; border: 1px solid #ddd8d8;">
			       <span class="info-box-icon bg-olive"><i class="fa fa-dollar"></i></span>
			       <div class="info-box-content">
			           <span class="info-box-text">Cash In(Current Month)</span>
			           <span class="info-box-number" style="margin-top: 10px;">{{ $cash_in }}</span>
			       </div><!-- /.info-box-content -->
			   </a><!-- /.info-box -->

			   </div>

			   <div class="col-md-4 col-sm-8 col-xs-12">
			       
			       <a href="{{ url('cash-out') }}" class="info-box info_box_index" style="color: #000; text-decoration: none; background: #ffefef; border: 1px solid #ddd8d8;">
			
			           <span class="info-box-icon bg-orange"><i class="fa fa-dollar"></i></span>
			           <div class="info-box-content">
			               <span class="info-box-text">Cash Out(Current Month)</span>
			               <span class="info-box-number" style="margin-top: 10px;">{{ $cash_out	 }}</span>
			           </div><!-- /.info-box-content -->

			       </a><!-- /.info-box -->

			   </div>
				
				<div class="col-md-4 col-sm-8 col-xs-12">

				    <a href="{{ url('investments') }}" class="info-box info_box_index" style="color: #000; text-decoration: none; background: #ffefef; border: 1px solid #ddd8d8;">
				
				        <span class="info-box-icon bg-green"><i class="fa  fa-dollar"></i></span>
				        <div class="info-box-content">
				            <span class="info-box-text">Investments(Current Month)</span><br>
				            <span class="info-box-text">Cash In : {{ $investments_in }}</span>
				            <span class="info-box-text" style="margin-top: 5px;">Cash Out : {{ $investments_out }}</span>
				        </div><!-- /.info-box-content -->
				    </a><!-- /.info-box -->

				</div>

			   <div class="col-md-4 col-sm-8 col-xs-12">

			       <a href="{{ url('bank-balance') }}" class="info-box info_box_index" style="color: #000; text-decoration: none; background: #ffefef; border: 1px solid #ddd8d8;">
			
			           <span class="info-box-icon bg-yellow"><i class="fa fa-money"></i></span>
			           <div class="info-box-content">
			               <span class="info-box-text">Total Available Bank Balance</span>
			               <span class="info-box-number" style="margin-top: 10px;">{{ $bank_balance->total_amount }}</span>
			           </div><!-- /.info-box-content -->
			       </a><!-- /.info-box -->
			   </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>

@endsection