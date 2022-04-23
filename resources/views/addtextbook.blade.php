<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{asset('template/style.css')}}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{asset('template/css/responsive.css')}}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{asset('template/css/colors.css')}}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{asset('template/css/bootstrap-select.css')}}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{asset('template/css/perfect-scrollbar.css')}}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{asset('template/css/custom.css')}}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="{{asset('template/images/logo/logo_icon.png')}}" alt="#" /></a>
                     </div>
                  </div>
                  <!-- <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="{{asset('template/images/layout_img/user_img.jpg')}}" alt="#" /></div>
                        <div class="user_info">
                           <h6>John David</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div> -->
               </div>
               <div class="sidebar_blog_2">
                  <h4>Greenobooks</h4>
                  <ul class="list-unstyled components">
                    
                     <li><a href="{{route('textbook.create')}}"><i class="fa fa-clock-o orange_color"></i> <span>Dashboard</span></a></li>
                     <li><a href="widgets.html"><i class="fa fa-university orange_color"></i> <span>School</span></a></li>
                     <li><a href="widgets.html"><i class="fa fa-users yellow_color"></i> <span>Student</span></a></li>
                     <li><a href="widgets.html"><i class="fa fa-book orange_color"></i> <span>Textbook</span></a></li>
                     <li><a href="tables.html"><i class="fa fa-book blue_color"></i> <span>Notebooks</span></a></li>
                     <li><a href="tables.html"><i class="fa fa-book red_color"></i> <span>Schoolwise Notebooks</span></a></li>
                     <li><a href="tables.html"><i class="fa fa-truck purple_color"></i> <span>Shipping Charge</span></a></li>
                     <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Order details</span></a></li>
                     <li><a href="tables.html"><i class="fa fa-file-text-o purple_color2"></i> <span>Stock Point</span></a></li>
                    
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Add Notebooks</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="profile.html">> <span>Brand</span></a>
                           </li>
                           <li>
                              <a href="project.html">> <span>Speciality</span></a>
                           </li>
                           <li>
                              <a href="login.html">> <span>Pages</span></a>
                            </li>
                        </ul>
                     </li>
                     <li><a href="map.html"><i class="fa fa-power-off purple_color2"></i> <span>Logout</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="right_topbar">
                           <div class="icon_info">
                              
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><span class="name_user">Logout</span></a>
                                    <div class="dropdown-menu">
                                       
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <!-- <div class="page_title">
                              <h2>DISTRIB</h2><br>
                              <p>Add school</p>
                           </div> -->
                        </div>
                     </div>
                     <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">ADD TEXTBOOK</h3>
                    <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('textbook.index') }}"> Back</a>
        </div>
                    <form class="forms-sample" action="{{route('textbook.store')}}" method="POST">
                       @csrf
                        <div class="row">
                        <div class="col-sm">
                        <label for="exampleInputName1">School</label>
                        <input type="text" class="form-control"name="school_id" placeholder="Select school"><br>
                      </div>
                      <div class="col-sm">
                      <label for="exampleInputName1">Class</label>
                        <input type="text" class="form-control"name="class_id"placeholder="select class"><br>
                      </div>
                     </div>
                     <div class="row">
                     <div class="col-sm">
                        <label for="exampleInputEmail3">Subject</label>
                        <input type="text" class="form-control" name="subject"><br>
                      </div>
                      <!-- <div class="col-sm">
                     
                      <label>Select your district</label>
                      <select  style="width:100%">
                        <option value="AL">select your district</option>
                        <option value="WY">calicut</option>
                        <option value="AM">malapuram</option>
                        <option value="CA">Canada</option>
                        <option value="RU">Russia</option>
                      </select>
                    </div> -->
                        </div>
                    
                     
                      <div class="row">
                      <div class="col-sm">
                        <label for="exampleInputPassword4">Book Name</label><br>
                        <input type="text" class="form-control"name="bookname"><br>
                      </div>
                      <div class="col-sm">
                        <label for="exampleInputPassword4">Publisher</label><br>
                        <input type="text" class="form-control" name="publisher"><br>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-sm">
                        <label for="exampleInputPassword4">HSN</label>
                        <input type="text" class="form-control" name="hsn"><br>
                      </div>
                      <div class="col-sm">
                        <label for="exampleInputPassword4">GST</label>
                        <input type="text" class="form-control" name="gst"><br>
                      </div>
                      <!-- <div class="col-sm">
                        
                      <label>School Logo</label><br>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                        </div>
                        </div> -->
                        </div>
                      
                      <!-- <div class="col-sm">
                        <label>School image</label><br>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                        </div> -->
                     
                      
                      <div class="col-sm">
                        <label for="exampleInputPassword4">Price</label>
                        <input type="text" class="form-control" name="price" ><br>
                      </div>
                      <div class="col-sm">
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-white">Cancel</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
                    
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2022 Designed by ASF designs All rights reserved.
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{asset('template/js/jquery.min.js')}}"></script>
      <script src="{{asset('template/js/popper.min.js')}}"></script>
      <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
      <!-- wow animation -->
      <script src="{{asset('template/js/animate.js')}}"></script>
      <!-- select country -->
      <script src="{{asset('template/js/bootstrap-select.js')}}"></script>
      <!-- owl carousel -->
      <script src="{{asset('template/js/owl.carousel.js')}}"></script> 
      <!-- chart js -->
      <script src="{{asset('template/js/Chart.min.js')}}"></script>
      <script src="{{asset('template/js/Chart.bundle.min.js')}}"></script>
      <script src="{{asset('template/js/utils.js')}}"></script>
      <script src="{{asset('template/js/analyser.js')}}"></script>
      <!-- nice scrollbar -->
      <script src="{{asset('template/js/perfect-scrollbar.min.js')}}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{asset('template/js/custom.js')}}"></script>
      <script src="{{asset('template/js/chart_custom_style1.js')}}"></script>
   </body>
</html>