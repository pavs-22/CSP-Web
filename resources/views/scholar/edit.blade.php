
@include('includes/header')
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  
  @include('includes/navbar')
  @include('includes/menubar')
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Scholar Information
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Students</li>
      </ol>
    </section>
    <!-- Main content -->
    <!-- Edit -->


            	<form class="form-horizontal" method="POST" action="{{ route('scholar.update', ['id' => $scholar->id]) }}">
                @csrf
				@method('put')
                <div class="form-group">
                <label for="time_out" class="col-sm-3 control-label">Institution</label>
                    <div class="col-sm-9">                      
                          <select class="form-control" name="Institution"  >
                            <option value = "{{$scholar->Institution}}">{{$scholar->Institution}}</option>
                               
                            <option value="<?php // echo $ins ?>"><?php // echo $row['institute'] ?></option>
                           
                       </select>
                    </div>
                </div>
                

                <div class="form-group">
                  	<label for="employee" class="col-sm-3 control-label">Unit</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="Unit" name="Unit" value="{{$scholar->Unit}}" oninput="this.value = this.value.toUpperCase()" required>
                  	</div>
                </div>

              <div class="form-group">
                  	<label for="employee" class="col-sm-3 control-label">Area</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="Area" name="Area" value="{{$scholar->Area}}" oninput="this.value = this.value.toUpperCase()" required>
                  	</div>
                </div>


                <div class="form-group">
                  	<label for="employee" class="col-sm-3 control-label">Full Name</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="fullname" name="fullname" value = "{{$scholar->fullname}}" oninput="this.value = this.value.toUpperCase()" required>
                  	</div>
                </div>
               
                <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Family member CARD Member</label>
                    <div class="col-sm-9"> 
                       <input type="text" class="form-control" id="name_of_member" name="name_of_member" value="{{$scholar->name_of_member}}" oninput="this.value = this.value.toUpperCase()" required>
                    </div>
                </div>
                <div class="form-group">
                  	<label for="employee" class="col-sm-3 control-label">Batch</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="batch" name="batch" value="{{$scholar->batch}}" oninput="this.value = this.value.toUpperCase()" required>
                  	</div>
                </div>
                <div class="form-group">
              	<label for="time_out" class="col-sm-3 control-label">Scholar Type</label>
                  	<div class="col-sm-9">                  		
							            <select class="form-control" name="scholarship_type">
    							         <option class="form-control" value = "{{$scholar->scholarship_type}}">{{$scholar->scholarship_type}}</option>
                           <option class="form-control" value="Regular College">Regular College</option>
                           <option class="form-control" value="Regular IP College">Regular IP College</option>
                           <option class="form-control" value="Regular High">Regular High <S></S>chool</option>
                           <option class="form-control" value="Regular Ip High School"> Regular Ip High School</option>
                           <option class="form-control" value="Senior High">Senior High</option>
                           <option class="form-control" value="CAMIA">CAMIA</option>
                           <option class="form-control" value="CSP 2">CSP 2</option>
                           <option class="form-control" value="DSHP Anihan">DSHP Anihan</option>
                           <option class="form-control" value="DSHP Dual Tech">DSHP Dual Tech</option>
                           <option class="form-control" value="DSHP LUZ VIZ MIN">DSHP LUZ VIZ MIN</option>
                           <option class="form-control" value="Balik Skwela College">Balik Skwela College</option>
                           <option class="form-control" value="Balik Skwela High School">Balik Skwela High School</option>
                           <option class="form-control" value="FORBES">FORBES</option>
                           <option class="form-control" value="Brokenshires">Brokenshires</option>
                           <option class="form-control" value="MBA BOAT partners">MBA BOAT partners</option>
                           <option class="form-control" value="Special Scholar">Special Scholar</option>
                           <option class="form-control" value="MRI Excellence Scholaship">MRI Excellence Scholaship</option>
                           <option class="form-control" value="CMDI BAY Senior High School">CMDI BAY Senior High School</option>
                           <option class="form-control" value="CMDI TAGUM Senior High School">CMDI TAGUM Senior High School</option>
                           <option class="form-control" value="CMDI BAY College">CMDI BAY College</option>
                           <option class="form-control" value="CMDI">CMDI</option>
                       </select>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="time_out" class="col-sm-3 control-label">Year Level</label>
                  	<div class="col-sm-9">
          							<select class="form-control" name="Year_level">
        						       <option class="form-control" value = "{{$scholar->Year_level}}" >{{$scholar->Year_level}}</option>
                    		   <option class="form-control" value="Grade 7">Grade 7</option>
							             <option class="form-control" value="Grade 8">Grade 8</option>
                           <option class="form-control" value="Grade 9">Grade 9</option>
                           <option class="form-control" value="Grade 10">Grade 10</option>
                           <option class="form-control" value="Grade 11">Grade 11</option>
                           <option class="form-control" value="Grade 12">Grade 12</option>
                           <option class="form-control" value="First Year">First Year</option>
                           <option class="form-control" value="Second Year">Second Year</option>
                           <option class="form-control" value="Third Year">Third Year</option>
                           <option class="form-control" value="Fourth Year">Fourth Year</option>
                           <option class="form-control" value="Fourth Year">Fifth Year</option>
                      </select>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Course</label>
                    <div class="col-sm-9"> 
                       <input type="text" class="form-control" id="course" name="course" value = "{{$scholar->course}}" oninput="this.value = this.value.toUpperCase()"required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Contact Number</label>
                    <div class="col-sm-9"> 
                       <input type="text" class="form-control" id="contact" name="contact" value = "{{$scholar->contact}}"oninput="this.value = this.value.toUpperCase()" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9"> 
                       <input type="text" class="form-control" id="address" name="Address" value = "{{$scholar->Address}}" oninput="this.value = this.value.toUpperCase()"required>
                    </div>
                </div>
                <div class="form-group">
                <label for="time_out" class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-9">                      
                          <select class="form-control" name="status" >
                            <option value = "{{$scholar->status}}">{{$scholar->Institution}}</option>
                            <option value="ACTIVE">ACTIVE</option>
                            <option value="INACTIVE">INACTIVE</option>
                            <option value="TOTALLY CANCELLED">TOTALLY CANCELLED</option>
                            <option value="GRADUATED">GRADUATED</option>
                            <option value="END OF CONTRACT">END OF CONTRACT</option>
                           
                       </select>
                    </div>
                    </div>
                <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Remarks</label>
                    <div class="col-sm-9"> 
                       <input type="text" class="form-control" id="Remarks" name="Remarks" value = "{{$scholar->Remarks}}" oninput="this.value = this.value.toUpperCase()" required>
                    </div>
                </div>
                
             

               
				
         
    

            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            	 	</div></form>
          	
        </div>
    </div>

</div>

  @include('includes/footer') 
  @include('includes/students_modal')  

  
 
</div>
@include('includes/scripts')

 </body>
</html>
