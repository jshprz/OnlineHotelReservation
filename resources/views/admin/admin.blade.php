@extends('admin/index')
@section('content')
<style>
.chart{
	margin-left:300px;
	margin-top:200px;
	body{
		overflow-x:none;
	}
}

</style>
<br>
<br>
<br>
<br>
<br>

<div class="content">
   <div class="holder">
	  

	           <div class="col-md-2">
				
	              <div class="panel panel-default">
                  <div class="panel-body"><center><span class="glyphicon glyphicon-picture"></span><b>&nbsp&nbsp&nbspIMAGES</b><br><center><b>{{$image}}</b></div>
  	              </div>
	               </div>

	                 </div>

	              <div class="col-md-3">
		
	                    <div class="panel panel-default">
                            <div class="panel-body"><center><span class="glyphicon glyphicon-user"></span><b>&nbsp&nbsp&nbspUSERS</b><br><center><b>{{$user}}</b></div>
  	                           </div>
	                              </div>

              	  </div>

					<div class="col-md-3">
		
	                    <div class="panel panel-default">
                            <div class="panel-body"><center><span class="glyphicon glyphicon-user"></span><b>&nbsp&nbsp&nbspUNCONFIRMED USERS</b><br><center><b>{{$unconfirmed}}</b></div>
  	                           </div>
	                              </div>

              	  </div>

						<div class="col-md-2">
		
	                    <div class="panel panel-default">
                            <div class="panel-body"><center><span class="glyphicon glyphicon-comment"></span><b>&nbsp&nbsp&nbspFEEDBACKS</b><br><center><b>{{$feedback}}</b></div>
  	                           </div>
	                              </div>

              	  </div>
				<div class="col-md-2">
		
	                 

              	  </div>
					<div class="col-md-2">
		
	                    <div class="panel panel-default">
                            <div class="panel-body"><center><span class="glyphicon glyphicon-ok"></span><b>&nbsp&nbsp&nbspAPPROVE REQUEST</b><br><center><b>{{$approve}}</b></div>
  	                           </div>
	                              </div>

              	  </div>
					
					<div class="col-md-2">
		
	                    <div class="panel panel-default">
                            <div class="panel-body"><center><span class="glyphicon glyphicon-remove"></span><b>&nbsp&nbsp&nbspDENIED REQUEST</b><br><center><b>{{$denied}}</b></div>
  	                           </div>
	                              </div>

              	  </div>

				<div class="chart">	
					<div id="my-dash">
        <div id="chart">
        </div>
        <div id="control">
        </div>
    		</div>
		</div>
    <?= $lava->render('PieChart', 'Donuts', 'my-dash'); ?>
	

	
	</div>
</div>
@endsection