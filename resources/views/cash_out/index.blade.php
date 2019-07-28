@extends('layouts.master')
@section('page_main_content')

<div class="box">
    <div class="box-header">
        <h1 class="box-title">All Cash Out</h1>
        <br>
        <br>

        <!-- Search --> 
  
   <form method="POST" action="{{ url('cash-out/generate') }}">
    @csrf
     

    <div class="row">

    <div class="col-sm-1"> From </div> 
    <div class="col-sm-4">
         <!-- <label>From</label> -->
        <div data-provide="datepicker" class="input-group date"> 
            <input type="text" name="from_date" class="form-control" required=""> 
            <div class="input-group-addon"><span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
    </div> 
    <div class="col-sm-1"> To
     </div> 
     <div class="col-sm-4">
        <!--  <label>To</label> -->
        <div data-provide="datepicker" class="input-group date">
            <input type="text" name="to_date" class="form-control" required=""> 
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
    </div>
   

</div> 

    <br><br> <div class="row"><div class="col-md-4"></div> <div class="col-md-4"><button type="submit" class="btn btn-info " id="cashin">Generate Cash Out</button></div> <div class="col-md-4"></div></div></form>

    </div>
</div>

    
@endsection