@extends($masterLayout)

@section($contentSection)
<form method="POST" action="{{route('authorizer.login')}}">
    {!! csrf_field() !!}

    <div>
        {{trans("authorizer::login.email")}}
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        {{trans("authorizer::login.password")}}
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> {{trans("authorizer::login.remember-me")}}
    </div>

    <div>
        <button type="submit"> {{trans("authorizer::login.login")}} </button>
    </div>
</form>
@endsection