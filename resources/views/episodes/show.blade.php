@extends('layouts.app')

@section('content')
    <a href="/" class="back-to-index">&lt;- All episodes</a>
        
    <div>
        <h1>{{ $episode->title }}</h1>
        <p>{{ $episode->description }}</p>
        ({{ Carbon\Carbon::parse($episode->pubDate)->format('F j, Y H:i') }})
        <br><br>
        <audio controls preload="metadata" src="{{ $episode->guid }}">
            <source src="{{ $episode->guid }}" type="audio/mpeg">
        </audio>
    </div>
@endsection
