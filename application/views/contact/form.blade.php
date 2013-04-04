@layout('layout')

@section('content')

    <div class="clearfix messageArea">

        <h1>Get in Touch</h1>

        @if ($errors->has())
            <div id="error">{{ implode('<br/>', $errors->all()) }}</div>
        @endif
                                    
        {{ Form::open() }}
                
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name') }}
        
            {{ Form::label('email', 'Email Address') }}
            {{ Form::text('email') }}
            
            {{ Form::label('message', 'Message') }}
            {{ Form::textarea('message') }}

            {{ Form::submit('Send') }}
            
        {{ Form::close() }}

    </div>

@endsection
