@php
$arrayMenu = array(
    ['name' => 'Dashboard','href' => '/home'],
    ['name' => 'Welcome','href' => '/']
);
@endphp

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        i9W3b <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        @foreach($arrayMenu as $key => $value)
            <a class="dropdown-item" href="{{ $value['href'] }}">{{ $value['name'] }}</a>
        @endforeach
    </div>
</li>
