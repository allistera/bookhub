@layout('layout')

@section('content')
<div id="isocontent"> 
    @foreach ($ebooks as $ebook)
        <div class="box col1 element transition {{ Str::slug($ebook->genre) }}" data-category="transition">
            <p class="whatshot" style="display:none">{{ $ebook->downloads }}</p> 
            <p class="latest" style="display:none">{{ $ebook->created_at }}</p> 

            <a href="#" class="viewDetails" id="{{ $ebook->id }}">{{ HTML::image('uploads/covers/' . $ebook->cover_photo, $ebook->title) }}</a>

            <div class="bookQuickDetails" >
                <h3>{{ Str::limit_exact($ebook->title, 24) }}</h3>

                <div class="bookVotes">
                    @if ($ebook->checkVoted() == '1')
                        {{ HTML::image('img/arrowactive.png', $ebook->title, array('class' => 'up')) }}
                    @else
                        @if ($ebook->checkVoted() == '0')
                            <a href="#" class="" id="{{ $ebook->id }}">{{ HTML::image('img/arrow.png', $ebook->title, array('class' => 'up')) }}</a>
                        @else
                            <a href="#" class="vote_up" id="{{ $ebook->id }}">{{ HTML::image('img/arrow.png', $ebook->title, array('class' => 'up')) }}</a>
                        @endif
                    @endif
                    <span class="vote_count{{ $ebook->id }}">{{ $ebook->voteCount }}</a></span>
                    @if ($ebook->checkVoted() == '0')
                        {{ HTML::image('img/arrowactive.png', $ebook->title, array('class' => 'down rotate')) }}
                    @else
                        @if ($ebook->checkVoted() == '1')
                            <a href="#" class="" id="{{ $ebook->id }}">{{ HTML::image('img/arrow.png', $ebook->title, array('class' => 'down rotate')) }}</a>
                        @else
                            <a href="#" class="vote_down" id="{{ $ebook->id }}">{{ HTML::image('img/arrow.png', $ebook->title, array('class' => 'down rotate')) }}</a>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
        <div class="bookDetails">
            <h2 id="bookDetailsTitle">Book Title</h2>
            <p class="bookInfo"><span id="bookDetailsUpvotes"></span> Upvotes - <span id="bookDetailsDownvotes"></span>  Downvotes</p>

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
            <hr/>

            <div id="bookDetailsReviews">

            </div>


            <a href="#" class="bookDownload" id="bookDetailsDownload" target="_blank"><div>Download Now</div></a>

        </div>

@endsection
