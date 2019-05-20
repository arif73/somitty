@extends('layouts.master')
@section('page_main_content')


<div class="box">
    <div class="box-header" style="text-align: center;" style="font-family: roboto slab">
        <h1 class="box-title">Member Profile</h1>
    </div>

<section class="content">
    <div class="box">
    	<div class="box-body">
			<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-2">
					<img src="{{ asset('storage/'.$member->photo) }}" alt="member photo" style="width: 100%;">
				</div>
				<div class="col-md-5"></div>
			</div><hr><br>
			<div class="row">
				<div class="col-md-6" style="border-right: 2px solid #3c8dbc;">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-5"><strong>Member Name :</strong></div>
								<div class="col-md-5"><strong>{{ $member->name }}</strong></div>
								<div class="col-md-1"></div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-5"><strong>Member Phone :</strong></div>
								<div class="col-md-5"><strong>{{ $member->phone }}</strong></div>
								<div class="col-md-1"></div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-5"><strong>Member Email :</strong></div>
								<div class="col-md-5"><strong>{{ $member->user->email }}</strong></div>
								<div class="col-md-1"></div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-5"><strong>Gender :</strong></div>
								<div class="col-md-5"><strong>{{ $member->gender }}</strong></div>
								<div class="col-md-1"></div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-5"><strong>Date of Birth :</strong></div>
								<div class="col-md-5"><strong>{{ $member->dob }}</strong></div>
								<div class="col-md-1"></div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-5"><strong>Father Name :</strong></div>
								<div class="col-md-5"><strong>{{ $member->father }}</strong></div>
								<div class="col-md-1"></div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-5"><strong>Mother Name :</strong></div>
								<div class="col-md-5"><strong>{{ $member->mother }}</strong></div>
								<div class="col-md-1"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-5"><strong>National ID :</strong></div>
								<div class="col-md-5"><strong>{{ $member->nid }}</strong></div>
								<div class="col-md-1"></div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-5"><strong>Present Address :</strong></div>
								<div class="col-md-5"><strong>{{ $member->present_addr }}</strong></div>
								<div class="col-md-1"></div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-5"><strong>Permanent Address :</strong></div>
								<div class="col-md-5"><strong>{{ $member->permanent_addr }}</strong></div>
								<div class="col-md-1"></div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-5"><strong>Spouse :</strong></div>
								<div class="col-md-5"><strong>{{ $member->spouse }}</strong></div>
								<div class="col-md-1"></div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-5"><strong>Status :</strong></div>
								<div class="col-md-5">
									<strong>{{ $member->user->status == 1 ? "ACTIVE" : "INACTIVE" }}</strong>
								</div>
								<div class="col-md-1"></div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-5"><strong>Joining Date :</strong></div>
								<div class="col-md-5">
									<strong>{{ Carbon\Carbon::parse($member->created_at)->format('Y-m-d') }}</strong>
								</div>
								<div class="col-md-1"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
				
      	</div>
    </div>
</section>

</div>

@endsection