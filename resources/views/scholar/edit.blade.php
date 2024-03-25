
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
        List of All Students
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Students</li>
      </ol>
    </section>
    <!-- Main content -->
    <!-- Edit -->



            @if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
         
            	<form class="form-horizontal" method="POST" action="{{route('scholar.update',['scholar'=>$scholars])}}">
                @csrf
				@method('put')
                <div class="form-group">
                <label for="time_out" class="col-sm-3 control-label">Institution</label>
                    <div class="col-sm-9">                      
                          <select class="form-control" name="Institution"  >
                            <option value = "{{$scholars->Institution}}">{{$scholars->Institution}}</option>
                               <?php 
                               $conn = new mysqli('localhost', 'root', '', 'graduates');                               
                               if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                               }
                               $sql ="Select * From scholars WHERE institute NOT LIKE '' GROUP BY institute";
                               $query = $conn->query($sql);
                                  while($row = $query->fetch_assoc()){
                                    $ins = $row['institute'];
                            ?>
                            <option value="<?php // echo $ins ?>"><?php // echo $row['institute'] ?></option>
                            <?php
                                   } 
                            ?>
                       </select>
                    </div>
                </div>
                

                <div class="form-group">
                <label for="time_out" class="col-sm-3 control-label">Unit</label>
                    <div class="col-sm-9">                      
                          <select class="form-control" name="Unit">
                            <option value = "{{$scholars->Unit}}">{{$scholars->Unit}}</option>
                               <?php 
                               $conn = new mysqli('localhost', 'root', '', 'graduates');                               
                               if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                               }
                               $sql ="Select * From scholars WHERE Unit NOT LIKE '' GROUP BY Unit";
                               $query = $conn->query($sql);
                                  while($row = $query->fetch_assoc()){
                                    $unit = $row['Unit'];
                            ?>
                            <option value="<?php // echo $unit ?>"><?php // echo $row['Unit'] ?></option>
                            <?php
                                   } 
                            ?>
                       </select>
                    </div>
                </div>


                <div class="form-group">
                <label for="time_out" class="col-sm-3 control-label">Area</label>
                    <div class="col-sm-9">                      
                          <select class="form-control" name="Area">
                            <option value = "{{$scholars->Area}}">{{$scholars->Area}}</option>
                               <?php 
                               $conn = new mysqli('localhost', 'root', '', 'graduates');                               
                               if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                               }
                               $sql ="Select * From scholars WHERE Area NOT LIKE '' GROUP BY Area";
                               $query = $conn->query($sql);
                                  while($row = $query->fetch_assoc()){
                                    $area = $row['Area'];
                            ?>
                            <option value="<?php // echo $area ?>"><?php // echo $row['Area'] ?></option>
                            <?php
                                   } 
                            ?>
                       </select>
                    </div>
                </div>

                <div class="form-group">
                  	<label for="employee" class="col-sm-3 control-label">Full Name</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="fullname" name="fullname" value = "{{$scholars->fullname}}" oninput="this.value = this.value.toUpperCase()" required>
                  	</div>
                </div>
               
                <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Family member CARD Member</label>
                    <div class="col-sm-9"> 
                       <input type="text" class="form-control" id="name_of_member" name="name_of_member" value = "{{$scholars->name_of_member}}" oninput="this.value = this.value.toUpperCase()" required>
                    </div>
                </div>
                <div class="form-group">
                <label for="time_out" class="col-sm-3 control-label">Batch</label>
                    <div class="col-sm-9">                      
                          <select class="form-control" name="batch">
                            <option value = "{{$scholars->batch}}">{{$scholars->batch}}</option>
                            
                               <?php 
                               $conn = new mysqli('localhost', 'root', '', 'graduates');                               
                               if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                               }
                               $sql ="Select * From `scholars` WHERE `batch` <= 25 AND `batch` NOT LIKE 'CARD%' AND `batch` NOT LIKE 'SS%' AND `batch` NOT LIKE '' GROUP BY `batch` ORDER BY `batch`";
                               $query = $conn->query($sql);
                                  while($row = $query->fetch_assoc()){
                                    $batch = $row['batch'];
                            ?>
                            
                            <option value="<?php // echo $batch ?>"><?php // echo $row['batch'] ?></option>
                            <?php
                                   } 
                            ?>
                       </select>
                    </div>
                </div>
                <div class="form-group">
              	<label for="time_out" class="col-sm-3 control-label">Scholar Type</label>
                  	<div class="col-sm-9">                  		
							            <select class="form-control" name="scholarship_type">
    							         <option value="None" class="form-control" value = "{{$scholars->scholarship_type}}">{{$scholars->scholarship_type}}</option>
                           <option class="form-control" value="Regualar College">Regualar College</option>
                           <option class="form-control" value="Regualar IP College">Regualar IP College</option>
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
        						       <option value="None" class="form-control" value = "{{$scholars->Year_level}}">{{$scholars->Year_level}}</option>
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
                       <input type="text" class="form-control" id="course" name="course" value = "{{$scholars->course}}" oninput="this.value = this.value.toUpperCase()"required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Contact Number</label>
                    <div class="col-sm-9"> 
                       <input type="text" class="form-control" id="contact" name="contact" value = "{{$scholars->contact}}"oninput="this.value = this.value.toUpperCase()" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9"> 
                       <input type="text" class="form-control" id="address" name="Address" value = "{{$scholars->Address}}" oninput="this.value = this.value.toUpperCase()"required>
                    </div>
                </div>
                <div class="form-group">
                <label for="time_out" class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-9">                      
                          <select class="form-control" name="status">
                            <option value = "{{$scholars->status}}">{{$scholars->status}}</option>
                               <?php 
                               $conn = new mysqli('localhost', 'root', '', 'graduates');                               
                               if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                               }
                               $sql ="Select * From scholars WHERE status NOT LIKE '' GROUP BY status";
                               $query = $conn->query($sql);
                                  while($row = $query->fetch_assoc()){
                                    $st = $row['status'];
                            ?>
                            <option value="<?php // echo $st ?>"><?php // echo $row['status'] ?></option>
                            <?php
                                   } 
                            ?>
                       </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Remarks</label>
                    <div class="col-sm-9"> 
                       <input type="text" class="form-control" id="Remarks" name="Remarks" value = "{{$scholars->Remarks}}" oninput="this.value = this.value.toUpperCase()" required>
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
