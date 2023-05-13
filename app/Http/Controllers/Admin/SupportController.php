<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();

        return view('admin/supports/index', compact('supports'));
    }

    public function show(string|int $id)
    {
        //Support::find($id)
        //Support::where('id', '$id')->first //where: onde id é igual o valor de $id e recupera o primeiro valor usando first
        if(!$support = Support::find($id)) {
            return back();
        }
        //dd($support->subject);

        return view('admin/supports/show', compact('support'));
    }

    public function create()
    {
        return view('admin/supports/create');
    }

    public function store(StoreUpdateSupport $request, Support $support)
    {
        $data = $request->all();
        $data['status'] = 'a';

        $support =  $support->create($data);
        return redirect()->route('supports.index');
    }

    public function edit(Support $support, string | int $id)
    {
        if(!$support = $support->where('id', $id)->first()) {
            return back();
        }

        return view('admin/supports.edit', compact('support'));
    }

    public function update(Request $request, Support $support, string $id)
    {


        if(!$support = Support::find($id)) {
            return back();
        }

        $support->update($request->only([
            'subject', 'body'
        ]));

        return redirect()->route('supports.index');
    }

    public function destroy(string | int $id)
    {
        if(!$support = Support::find($id)) {
            return back();
        }
        $support->delete();

        return redirect()->route('supports.index');
    }


}
