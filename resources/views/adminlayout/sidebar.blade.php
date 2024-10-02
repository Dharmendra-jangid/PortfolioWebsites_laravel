<div class="d-flex align-items-stretch ">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><i class="bi bi-person-fill  " class="img-fluid  "></i></div>
        <div class="title">

          <h1 class="h5">Dashboard</h1>

        </div>
      </div>

      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
        <li><a href="{{route('admins.index')}}"><i class="icon-home"></i> Home</a></li>
        {{-- <li class=""><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-home"></i>Home </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href=""><i class="bi bi-arrow-bar-right"></i>Banner Update</a></li>
              <li><a href=""><i class="bi bi-arrow-bar-right"></i>About Update</a></li>
              <li><a href=""><i class="bi bi-arrow-bar-right"></i>Service Add</a></li>
            </ul>
          </li> --}}
          <li><a href="{{url('admin/about/1')}}"><i class="bi bi-arrow-bar-right"></i>About Update</a></li>
              <li > <a href="{{route('admins.experience')}}"> <i class="bi bi-eye"></i>Experience </a></li>
              <li > <a href="{{route('admins.service')}}"> <i class="bi bi-eye"></i></i>Service   </a></li>
              <li > <a href="{{route('admins.skil')}}"> <i class="bi bi-eye"></i></i>Skil   </a></li>

              <li > <a href="{{route('admins.project')}}"> <i class="bi bi-eye"></i></i>Project </a></li>
              <li > <a href="{{route('admins.contacts')}}"> <i class="bi bi-eye"></i></i>Contact Me </a></li>
              {{-- <li > <a href="{{route('admins.contact')}}"> <i class="bi bi-eye"></i></i>Contact Me </a></li> --}}






    </nav>

