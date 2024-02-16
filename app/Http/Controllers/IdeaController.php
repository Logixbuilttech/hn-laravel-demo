<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIdeaRequest;
use App\Http\Requests\UpdateIdeaRequest;
use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    public function show(Idea $idea) {

        return view('ideas.show',compact('idea'));
    }

    public function store(StoreIdeaRequest $request)
    {
        $validated = $request->validated();

        $validated['user_id'] = auth()->id();

        $idea = Idea::create($validated);

        return redirect()->route('dashboard')->with('success', 'Idea created Succesfully');
    }

    public function destroy(Idea $id) {

        $this->authorize('delete', $id);

        $id->delete();

        return redirect()->route('dashboard')->with('destroy', 'Idea deleted Succesfully');
    }

    public function edit(Idea $idea) {

        $this->authorize('update', $idea);

        $editing = true;
        return view('ideas.show',compact('idea', 'editing'));
    }

    public function update(UpdateIdeaRequest $request,Idea $idea) {

        $this->authorize('update', $idea);

        $validated = $request->validated();

        $idea->update($validated);

        return redirect()->route('ideas.show',$idea->id)->with('success','Idea updated successfully');
    }
}