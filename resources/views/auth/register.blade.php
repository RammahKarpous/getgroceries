@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <h1>Register</h1>
        <x-form formType="register" action="auth.register" method="POST" />
    </div>
@endsection