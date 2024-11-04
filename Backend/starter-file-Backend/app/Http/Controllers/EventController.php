<?php
// controller generated with the help of chatgpt
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Laravel\Prompts\Concerns\Events;

class EventController extends Controller
{
// Test comment for pull request

//    get all events
    public function index() {
        $events = Event::all();
        return response()->json($events);
    }

//    create new event
public function create(Request $request) {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'name'=> 'required|max:255',
            'date'=> 'required|date',
            'time'=> 'required|date_format:H:i:s',
            'location'=> 'required|string|max:255',
            'description'=>'nullable|string',
            'visibility'=>'required|in:Public,Private',
            'recurring'=>'nullable|boolean'
        ]);
        $event = Event::create($validatedData);
        return response()->json($event,201);
}

//    edit event
public function update(Request $request,$id){
        $event = Event::findOrFail($id);
        $event->update($request->all());
        return response()->json($event);
}

//    delete event
public function delete($id){
        $event = Event::findOrFail($id);
        $event->delete();
        return response()->json(null,204);

}


    public function testDbConnection()
    {
        try {
            \DB::connection()->getPdo();
            return response()->json(['status' => 'Database connection successful']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


}
