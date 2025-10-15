<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ClientFeedbackDataTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ClientFeedback;

class ClientFeedbackController extends Controller
{
    public function index(ClientFeedbackDataTable $dataTable)
    {
        return $dataTable->render('admin.client_feedback.index');
    }

    public function create()
    {
        return view('admin.client_feedback.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'comment'  => 'required|string',
        ]);

        ClientFeedback::create($request->only(['name', 'location', 'comment']));

        return redirect()->route('admin.client-feedback.index')->with('success', 'Client feedback created successfully.');
    }

    public function edit(ClientFeedback $clientFeedback)
    {
        return view('admin.client_feedback.edit', compact('clientFeedback'));
    }

    public function update(Request $request, ClientFeedback $clientFeedback)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'comment'  => 'required|string',
        ]);

        $clientFeedback->update($request->only(['name', 'location', 'comment']));

        return redirect()->route('admin.client-feedback.index')->with('success', 'Client feedback updated successfully.');
    }

    public function destroy(ClientFeedback $clientFeedback)
    {
        $clientFeedback->delete();

        return redirect()->route('admin.client-feedback.index')->with('success', 'Client feedback deleted successfully.');
    }
}
