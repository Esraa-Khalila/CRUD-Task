<?php

namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Register::all();

        return view('registers.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:registers',
            'password' => 'required|min:8',
            'confirm_password'=>'required|same:password',
        ]);

        Register::create($request->all());

        return redirect()->route('registers.index')->with('success','user created successfully.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
         return view('registers.show',compact('register'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
       return view('registers.edit',compact('register'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
       

        $register->update($request->all());

        return redirect()->route('registers.index')->with('success','user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        $register->delete();

       return redirect()->route('registers.index')
                       ->with('success','user deleted successfully');
    }
}
