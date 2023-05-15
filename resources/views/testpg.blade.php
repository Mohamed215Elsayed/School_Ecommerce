@extends('layouts.master')
@section('css')

@section('title')
    empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    empty
@stop
@livewireStyles {{-- --}}
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                {{-- <livewire:counter /> --}}
                @livewire('counter')  {{-- --}}
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@livewireScripts  {{-- --}}
@section('js')
@endsection
