<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class scontroller extends Controller
{
    //

}
public function create(){
    return view('inventory.addInventory');
}

public function store(request $request){
    $this->validate($request,[  
        'foto'=>'required|image|mimes:jpeg,png,jpg',
        'nama'=>'required',
        'deskripsi'=>'required',

    ]);
    $foto =$request ->file('foto');
    $foto -> storeAs ('public/foto', $foto->hashName());

    ShowroomController::create([
        'foto' => $foto->hashName(),
        'nama' => $request->nama,
        'deskripsi' => $request -> deskripsi
    ]);
    return redirec()->route('ShowroomController.index');
}

public function edit(ShowroomController $ShowroomController){
    return viw=ew('ShowroomController.edit.ShowroomController',compact('ShowroomController'));
}

public function update(request $request, ShowroomController $ShowroomController){
    $this-> validate($request,[
        'foto'=>'required|image|mimes:jpeg,png,jpg',
        'nama'=>'required',
        'deskripsi'=>'required',
    ]);
    if ($request->file('foto'));
    $foto = storeAs('public/foto/', $foto->hashName());
    storage::delete('public/foto/'.$ShowroomController->foto);

    $ShowroomController->update([
        'foto'=> $foto->hashName(),
        'nama'=> $request->nama,
        'deskripsi'=> $request->deskripsi
    ])
}else{
    $ShowroomController->update([
        'nama'-> $request -> nama,
        'deskripsi'=>$request -> deskripsi
    ]);
}
return redirect()->route('inventory.index');

public function destroy(ShowroomController $ShowroomController){
    storage::delete('public/foto/'.$ShowroomController->foto);
    $ShowroomController->delete();
    return redirect()->route('ShowroomController.index');
}
?>