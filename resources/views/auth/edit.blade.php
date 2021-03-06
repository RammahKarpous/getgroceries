@extends('layouts.app')

@section('title', 'Update' . auth()->user()->first_name . ' ' . auth()->user()->last_name)
    
@section('content')
    <div class="wrapper">
        <h1>Update</h1>
        <x-form formType="update" action="auth.update" method="POST" />
    </div>
@endsection