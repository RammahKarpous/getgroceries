<form method="{{ $method == 'put' ? 'post' : $method }}">

    @if ($formType == 'update')
        <x-input for="profile_picture" type="file" label="" method="{{ $method }}" value="{{ auth()->user()->profile_picture }}"/>
    @endif

    @if ($formType == 'register' || $formType == 'update')
        <x-input for="name" type="text" label="Name" method="{{ $method }}" value="{{ $method === 'put' ? auth()->user()->name : @old('name') }}"/>
    @endif

    <x-input for="email" type="email" label="Email" method="{{ $method }}" value="{{ $method === 'put' ? auth()->user()->email : @old('email') }}"/>

    @if ($formType == 'register' || $formType == 'login')
        <x-input for="password" type="password" label="Password" method="{{ $method }}"/>
    @endif
    
    @if ($formType == 'register')
        <x-input for="password_confirmation" type="password" label="Confirm password"/>
    @endif

    @if ($method === 'put')
        @method('PUT')
    @endif

    <input type="submit" value="{{ ucfirst($formType) }}" class="button button--primary" />
    @csrf
</form>