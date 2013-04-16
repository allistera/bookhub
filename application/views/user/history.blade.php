@layout('layout')

@section('content')

    <div class="clearfix messageArea" style="width: 600px">

        <h1>Download History</h1>

        <table class="downloadHistory" border="1">
            <thead>
                <tr>
                    <th width="200">Download Date</th>
                    <th>eBook Name</th>
                </tr>
            </thead>
            <tbody>
            @foreach($history as $download)
                <tr>
                    <td>{{ $download->created_at }}</td>
                    <td>{{ $download->ebook->title }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>

@endsection
