@extends('welcome')
@section('isi')
    <h1>List Company</h1>

    @if($tipe == "searching")
        @if($promo->type == "Promo")
            <div class="dummy">
                <div class="picture">
                    <img src="{{url('ProjectImage/'.$promo->image)}}" alt="" width="100%" height="100%">
                </div>
                <div class="desc">
                    <h1>{{$promo->company_name}} ({{$promo->type}})</h1>
                    <p>Popularity : {{$promo->popularity}}</p>
                    <p>Price : {{$promo->price}} / {{$promo->click}} + {{$promo->bonus_click}} Click</p>
                    <p >Link : <b style="color:#1E88E5;text-decoration: underline;cursor: pointer">{{$promo->url}}</b></p>

                    <form action="{{url('/order')}}" method="get">
                        <input type="hidden" name="id" value="{{$promo->id}}">
                        <button type="submit" style="width: 200px;height: 50px; cursor: pointer;margin-top: 20px;font-size: 20px;">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Order
                        </button>
                    </form>
                </div>
            </div>
        @elseif($promo->type == "Not Promo")
            <div class="dummy">
                <div class="picture">
                    <img src="{{url('ProjectImage/'.$promo->image)}}" alt="" width="100%" height="100%">
                </div>
                <div class="desc">
                    <h1>{{$promo->company_name}}</h1>
                    <p>Popularity : {{$promo->popularity}}</p>
                    <p>Price : {{$promo->price}} / {{$promo->click}}  Click</p>
                    <p >Link : <b style="color:#1E88E5;text-decoration: underline;cursor: pointer">{{$promo->url}}</b></p>

                    <form action="{{url('/order')}}" method="get">
                        <input type="hidden" name="id" value="{{$promo->id}}">
                        <button type="submit" style="width: 200px;height: 50px; cursor: pointer;margin-top: 20px;font-size: 20px;">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Order
                        </button>
                    </form>
                </div>
            </div>
        @endif

    @else
        @foreach($promo as $p)
            @if($p->type == "Promo")
                <div class="dummy">
                    <div class="picture">
                        <img src="{{url('ProjectImage/'.$p->image)}}" alt="" width="100%" height="100%">
                    </div>
                    <div class="desc">
                       <h1>{{$p->company_name}} ({{$p->type}})</h1>
                        <p>Popularity : {{$p->popularity}}</p>
                        <p>Price : {{$p->price}} / {{$p->click}} + {{$p->bonus_click}} Click</p>
                        <p >Link : <b style="color:#1E88E5;text-decoration: underline;cursor: pointer">{{$p->url}}</b></p>

                        <form action="{{url('/order')}}" method="get">
                            <input type="hidden" name="id" value="{{$p->id}}">
                            <button type="submit" style="width: 200px;height: 50px; cursor: pointer;margin-top: 20px;font-size: 20px;">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                Order
                            </button>
                        </form>
                    </div>
                </div>
            @elseif($p->type == "Not Promo")
                <div class="dummy">
                    <div class="picture">
                        <img src="{{url('ProjectImage/'.$p->image)}}" alt="" width="100%" height="100%">
                    </div>
                    <div class="desc">
                        <h1>{{$p->company_name}}</h1>
                        <p>Popularity : {{$p->popularity}}</p>
                        <p>Price : {{$p->price}} / {{$p->click}}  Click</p>
                        <p >Link : <b style="color:#1E88E5;text-decoration: underline;cursor: pointer">{{$p->url}}</b></p>

                        <form action="{{url('/order')}}" method="get">
                             <input type="hidden" name="id" value="{{$p->id}}">
                            <button type="submit" style="width: 200px;height: 50px; cursor: pointer;margin-top: 20px;font-size: 20px;">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                Order
                            </button>
                        </form>
                    </div>
                </div>
            @endif
        @endforeach
    @endif





@endsection