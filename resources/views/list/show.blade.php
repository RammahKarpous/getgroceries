@extends('layouts.app')

@section('title', $list->name)

@section('content')
    <div class="wrapper">
        <livewire:shipping-list.product-search />
    </div>
@endsection