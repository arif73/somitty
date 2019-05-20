@extends('layouts.master')
@section('page_main_content')

@if(session('msg'))
        <div class="alert alert-success alert-dismissible notify">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Success!</h4>
            {{ session('msg') }}
        </div>
@endif
@if ($errors->any())
	<div class="alert alert-danger alert-dismissible notify">
	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	    <h4><i class="icon fa fa-warning"></i>Error!</h4>
	    @foreach ($errors->all() as $error){{ $error }}@endforeach
	</div>
@endif

<div class="box">
    <div class="box-header" style="text-align: center;">
        <h1 class="box-title">Add Cash Out</h1>
    </div>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
	    	<div class="box">
	       		<div class="box-body">
					<form role="form" method="post" action="{{ url('/cash-out/store') }}">
						@csrf
						<div class="box-body">

							<div class="form-group row">
								<div class="col-md-2"></div>
								<div class="col-md-2"> <label for="name">Select Member :</label> </div>
								<div class="col-md-5">
									<select name="member" class="form-control">
										<option value="">Select</option>
										@foreach($members as $member)
										<option value="{{ $member->id }}">{{ $member->name }}</option>
										@endforeach
									</select>
								</div>
								<div class="col-md-3"></div>
							</div>

							<div class="form-group row">
								<div class="col-md-2"></div>
								<div class="col-md-2"> <label for="date">Date :</label> </div>
								<div class="col-md-5">
									<input type="date" name="date" value="{{ old('date') }}" class="form-control" required>
								</div>
								<div class="col-md-3"></div>
							</div>

							<div class="form-group row">
								<div class="col-md-2"></div>
								<div class="col-md-2"> <label for="admistration">Admistration :</label> </div>
								<div class="col-md-5">
									<input type="number" name="admistration" value="{{ old('admistration') }}" class="form-control" required>
								</div>
								<div class="col-md-3"></div>
							</div>

							<div class="form-group row">
								<div class="col-md-2"></div>
								<div class="col-md-2"> <label for="entertainment">Entertainment :</label> </div>
								<div class="col-md-5">
									<input type="number" name="entertainment" value="{{ old('entertainment') }}" class="form-control" required>
								</div>
								<div class="col-md-3"></div>
							</div>							

							<div class="form-group row">
								<div class="col-md-2"></div>
								<div class="col-md-2"> <label for="investment_withdraw">Investment Withdraw :</label> </div>
								<div class="col-md-5">
									<input type="number" name="investment_withdraw" value="{{ old('investment_withdraw') }}" class="form-control" required>
								</div>
								<div class="col-md-3"></div>
							</div>

							<div class="form-group row">
								<div class="col-md-2"></div>
								<div class="col-md-2"> <label for="others">Others :</label> </div>
								<div class="col-md-5">
									<input type="number" name="others" value="{{ old('others') }}" class="form-control" required>
								</div>
								<div class="col-md-3"></div>
							</div>

						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<div class="form-group row">
								<div class="col-md-3"></div>
								<div class="col-md-1"></div>
								<div class="col-md-5">
									<button type="submit" class="btn btn-success btn-block">Add Cash Out</button>
								</div>
								<div class="col-md-3"></div>
							</div>
						</div>	
				
				</form>
	       		</div>
	      	</div>
	      
	    </div>
    </div>
</section>

</div>

@endsection