<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\WebBaseController;
use App\Http\Requests\Web\NoteStoreAndUpdateRequest;
use App\Models\Note;


class NoteController extends WebBaseController
{
    public function index()
    {
        $notes = Note::all();
        return view('admin.note.index', compact('notes'));
    }

    public function create()
    {
        $note = new Note();
        return view('admin.note.create', compact('note'));
    }

    public function store(NoteStoreAndUpdateRequest $request)
    {
        Note::create($request->all());
        return redirect()->route('note.index');
    }


    public function edit($id)
    {
        $note = Note::findOrFail($id);
        return view('admin.note.edit', compact('note'));

    }

    public function update($id, NoteStoreAndUpdateRequest $request)
    {
        $note = Note::find($id);
        if (!$note) {
            $this->notFound();
            return redirect()->back();
        }
        $note->update($request->all());
        $this->edited();
        return redirect()->route('note.index');
    }


    public function destroy($id)
    {
        $note = Note::find($id);
        if (!$note) {
            $this->notFound();
            return redirect()->back();
        }
        $note->delete();
        $this->deleted();
        return redirect()->back();
    }
}
