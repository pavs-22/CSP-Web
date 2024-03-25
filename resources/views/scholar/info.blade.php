
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
    <section class="content">
     
       
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="{{route('scholar.index')}}" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> info</a>
            </div>
           
            <div class="box-body">
              <!-- Wrapping div with overflow-x: auto for horizontal scrolling -->
              <div style="overflow-x:auto;">
                <table id="example1" class="table table-bordered">
                  <thead style="background-color: #21ac21">

<!--                  <th class="hidden"></th>-->
                  <th style="color: #ffffff">Scholar Code</th>
                  <th style="color: #ffffff">Institutions</th>
                  <th style="color: #ffffff">Unit</th>
                  <th style="color: #ffffff">Area</th>
                  <th style="color: #ffffff">Name of Scholar</th>
                  <th style="color: #ffffff">Name of Member</th>
                  <th style="color: #ffffff">Batch</th>
                  <th style="color: #ffffff">Scholarship Type</th>
		              <th style="color: #ffffff">Year level</th>
                  <th style="color: #ffffff">Course</th>
                  <th style="color: #ffffff">Contact</th>
                  <th style="color: #ffffff">Address</th>
                  <th style="color: #ffffff">Status</th>
                  <th style="color: #ffffff">Remarks</th>
                  <th style="color: #ffffff">Action</th>
                </thead>
                <tbody>
                 
                @foreach($scholars as $scholar)
            <tr>
                <td>{{$scholar->Scholar_Code}}</td>
                <td>{{$scholar->Institution}}</td>
                <td>{{$scholar->Unit}}</td>
                <td>{{$scholar->Area}}</td>
                <td>{{$scholar->fullname}}</td>
                <td>{{$scholar->name_of_member}}</td>
                <td>{{$scholar->batch}}</td>
                <td>{{$scholar->scholarship_type}}</td>
                <td>{{$scholar->Year_level}}</td>
                <td>{{$scholar->course}}</td>
                <td>{{$scholar->contact}}</td>
                <td>{{$scholar->Address}}</td>
                <td>{{$scholar->status}}</td>
                <td>{{$scholar->Remarks}}</td>
                          <td>
                          <a href="{{('')}}" class="btn btn-primary btn-sm btn-flat view" ><i class='fa fa-info'></i> View</a>
                          <a href="{{route('scholar.account', ['scholar' => $scholar])}}" class="btn btn-primary btn-sm btn-flat delete " ><i class='fa fa-trash'></i> Delete</a>
                          <a href="{{route('scholar.edit', ['scholar' => $scholar])}}" class="btn btn-success btn-sm btn-flat edit"><i class='fa fa-edit'></i> Update</a>
                          </td>
                       
                 </tr>
            @endforeach   

                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>

  @include('includes/footer') 

  
 
</div>
 </body>
</html>
