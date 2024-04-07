<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todolist;
use Illuminate\Http\JsonResponse;


class TodolistController extends Controller
{
    public function index(Request $request){
    
        $GetTodolistDetails = todolist::latest()->get();
        return view('Todolist', compact('GetTodolistDetails'));
    }

    public function Create(Request $request){
       $InsertTodolist  =   todolist::Create([
        'title' => $request->input('title'),
        'description' => $request->input('description')]);

        if($InsertTodolist){
            return response()->json(['status' => 'Success','message'=>'Inserted Successfully']);
        }else{
            return response()->json(['status' => 'failed','message'=>'failed']);
        }
    }

    public function Show(Request $request){
        $TodolistID         =   $request->input('id');
        $TodolistDetails    =   todolist::find($TodolistID);

        if($TodolistDetails){
            $Response['status']         = 'success';
            $Response['id']             = $TodolistDetails->id;
            $Response['title']          = $TodolistDetails->title;
            $Response['description']    = $TodolistDetails->description;
        }else{
            $Response['status']         = 'Failed';
        }

        return json_encode($Response);
    }

    public function update(Request $request){
        $TodolistID         =   $request->input('id');
        $Title              =   $request->input('title');
        $Description        =   $request->input('description');
        $Updatedtodolist    =   todolist::whereId($TodolistID)->update(['title' => $Title,'description' => $Description]);

        if($Updatedtodolist){
            $Response['status']         = 'success';
            $Response['Message']        = 'Updated Successfully';
        }else{
            $Response['status']         = 'Failed';
        }

        return json_encode($Response);
    }

    public function Delete(Request $request){
        $TodolistID         =   $request->input('deleteid');
        $Deletetodolist     =   todolist::where('id',$TodolistID)->delete();

        if($Deletetodolist){
            $Response['status']         = 'success';
            $Response['Message']        = 'Deleted Successfully';
        }else{
            $Response['status']         = 'Failed';
        }

        return json_encode($Response);
    }

    public function updatestatus(Request $request){
        $TodolistID         =   $request->input('checkedValues');
        $TodoId             =   implode(",", $TodolistID);
        $Updatetatus        =   todolist::whereIn('id', $TodolistID)->update(['completed_status' => 'completed']);

        if ($Updatetatus > 0) {
            $Response['status']         = 'success';
            $Response['Message']        = 'updated Successfully';
        } else {
            $Response['status']         = 'Failed';
        }

        return json_encode($Response);
    }

    public function showsingle(Request $request){
        $TodolistID         =   $request->input('id');
        $TodolistDetails    =   todolist::find($TodolistID);

        if($TodolistDetails){
            $Response['status']         = 'success';
            $Response['id']             = $TodolistDetails->id;
            $Response['title']          = $TodolistDetails->title;
            $Response['description']    = $TodolistDetails->description;
        }else{
            $Response['status']         = 'Failed';
        }

        return json_encode($Response);
    }
}
