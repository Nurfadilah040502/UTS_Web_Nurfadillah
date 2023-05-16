<?php

namespace App\Http\Controllers;

use App\Models\MerekOtomotif;
use App\Http\Requests\MerekOtomotifRequest;


class MerekOtomotifController extends Controller
{
    public function index(){
        $MerekOtomotif = MerekOtomotif::get();
        return view ('index', compact('MerekOtomotif') );
        }

        public function tambah(){
        return view ('tambah');
      }

      public function edit($id){
        $MerekOtomotif = MerekOtomotif::where('id', $id)->first();
        return view ('edit',compact('MerekOtomotif'));
      }

      public function lihat($id){
        $MerekOtomotif = MerekOtomotif::where('id', $id)->first();
        return view ('lihat',compact('MerekOtomotif'));
      }


    public function store(MerekOtomotifRequest $request)
    {
             $MerekOtomotif = new MerekOtomotif ();

        $MerekOtomotif->merek     = $request->merek;
        $MerekOtomotif->asal_negara     = $request->asal_negara;
        $MerekOtomotif->save();

        return redirect('/');
    } 
    
    public function update(MerekOtomotifRequest $request,$id)
    {
        $MerekOtomotif = MerekOtomotif::where('id', $id)->first();
        $MerekOtomotif->merek     = $request->merek;
        $MerekOtomotif->asal_negara     =  $request->asal_negara;

        $MerekOtomotif->update();

        return redirect('/');
    }   

    public function hapus($id)
    {
        $MerekOtomotif = MerekOtomotif::where('id', $id)->first();

        $MerekOtomotif->delete();

        return redirect('/');
    }  

}
