<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rewards;

class RewardsController extends Controller
{
    
    public function index()
    {
      $rewards = Rewards::where('estatus',1)->get();
      return view('rewards.index',compact('rewards'));
    }

    public function create()
    {
       return view('rewards.create');
    }

    public function store(Request $request)
    {
       $request->validate([
        'name'       => 'required',
        'conditions' => 'required',
        'photos'     => 'required'
    ]);

    $rewards = new Rewards([
        'name'        => $request->get('name'),
        'conditions'  => $request->get('conditions'),
        'description' => $request->get('description'),
        'photos'      => $request->get('photos'),
    ]);

    $rewards->save();
    return redirect('/rewards')->with('success', 'Se ha agregado un proovedor');

    }

    public function show($id)
    {
        $reward = Rewards::find($id);

        return view('rewards.show',compact('reward'));

    }

    public function edit($id)
    {
        $reward = Rewards::find($id);
        return view('rewards.edit',compact('reward'));

    }

    public function update(Request $request)
    {
        $rewards = new Rewards([
            'name'        => $request->get('name'),
            'conditions'  => $request->get('conditions'),
            '   ' => $request->get('description'),
            'photos'      => $request->get('photos'),
        ]);
 
 
        $reward = Rewards::find($request->id);
        $reward->name                  = $request->get('name');
        $reward->description           = $request->get('description');
        $reward->conditions            = $request->get('conditions');
        $reward->photos                = $request->get('photos');
        $reward->update();
        return redirect('/rewards')->with('success', 'Se ha actualizado correctamente');

    }


    public function destroy(Request $request)
    {
        $reward = Rewards::find($request->id);
        $reward->estatus = 0;
        $reward->update();
        return redirect('/rewards')->with('success', 'Se ha eliminado correctamente');
    }
}
