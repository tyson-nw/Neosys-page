@extends('app')

@section('main')
<h1>Pages</h1>
<div><a href='/page/create'>Create new page</a></div>
    @if( session()->has('page_created'))
        <a href="/page/{{session('page_created')['slug'] }}">{{session('page_created')['title'] }}</a> has been created.
    @endif
<ul>
    @foreach($pages as $page)
        <li><a href='/page/{{$page->slug}}'>{{$page->title}}</a>
    @endforeach
</ul>
@endsection
