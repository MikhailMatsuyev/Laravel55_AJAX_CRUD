<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

use \Illuminate\Http\Response;

class ClientResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo '5211';
        //$data = Client::all();
        //var_dump($data);
        //return view('welcome')->withData($data);
        $cl = Client::all();
        return response()->json($cl);
        //$clients = Client::all();
        //return response()->json($clients);
        //return response()->json($clients);
        //print_r('response()->$clients;',$clients);
        //return response()->$clients;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        var_dump(88);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Client::create($request->all());
        $req=Client::create($request->all());
        return $req['id'];
        //var_dump($req['id']);
/*
        return response()->json([
            "message" => "Success"
        ]);
*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Client::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //var_dump(response());

        Client::find($id)->delete();
        //var_dump(response()->json(['done']));
        //return response()->json(['done']);
        //return 'Hello World';
    }
}
