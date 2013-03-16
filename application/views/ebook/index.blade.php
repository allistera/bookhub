@layout('layout')

@section('content')

    @foreach ($ebooks as $ebook)
        <div class="box col1">

            <a href="#" class="viewDetails">{{ HTML::image('uploads/covers/' . $ebook->cover_photo, $ebook->title) }}</a>

            <div class="bookQuickDetails">
                <h3>{{ $ebook->title }}</h3>

                <div class="bookVotes">
                    {{ HTML::image('img/arrow.png', $ebook->title) }}
                    {{ count($ebook->votes) }}
                    {{ HTML::image('img/arrow.png', $ebook->title, array('class' => 'rotate')) }}
                </div>
            </div>
        </div>
    @endforeach

@endsection
