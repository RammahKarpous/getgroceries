<form action="{{ route($action) }}" method="{{ $method }}">

    @if ($formType == 'update')
        <x-input for="profile_picture" type="file" label="" />
    @endif

    @if ($formType == 'register' || $formType == 'update')
        <x-input for="first_name" type="text" label="First Name"/>
        <x-input for="last_name" type="text" label="Last name"/>
    @endif

    <x-input for="email" type="email" label="Email"/>
    <x-input for="password" type="password" label="Password"/>
    
    @if ($formType == 'register' || $formType == 'update')
        <x-input for="password_confirmation" type="password" label="Confirm password"/>
    @endif

    <input type="submit" value="{{ $formType == 'register' ? 'Register' : 'Login' }}" class="button button--primary">
    @csrf
</form>