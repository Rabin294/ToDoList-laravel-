<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\Http\Request;

class ToDoController extends Controller
{

    public function index(){
        return view('welcome', ['listItems'=>ListItem::Where('is_complete',0)->get()]);
    }
  
   public function show($id){
    $listItem = ListItem::find($id);
    $listItem->is_complete = 1;
    $listItem->save();
    return redirect('/');
   }

   public function save(Request $request){
    

    $newListItem = new ListItem;
    $newListItem->name = $request->listItem;
    $newListItem->is_complete = 0;
    $newListItem->save();
    

    return redirect('/');
   }
}
