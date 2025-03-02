<?php

namespace App\Http\Controllers;

use App\Models\SubscribersModel;
use App\Models\SourcesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming data
        $validator = Validator::make($request->all(), [
            'sourceId' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'subscriberId' => 'required',
            'mobileNumber' => 'required|string|max:15',
            'email' => 'nullable|email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => 'Validation failed',
                'messages' => $validator->errors()
            ], 400);
        }

        // Check if sourceId exists and has status 'ACTIVE'
        $source = SourcesModel::where('id', $request->sourceId)
                       ->where('Status', 'ACTIVE')
                       ->first();

        if (!$source) {
            return response()->json([
                'error' => 'Invalid source ID or source is not active'
            ], 400);
        }

        // Check if subscriberId exists in the subscribers table and has status 'ACTIVE'
        $subscriber = SubscribersModel::where('subscribers_id', $request->subscriberId)
                                ->first();
        
        if ($subscriber) {
            return response()->json([
                'message' => 'The subsriber exists.'
            ], 201);
        }else{
            // Create a new subscriber
            $newSubscriber = SubscribersModel::updateOrCreate([
                'source_id' => $request->sourceId,
                'subscriber_name' => $request->name,
                'subscribers_id' => $request->subscriberId,
                'subscriber_phone_number' => $request->mobileNumber,
                'subscriber_email' => $request->email,
            ]);

            // Return a JSON response with the saved data
            return response()->json([
                'message' => 'Subscriber created successfully',
                'data' => $newSubscriber
            ], 201);
        }

        
    }
}
