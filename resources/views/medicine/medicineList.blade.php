@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr><th>ID:</th>
                    <th>Medicine Name:</th>
                    <th>Type:</th>
                    <th>Purchase Price:</th>
                    <th>Sell Price:</th>
                    <th>Expire Date:</th>
                    <th>Quantity:</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{!! $item->id !!}</td>
                    <td>{!! $item->medicineName !!}</td>
                    <td>{!! $item->type !!}</td>
                    <td>{!! $item->purchase_price !!}</td>
                    <td>{!! $item->sell_price !!}</td>
                    <td>{!! $item->expire_date!!}</td>
                    <td>{!! $item->quantity!!}</td>
                    <td>
                        <a href="{!! url('medicine') !!}/{!! $item->id !!}/{!! 'edit'!!}" class="btn btn-sm btn-info">Edit</a>

                        <form  action="{{url('/medicine')}}/{{$item->id}}" method="post">
                            @method('DELETE')
                            {!! csrf_field() !!}

                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">

                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
