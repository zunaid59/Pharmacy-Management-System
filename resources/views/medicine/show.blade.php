@extends('layout.master')
<h3 align="center">Show Single Medicine Information</h3>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6">
            <table class="table table-striped">
                <tr>
                    <td>Medicine Name : </td>
                    <td>{{$medicine->medicineName}}</td>
                </tr>
                <tr>
                    <td>Purchase Price</td>
                    <td>{{$medicine->purchase_price}}</td>
                </tr>
                <tr>
                    <td>Sell Price</td>
                    <td>{{$medicine->sell_price}}</td>
                </tr>
                <tr>
                    <td>Expire Date</td>
                    <td>{{$medicine->expire_date}}</td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td>{{$medicine->quantity}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

