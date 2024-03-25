
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
    <section class="content">
     
       
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="{{route('scholar.index')}}" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-list"></i>  List</a>
            </div>
         
            <div class="box-body">
              <!-- Wrapping div with overflow-x: auto for horizontal scrolling -->
              <div style="overflow-x:auto;">
                <table id="example1" class="table table-bordered">
                      
                <div class="row">
                        <div class="col-lg-6 col-md-6 col-md-12 col-md-12" style="background: whitesmoke; margin-bottom: 25px">
                            <div class="form-group" style="margin-bottom: 15px">
                          
                                <h4>Scholar Name&nbsp;&nbsp;:&nbsp;&nbsp;{{$scholar->fullname}}</h4>
                                <p>Scholar Code&nbsp;&nbsp;:&nbsp;&nbsp;{{$scholar->Scholar_Code}}</p>
                                <p>Institution&nbsp;&nbsp;:&nbsp;&nbsp;{{$scholar->Institution}}</p>
                                <p>Unit&nbsp;&nbsp;:&nbsp;&nbsp;{{$scholar->Unit}}</p>
                                <p>Area&nbsp;&nbsp;:&nbsp;&nbsp;{{$scholar->Area}}</p>
                                <p>Name of Member&nbsp;&nbsp;:&nbsp;&nbsp;{{$scholar->name_of_member}}</p>
                                <p>Batch&nbsp;&nbsp;:&nbsp;&nbsp;{{$scholar->batch}}</p>
                                <p>Scholarship Type&nbsp;&nbsp;:&nbsp;&nbsp;{{$scholar->scholarship_type}}</p>
                                <p>Year_level&nbsp;&nbsp;:&nbsp;&nbsp;{{$scholar->Year_level}}</p>
                                <p>Course&nbsp;&nbsp;:&nbsp;&nbsp;{{$scholar->course}}</p>
                                <p>Contact&nbsp;&nbsp;:&nbsp;&nbsp;{{$scholar->contact}}</p>
                                <p>Address&nbsp;&nbsp;:&nbsp;&nbsp;{{$scholar->Address}}</p>
                                <p>Status&nbsp;&nbsp;:&nbsp;&nbsp;{{$scholar->status}}</p>
                                <p>Remarks&nbsp;&nbsp;:&nbsp;&nbsp;{{$scholar->Remarks}}</p>

                                
                               
                                
                     
                            </div>
                        </div>
                        <hr>
                    </div>
                    
                <tbody>
                 
               


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
