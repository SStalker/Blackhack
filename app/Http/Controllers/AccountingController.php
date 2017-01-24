<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AccountingRequest;
use App\Accounting;

class AccountingController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $accountings = Accounting::paginate(10);

      return view('accountings.index')
              ->withAccountings($accountings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $types = Accounting::types();
      $periods = Accounting::periods();

      return view('accountings.create')
              ->withTypes($types)
              ->withPeriods($periods);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountingRequest $request, Accounting $acc)
    {
      // We have to change the comma to a dot, otherwise the database cannot insert the data
      $corrected_amount_value = str_replace(',', '.', $request->all()['amount']);
      $request->merge(['amount' => $corrected_amount_value]);

      $accounting = Accounting::create($request->all());

      return redirect(action('AccountingController@show', $accounting->id))
            ->with('message', 'Accounting wurde erstellt!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Accounting $accounting)
    {
      return view('accountings.show')
              ->withAccounting($accounting);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Accounting $accounting)
    {
      $types = Accounting::types();
      $periods = Accounting::periods();
      //dd($accounting);
      return view('accountings.edit')
              ->withAccounting($accounting)
              ->withTypes($types)
              ->withPeriods($periods);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AccountingRequest $request, Accounting $accounting)
    {
      $accounting->update($request->all());

      return redirect('accountings')
            ->with('message', 'Accounting wurde geändert!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accounting $accounting)
    {
      $accounting->delete();
      return redirect('/')
            ->with('message', 'Post wurde gelöscht!');
    }
}
