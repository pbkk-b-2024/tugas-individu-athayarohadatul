<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
      <div class="sidebar-brand-icon">
        <img src="{{ asset('img/zalora.png') }}" alt="Brand Image" class="" style="width: 100px; height: 50px;">
      </div>
      <div class="sidebar-brand-text mx-1">
        <img src="{{ asset('img/tittle.png') }}" alt="Brand Image" class="" style="width: 90px; height: 150px;">
      </div>
    </a>
  
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
  
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-home"></i>
        <span>Dashboard</span></a>
    </li>
  
    @if (in_array(auth()->user()->level, ['Admin', 'Penjual']))
    <li class="nav-item">
      <a class="nav-link" href="{{ route('barang') }}">
        <i class="fa-solid fa-shirt"></i>
        <span>Produk</span></a>
    </li>
    @endif

    @if (auth()->user()->level == 'Admin')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('penjual') }}">
        <i class="fa-solid fa-shirt"></i>
        <span>Sellers</span></a>
    </li>
    @endif

    @if (auth()->user()->level == 'Admin')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('kategori') }}">
        <i class="fas fa-fw fa-tags"></i>
        <span>Kategori</span></a>
    </li>
    @endif
   
    @if (auth()->user()->level == 'Admin')
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="fas fa-fw fa-tags"></i>
        <span>Sub Kategori</span></a>
    </li>
    @endif

    @if (auth()->user()->level == 'Admin')
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="fas fa-fw fa-tags"></i>
        <span>Users</span></a>
    </li>
    @endif
     
  
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
  
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  
    
  
  </ul>