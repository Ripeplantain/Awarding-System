<li class="nav-item nav-list">
    <a class="nav-link text-light" href="{{ route('home') }}">{{ __('Dashboard') }}</a>
</li>

@can('admin')
    <li class="nav-item nav-list">  
        <a class="nav-link text-light" href="{{route('register')}}">{{ __('Register User') }}</a>
    </li>
@endcan

    <li class="nav-item nav-list">
        <a class="nav-link text-light" href="{{route('award.create')}}">{{ __('Create Award') }}</a>
    </li>


@if(auth()->user()->can('admin') || auth()->user()->can('college'))
    <li class="nav-item nav-list">
        <a class="nav-link text-light" href="{{route('special.create')}}">{{ __('Special Award') }}</a>
    </li>
@endif

