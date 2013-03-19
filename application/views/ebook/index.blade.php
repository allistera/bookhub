@layout('layout')

@section('content')

    @foreach ($ebooks as $ebook)
        <div class="box col1">

            <a href="#" class="viewDetails" id="{{ $ebook->id }}">{{ HTML::image('uploads/covers/' . $ebook->cover_photo, $ebook->title) }}</a>

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

        <div class="bookDetails">
            <h2 id="bookDetailsTitle">Book Title</h2>
            <p class="bookInfo">12 Upvotes - 2 Downvotes</p>

            <div class="clearfix"></div>
            <p class="bookDescription" id="bookDetailsDesc">
                Book Description
            </p>
            <div class="clearfix"></div>

            <h3>Basic Information</h3>
            <div class="bookPoints">
                <ul style="float:left">
                    <li><strong>Genre</strong> <span id="bookDetailsGenre"></span> </li>
                    <li><strong>Publisher</strong> <span id="bookDetailsPublisher"></span> </li>
                    <li><strong>Publish Date</strong> <span id="bookDetailsPublishDate"></span> </li>
                </ul>
                <ul style="float:right">
                    <li><strong>Uploaded</strong> <span id="bookDetailsUploadDate"></span></li>
                </ul>
            </div>
            <div class="clearfix"></div>

            <h3>Reviews</h3>


            <a href="#" class="bookDownload"><div>Download Now</div></a>

        </div>
      
@endsection
