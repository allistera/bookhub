@layout('layout')

@section('content')

    <div class="clearfix messageArea">

        <h1>Create eBook</h1>

        @if ($errors->has())
            <div id="error">{{ implode('<br/>', $errors->all()) }}</div>
        @endif
                                    
        {{ Form::open_for_files() }}
                
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title') }}
        
            {{ Form::label('author', 'Author') }}
            {{ Form::text('author') }}

            {{ Form::label('publisher', 'Publisher') }}
            {{ Form::text('publisher') }}

            {{ Form::label('publish_date', 'Publish Date') }}
            {{ Form::text('publish_date') }}

            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description') }}

            {{ Form::label('genre', 'Genre') }}
            {{ Form::text('genre') }}

            {{ Form::label('file', 'File') }}
            {{ Form::file('file') }}

            {{ Form::label('cover', 'Cover Photo') }}
            {{ Form::file('cover') }}
            
            {{ Form::submit('Upload') }}
            
        {{ Form::close() }}

    </div>

@endsection
