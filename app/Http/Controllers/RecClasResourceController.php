<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reclas;

use App\Clas;

use Illuminate\Support\Facades\DB;

class RecClasResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function x($par){
        $arr = "";
        $reC = Reclas::find($par);
        foreach ($reC->clients as $p)
        {
            $arr=$arr."<p>".$p->last_name." ".$p->first_name."</p>";
        }
        return $arr;
    }

    public function index()
    {

        $reC = Reclas::all();
        foreach ($reC as $r){
            $r->clas_id=Clas::find($r->clas_id)->name;
            $r->uuu=$this->x($r->id);

        }


        return response()->json($reC);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$this->destroy();
        $reC = Reclas::all();
        foreach ($reC as $r){
            $this->destroy($r->id);
        }


        foreach ($request->input('clas_date') as $val) {
            DB::insert('insert into reclases (clas_date, clas_id, clas_start_time, clas_duration, clas_start_date, clas_end_date)
                              values (?, (SELECT id FROM clases WHERE name = ? ), ?, ?, ?, ?)',
                    [   $val['date'],
                        $request->input('clas_name_input'),
                        $request->input('clas_start_time'),
                        $request->input('clas_duration'),
                        $request->input('clas_start_date'),
                        $request->input('clas_end_date')
                    ]);
        }
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
        if($request->clas_name) {
            $id_clas = DB::table('clases')->where('name', $request->clas_name)->value('id');
            DB::update('update reclases set clas_date = ?, clas_start_time=?, clas_duration=?,clas_id=? where id = ?',
                [
                    $request->input('clas_date'),
                    $request->input('clas_start_time'),
                    $request->input('clas_duration'),
                    $id_clas,
                    $id
                ]);
        }else{
            /*ДОбавляем клиентов здесь*/
            $reC = Reclas::find($id);

            foreach ($request->clients_id as $r) {
                $reC->clients()->attach($r);
            }


            $reC = Reclas::find($id);
            foreach ($reC->clients as $p)
            {
                $arr[$p->first_name]=$p->last_name;
            }
            return response()->json($arr);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reclas::find($id)->delete();
    }
}
