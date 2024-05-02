<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href=""> <img alt="image" src="/assets/img/logo.png" class="header-logo"/> <span
            class="logo-name">Admin</span>
        </a>
      </div>     
      <ul class="sidebar-menu">
        <li class="menu-header">Menyu</li>

        

        <li class="dropdown">
          <a href="{{route('admin.students.index')}}" class="nav-link"><i class="fa-solid fa-table"></i><span>Barchasi</span></a>
             
        </li>

        <li class="dropdown">
          <a href="{{route('admin.teachers.index')}}" class="nav-link"><i class="fa-solid fa-chalkboard-user"></i><span>O'qituvchilar</span></a>
        </li>
        <li class="dropdown">
          <a href="{{route('admin.lessons.index')}}" class="nav-link"><i class="fa-solid fa-person-chalkboard"></i><span>To'garaklar</span></a>
        </li>
        <li class="dropdown">
          <a href="{{route('admin.contact.index')}}" class="nav-link"><i class="fa-solid fa-address-card"></i><span>Aloqa</span></a>
        </li>
        <li class="dropdown">
          <a href="{{route('admin.sports.index')}}" class="nav-link"><i class="fa-solid fa-volleyball"></i><span>Sport to'garaklari</span></a>
        </li>

        <li class="dropdown">
          <a href="{{route('admin.news.index')}}" class="nav-link"><i class="fa-regular fa-newspaper"></i><span>Yangiliklar</span></a>
        </li>
        <li class="dropdown">
          <a href="{{route('admin.galleries.index')}}" class="nav-link"><i class="fa-brands fa-envira"></i><span>Gallareya</span></a>
        </li>

        <li class="dropdown">
          <a href="{{route('admin.leaders.index')}}" class="nav-link"><i class="fa-solid fa-people-group"></i><span>Direktor</span></a>
        </li>
        <li class="dropdown">
          <a href="{{route('admin.projects.index')}}" class="nav-link"><i class="fa-solid fa-bars-progress"></i><span>Resurslar</span></a>
        </li>
        <li class="dropdown">
          <a href="{{route('admin.smena1.index')}}" class="nav-link"><i class="fa-solid fa-1"></i><span>1-smena</span></a>
        </li>

        <li class="dropdown">
          <a href="{{route('admin.smena2.index')}}" class="nav-link"><i class="fa-solid fa-2"></i><span>2-smena</span></a>
        </li>

      </ul>
    </aside>
  </div>
  <style>
    .header-logo{
      width: 60px;
      height: 40px !important;
      margin-right: -15px;
    }
  </style>