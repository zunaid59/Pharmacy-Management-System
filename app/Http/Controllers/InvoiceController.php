<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Invoice;
use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicine = Medicine::all();
        $invoice = Invoice::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Medicine::all();

        return view('invoice.invoiceForm',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();

        $customer->fill($request->all());
        if($customer->save()){

            $id = $customer->id;

                foreach($request->medicineName as $key =>$value) {
                    $data = array(
                        'customer_id' => $id,
                        'medicine_id' => $value,
                        'invoiceNum' => $request->invoiceNum,
                        'date' => $request->date,
                        'quantity' => $request->quantity[$key],
                        'price' => $request->price[$key],
                        'totalAmount' => $request->amount[$key],
                    );
                    Invoice::insert($data);

                }
        }

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }

    public function findPrice(Request $request){

        $data = Medicine::select('sell_price')->where('id',$request->id)->first();
        return response()->json($data);

    }
}
