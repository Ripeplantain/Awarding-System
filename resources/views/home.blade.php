@extends('layouts.app')

@section('content')

{{-- this component is to show flash message at the top of the body --}}
{{-- <x-success /> --}}

<x-table :awards="$awards"/>

@endsection
