<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
  
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::select("*")->paginate(10);
          
        return view('users', compact('users'));
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function delete($id)
    {
        User::find($id)->delete();
  
        return back();
    }
}