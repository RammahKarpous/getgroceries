@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <h1>Login</h1>
        <x-form formType="login" action="login" method="POST" />
    </div>
@endsection