@extends('layouts.admin')
<style>
    .plus{
        font-size: 25px;

    }
</style>
@section('content')
<div class="container justify-content-center">
    <h3>Invoice System</h3><br>
    <form action="{{url('/invoice')}}" method="post">
        {{csrf_field()}}
        <div class="form-row">
            <div class="col-md-4 col-md-offset-2">
                <label for="customerName">Customer Name:</label>
                <input type="text" id="customerName" class="form-control"><br>

                <label for="address"> Address:</label>
                <input type="text" id="address" class="form-control"><br>

                <label for="mobile"> Mobile No.:</label>
                <input type="text" id="mobile" class="form-control"><br>



         </div>

            <div class="col-md-4">
                <label for="invoiceNo"> Invoice No.:</label>
                <input type="text" id="invoiceNo" class="form-control"><br>

                <label for="date"> Date:</label>
                <input type="date" id="date" class="form-control"><br>

            </div>

        </div>
        <hr>
        <table class="table-bordered" cellpadding="10px" cellspacing="5px">
                <thead>
                <th>Meidicine Name:.</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                <th style="text-align: center"><a href="#" class="addRow"><i class="fas fa-plus-square plus "></i></a></th>
                </thead>
            <tbody>

            <tr>

                <td>
                        <select name="medicineName" id="" class="form-control-sm" >
                            @foreach($data as $item)
                        <option value="{{$item->id}}">{{$item->medicineName}}</option>
                            @endforeach
                    </select>
                </td>
                <td><input type="number" class="form-control-sm quantity" name="quantity"></td>
                <td><input type="number" class="form-control-sm price" name="price"></td>
                <td><input type="number" class="form-control-sm totalAmount" name="totalAmount"></td>
                <td style="text-align: center"><a href="#" class="remove"><i class="fas fa-times-square"></i></a></td>
            </tr>

            <tr><td><input type="submit" class="btn btn-info btn-sm" value="ADD"></td></tr>

            </tbody>

        </table>

    </form>

</div>


<script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
    <script type="text/javascript">
    $('tbody').delegate('.qty,.price,.totalAmount','keyup',function(){
           alert('test');
    });
    $('.addRow').on('click',function(){

           addRow();
    });

    function addRow(){
        var tr = '<tr>'+
            '<td><input type="text" name="medicineName" class="form-control-sm"></td>'+
            '<td><input type="number" class="form-control-sm quantity" name="quantity"></td>'+
            '<td><input type="number" class="form-control-sm price" name="price"></td>'+
            '<td><input type="number" class="form-control-sm totalAmount" name="totalAmount"></td>'+
            '<td><input type="submit" class="btn btn-info btn-sm" value="ADD"></td>'+
        '</tr>';
        $('tbody').append(tr);
    }

</script>





@endsection