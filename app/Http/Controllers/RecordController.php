<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Http\Requests\RecordRequest;
use Illuminate\Http\Request;

class RecordController extends Controller
{
  public function __construct()
  {
      $this->authorizeResource(Record::class, 'record');
  }

  public function index()
  {

     $records = Record::all()->sortByDesc('created_at');

    return view('records.index', ['records' => $records]);
  }

    public function create()
    {
        return view('records.create');
    }

    public function store(RecordRequest $request, Record $record)
    {
        $record->sente = $request->sente;
        $record->gote = $request->gote;
        $record->place = $request->place;
        $record->memo = $request->memo;
        $record->thumbnail = $request->thumbnail;
        $record->kifu_uri = $request->kifu_uri;

        $record->user_id = $request->user()->id;
        $record->save();
        return redirect()->route('records.index');
    }

    public function edit(Record $record)
    {
        return view('records.edit', ['record' => $record]);
    }

    public function update(RecordRequest $request, Record $record)
    {
        $record->fill($request->all())->save();
        return redirect()->route('records.index');
    }

    public function destroy(Record $record)
    {
        $record->delete();
        return redirect()->route('records.index');
    }

    public function show(Record $record)
    {
        return view('records.show', ['record' => $record]);
    }
}
