@layout('layout')

@section('content')

    <div class="clearfix messageArea">

        <h1>Login</h1>

        @if ($errors->has())
            <div id="error">{{ implode('<br/>', $errors->all()) }}</div>
        @endif
                                    
        {{ Form::open() }}
                
            {{ Form::label('username', 'Username') }}
            {{ Form::text('username') }}
        
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password') }}
            
            {{ Form::submit('Login') }}
            
        {{ Form::close() }}

    </div>

@endsection
