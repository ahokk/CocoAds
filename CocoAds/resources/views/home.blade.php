@extends('welcome')
@section('isi')
    <h1>Welcome, {{Auth::user()->name}} !</h1>

    <div class="searching-container">
        <h2>Search Website</h2>
        <form action="{{url('/doSearch')}}" method="get">
            {{csrf_field()}}
            <input type="hidden" name="typeSearching" value="searching">
            <input type="text" name="search" class="search" placeholder="Search your website. . . ">
            <button type="submit" style="font-size: 20px; cursor: pointer;">
                <i class="fa fa-search" style="padding: 10px;"  aria-hidden="true"></i>
            </button>
        </form>
    </div>

    <a href="{{url('/promo')}}">
        <div class="browse-container">
            Browse All
        </div>
    </a>
@endsection