    

<?php 
//dd($webSettings); 
if(!empty($webSettings->logo)){
  $logo = $webSettings->logo;
}else{
  $logo  = '';
}
?>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="<?php echo asset('uploads/' . $logo); ?>" alt="logo" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            @foreach($menuTree as $menu)
              <li class="nav-item dropdown">
              <a 
              class="nav-link {{ ($menu->url && $menu->parent == '0') ? 'dropdown-toggle' : '' }}" 
              href="{{ $menu->url ? '#' : url('/') }}" 
              role="button" 
              data-bs-toggle="{{ $menu->url ? 'dropdown' : '' }}" 
              aria-expanded="false">

                   {{ $menu->name }}
                  </a>
                    @if(count($menu->children) > 0)
                      <ul class="dropdown-menu">
                            @foreach($menu->children as $child)
                            <li class="dropdown-submenu">
                                <a class="dropdown-item {{ (empty($child->url) || $child->url == '#') ? 'dropdown-toggle' : '' }}" href="{{ empty($child->url) ? '#' : $child->url }}">{{ $child->name }}</a>
                                    @if(count($child->children) > 0)
                                    <ul class="dropdown-menu">
                                            @foreach($child->children as $subChild)
                                                <li class="dropdown-submenu">
                                                  <a class="dropdown-item {{ empty($subChild->url) ? 'dropdown-toggle' : '' }}" href="{{ empty($subChild->url) ? '#' : $subChild->url }}">{{ $subChild->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
            </ul>
          </div>
        </div>
      </nav>








