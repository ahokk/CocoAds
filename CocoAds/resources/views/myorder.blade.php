@extends('welcome')
@section('isi')
    <h1>My Order</h1>

    @foreach($order as $o)

    <div class="dummy">
        <div class="picture">
            <img src="{{url('ProjectImage/'.$o->image)}}" alt="" width="100%" height="100%">
        </div>
        <div class="desc">
            <h1>{{$o->theme}}</h1>
            <p>Budget
                : {{$o->budget}}</p>
            <p>Company :    {{$o->company->budget}}</p>
            <p >Link : <b style="color:#1E88E5;text-decoration: underline;cursor: pointer">{{$o->url}}</b></p>
            <p style="font-size: 20px;">Order By : {{$o->user->name}}</p>
        </div>
    </div>
    @endforeach





@endsection