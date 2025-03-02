<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StepController extends Controller
{
    public function updateOrder(Request $request)
    {
        $orderedIds = $request->input('orderedIds');

        DB::transaction(function () use ($orderedIds) {
            foreach ($orderedIds as $index => $id) {
                DB::table('steps')
                    ->where('id', $id)
                    ->update(['step_number' => $index + 1]);
            }
        });

        return response()->json(['success' => true]);
    }
}
