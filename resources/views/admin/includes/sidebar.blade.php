 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
         <span class="brand-text font-weight-light">Администратор</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="{{ route('admin.index') }}" class="d-block">Alexander Pierce</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Поиск"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-solid fa-users"></i>
                         <p>
                             Пользователи
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="pages/charts/chartjs.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Список пользователей</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('admin.user.create') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Добавить пользователя</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-tree"></i>
                         <p>
                             Эксперты
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="pages/UI/general.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Список экспертов</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/UI/icons.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Назначить эксперта</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/UI/buttons.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Сменить эксперта</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-edit"></i>
                         <p>
                             Заявки
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="pages/forms/general.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Создать заявку</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/forms/advanced.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Список заявок</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-solid fa-microphone"></i>
                         <p>
                             Конференции
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('admin.conference.create') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Создать конференцию</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('admin.conference.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Список конференций</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-solid fa-info"></i>
                         <p>
                             Справочники
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('admin.role.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Роли</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('admin.education.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Образование</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('admin.academic_degree.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Ученая степень</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('admin.academic_title.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Ученое звание</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('admin.event_type.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Виды участия</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('admin.faculty.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Факультеты</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('admin.corpus.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Корпусы</p>
                             </a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
