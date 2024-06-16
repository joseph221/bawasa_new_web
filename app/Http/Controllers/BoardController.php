<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.board.board');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'full_name' =>'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'position' =>'required',
            'category' =>'required',
            'Acdmc_proff_title'=> 'required'
        ]);
        if ($validation) {
            $imageName = str_replace(' ','',$request->full_name).'.'.$request->img->extension();
            $request->img->move('uploads/administration/board',$imageName);
            $board = Board::create([
                'full_name' =>$request->full_name,
                'img' => $imageName,
                'position' => $request->position,
                'category' => $request->category,
                'Acdmc_proff_title' =>$request->Acdmc_proff_title
            ]);

            if($board){
                toast('Board member added successfully','success');
                return redirect()->back();
            }else {
                toast('fail to add a board member','error');
                return redirect()->back();
            }
        }else {
            toast('All field must have values','error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Board $board)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Board $board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $board = Board::findOrFail($id);

        $destination = 'uploads/administration/board'.$board->img;
        if(File::exists($destination)){
            File::delete($destination);
        }

        if($request->img != null){
            $imageName = str_replace(' ','',$request->full_name).'.'.$request->img->extension();
            $request->img->move('uploads/administration/board',$imageName);
            $boards = $board->update([
                'full_name' =>$request->full_name,
                'img' => $imageName,
                'position' => $request->position,
                'category' => $request->category,
                'Acdmc_proff_title' =>$request->Acdmc_proff_title
            ]);

            if($boards){
                toast('board member updated successfully','success');
                return redirect()->back();
            }else {
                toast('fail to updated board member','error');
                return redirect()->back();
            }
        }else {
            toast('All field must have values','error');
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Board $board)
    {
        //
    }
}
