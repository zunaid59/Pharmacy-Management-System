@extends('layouts.admin')

@section('content')

    <div class="col" style="margin: 0px 0px 20px 20px">
        <form action="{{url('/medicine')}}/{{$medicine->id}}}}" method="post">
            @method('put')
            {{csrf_field()}}
            Medicine Name:
            <input type="text" name="medicineName" class="form-control" value="{{$medicine->medicineName}}"><br>
            Type:
            <input type="text" name="type" class="form-control" value="{{$medicine->type}}"><br>
            Purchase Price:
            <input type="text" name="purchase_price" class="form-control" value="{{$medicine->purchase_price}}"><br>
            Sell Price:
            <input type="text" name="sell_price" class="form-control" value="{{$medicine->sell_price}}"><br>
            Expire Date:
            <input type="date" name="expire_date" class="form-control" value="{{$medicine->expire_date}}"><br>
            Quantity:
            <input type="text" name="quantity" class="form-control" value="{{$medicine->quantity}}"><br>
            <input type="submit" class="btn btn-info" value="Update">
        </form>

    </div>





@endsection