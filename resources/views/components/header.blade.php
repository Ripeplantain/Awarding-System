@php
if(auth()->user()->can('admin')){
    $role = 'administrator';
} elseif (auth()->user()->can('college')) {
    $role = auth()->user()->department->faculty->college->college_name;
} else {
     $role = auth()->user()->department->long_name;
}
@endphp 

<div class="body-text fs-1"><h2>{{ $role }}</h2></div>
