@extends('welcome')
@section('isi')
    <h1>Order</h1>
    <div class="orderan">
        <form action="{{url('/doAddProduct')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
        <input type="hidden" name="id" value="{{$promo->id}}">
        <span style="float:left;padding-top: 10px;">Company : </span>
        <input type="text" disabled="true" name="url" style="width: 100%;padding-left: 5px;" value="{{$promo->company_name}}" >
        <span style="float:left;padding-top: 10px;">Input URL Address</span>
        <input type="text" name="url" style="width: 100%;padding-left: 5px;" placeholder="Your URL website. . .">
        <span style="float:left;">Theme</span>
        <input type="text" name="theme" style="width: 100%;padding-left: 5px;" placeholder="Your theme website. . .">
        <span style="float:left;">Upload Picture</span>
        <input type="file" name="picture" style="width: 100%">
        <span style="float:left;">Budget</span>
        <input type="text" name="budget" style="width: 100%;padding-left: 5px" placeholder="Your budget website. . .">

        @if(count($errors))
            <p style="color:red;">
                {{ $errors->first() }}
            </p>
        @endif

        <input type="submit" value="Order" style="margin-top: 30px;width: 200px;font-size: 20px;height: 80px;cursor: pointer;" onclick="test()">
        </form>
    </div>

<script>
    function test()
    {
        alert("Transaction Success! your ads will be prepared shortly!");
    }

</script>



@endsection