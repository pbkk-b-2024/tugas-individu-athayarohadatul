@extends('layout.template')

@section('sidebar')
<li class="nav-item menu-open"
           class = "nav-item has-treeview {{ request()->is('pertemuan1/*') ? 'menu-open' : '' }} ">
            <a href="#" class="nav-link {{ request()->is('pertemuan1/*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tugas kedua
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                   <li class="nav-item">
                       <a href="#"
                           class="nav-link {{ request()->routeIs('genap-ganjil') ? 'active' : '' }}">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Genap Ganjil</p>
                       </a>
                   </li>
               </ul>
          </li>
@endsection