<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="ri-home-line menu-icon"></i>
        <span class="menu-title">Beranda</span>
      </a>
    </li>
    @foreach ($groupModules as $key => $modules)
      @php
        $group = '';
      @endphp
      @foreach ($modules as $name => $module)
        @if($name === 'unvaible')
          @foreach ($module as $menu)
            <li class="nav-item">
              <a class="nav-link" href="{{ $menu->url }}">
                <i class="menu-icon {{ $menu->icon }}"></i>
                <span class="menu-title">{{ $menu->nama }}</span>
              </a>
            </li>
          @endforeach
        @else
          @if($group !== $key)
            <li class="nav-item nav-category">{{ $key }}</li>
          @endif
          @php
            $group = $key;
          @endphp
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#{{ $name.$key }}" aria-expanded="false" aria-controls="pages">
              <i class="{{ $module[0]->module->icon }} menu-icon"></i>
              <span class="menu-title">{{ $name }}</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="{{ $name.$key }}">
              <ul class="nav flex-column sub-menu">
                @foreach ($module as $menu)
                  <li class="nav-item"> <a class="nav-link" href="{{ url($menu->url) }}">{{ $menu->nama }}</a></li>
                @endforeach
              </ul>
            </div>
          </li>
        @endif
      @endforeach
    @endforeach
  </ul>
</nav>