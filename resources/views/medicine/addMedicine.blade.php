@extends('layouts.admin')
<style>
    .addForm{
        margin-top: 100px;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4 col-md-4 addForm">
                <form action="{{url('/medicine')}}" method="post">
                    {{csrf_field()}}

                    Medicine Name:
                    <input type="text" name="medicineName" class="form-control"><br>
                    Type:
                    <input type="text" name="type" class="form-control"><br>
                    <div class="row">
                        <div class="col-md-6">
                            Purchase Price:
                            <input type="text" name="purchase_price" class="form-control"><br>
                        </div>
                        <div class="col-md-6">
                            Sell Price:
                            <input type="text" name="sell_price" class="form-control"><br>
                        </div>
                    </div>
                    Expire Date:
                    <input type="date" name="expire_date" class="form-control"><br>
                    Quantity:
                    <input type="text" name="quantity" class="form-control"><br>
                    <input type="submit" class="btn btn-info">
                </form>
            </div>
        </div>
    </div>



@endsection