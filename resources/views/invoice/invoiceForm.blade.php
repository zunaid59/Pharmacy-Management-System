@extends('layouts.admin')
<style>
    .plus{
        font-size: 25px;
    }
</style>
@section('content')
<h3>Invoice System</h3><br>
<form action="{{url('/invoice')}}" method="post">
    {{csrf_field()}}
    <div class="form-row">
        <div class="col-md-4 col-md-offset-2">
            <label for="customerName">Customer Name:</label>
            <input type="text" id="customerName" name="customerName" class="form-control"><br>

            <label for="address"> Address:</label>
            <input type="text" id="address" name="address" class="form-control"><br>

            <label for="mobile"> Mobile No.:</label>
            <input type="text" id="mobile" name="mobileNumber" class="form-control"><br>



        </div>

        <div class="col-md-4">
            <label for="invoiceNo"> Invoice No.:</label>
            <input type="text" id="invoiceNo" name="invoiceNum" class="form-control"><br>

            <label for="date"> Date:</label>
            <input type="date" id="date" name="date" class="form-control"><br>

        </div>

    </div>
    <hr>
    <table class="table table-bordered" cellpadding="10px" cellspacing="5px">
        <thead>
        <th>Medicine Name:</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total Price</th>
        <th style="text-align: center"><a href="#" class="addRow"><i class="fas fa-plus-square plus "></i></a></th>

        </thead>
        <tbody>

        <tr>

            <td>

                <select name="medicineName[]" id="" class="form-control-sm medicineName" >
                    <option value="">
                        Select
                    </option>
                    @foreach($data as $item)

                    <option value="{{$item->id}}">{{$item->medicineName}}</option>
                    @endforeach
                </select>
            </td>
            <td><input type="number" class="form-control-sm quantity" name="quantity[]"></td>
            <td><input type="text" class="form-control-sm price" name="price[]"></td>
            <td><input type="text" class="form-control-sm amount" name="amount[]"></td>
            <td style="text-align: center"><a href="#" class="btn btn-danger remove"><i class="fas fa-times"></i></a></td>

        </tr>
        <tfoot>
             <tr>
                 <td style="border: none"></td>
                 <td style="border: none"></td>
                 <td style="text-align: right"><b>Total Amount :</b></td>
                 <td><b class="total"></b></td>
                 <td><input type="submit" class="btn btn-info btn-sm" value="ADD"></td>
             </tr>
        </tfoot>

        </tbody>

    </table>

</form>


<script type="text/javascript" src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script type="text/javascript">

    $('tbody').delegate('.medicineName','change',function(){
        var tr = $(this).parent().parent();
        var id = tr.find('.medicineName').val();
        var dataId = {'id':id};
        $.ajax({
            type     :'GET',
            url      :'{!! URL::route('findPrice') !!}',
            dataType : 'json',
            data     :  'dataId',
            success  :function(data){
                tr.find('.price').val(data.sell_price);
            }
        });
    });


    $('tbody').delegate('.quantity,.price','keyup',function(){

        var tr = $(this).parent().parent();
        var qty = tr.find('.quantity').val();
        var price = tr.find('.price').val();
        var amount = (qty * price);
        tr.find('.amount').val(amount);
        total();
    });


    $('.addRow').on('click',function(){

        addRow();
    });

    function addRow(){
        var tr = '<tr>'+
                '<td>'+
                '<select name="medicineName[]" id="" class="form-control-sm" >'+
                '@foreach($data as $item)'+
                '<option value="{{$item->id}}">{{$item->medicineName}}</option>'+
                '@endforeach'+
                '</select>'+
                '</td>'+
                '<td><input type="number" class="form-control-sm quantity" name="quantity[]"></td>'+
                '<td><input type="number" class="form-control-sm price" name="price[]"></td>'+
                '<td><input type="number" class="form-control-sm amount" name="amount[]"></td>'+
                '<td style="text-align: center"><a href="#" class="btn btn-danger remove"><i class="fas fa-times"></i></a></td>'+
                '</tr>';
        $('tbody').append(tr);
    };

    function total(){

        var total = 0;
        $('.amount').each(function(i,e){

            var amount = $(this).val()-0;
            total += amount;
        })
        $('.total').html(total);
    }

    $('.table tbody').on('click','.remove',function(){
        $(this).closest('tr').remove();
    });

</script>




@endsection
