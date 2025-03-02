<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Mail\LimitEmail;
use Illuminate\Support\Facades\Mail;


class NotificationController extends Controller
{
    public function store(Request $request)
    {


        // Validate incoming request
//        $validated = $request->validate([
//            'message' => 'required|string',
//            'source_id' => 'required|string',
//            'subscriber_id' => 'required|string',
//            'service_id' => 'required|string',
//            'provider_id' => 'required|string',
//        ]);



        // Save to notifications table
        $notification = Notification::create([
            'message' => $request->get('message'),
            'source_id' => $request->get('source_id'),
            'subscriber_id' => $request->get('subscriber_id'),
            'service_id' =>  $request->get('service_id'),
            'provider_id' => $request->get('provider_id'),
            'send_status' => 'pending',
        ]);


        try {
            // URL for the SMS API
            $url = 'https://gw.selcommobile.com:8443/bin/send.json';

            // Parameters for the POST request
            $params = [
                'USERNAME' => 'CREINFOapi',
                'PASSWORD' => 'CREINFOapi',
                'DESTADDR' =>  $request->get('subscriber_id'), // Use the subscriber_id as the destination number
                'MESSAGE' =>  $request->get('message'),
            ];

            // Make the POST request
            $response = Http::post($url, $params);



            // Check if the response is successful
            if ($response->ok()) {
                $responseBody = $response->json();

                // Extract relevant data from the response
                $results = $responseBody['results'][0] ?? [];
                $status = $results['status'] ?? 'unknown';
                $msgid = $results['msgid'] ?? null;
                $statustext = $results['statustext'] ?? 'No status text';
                $balance = $responseBody['balance'] ?? null;

                // Update the notification with response details
                $notification->update([
                    'provider_responce' => $statustext,
                    'provider_responce_code' => $status,
                    'send_status' => ($status == '0') ? 'sent' : 'failed',
                    'rrn' => $msgid,
                    'general_status' => $balance,  // Store the balance for reference
                ]);

                return response()->json([
                    'success' => true,
                    'notification' => $notification,
                    'balance' => $balance,
                ]);
            } else {
                
                // Handle non-successful response
                Log::error('Failed to send SMS', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
                


                // Update the notification with failure details
                $notification->update([
                    'provider_responce' => 'Failed to send',
                    'provider_responce_code' => $response->status(),
                    'send_status' => 'failed',
                ]);

                return response()->json([
                    'success' => false,
                    'message' => 'Failed to send SMS',
                    'details' => $response->body(),
                ], $response->status());
            }
        } catch (\Exception $e) {


            $email = $request->get('email');   
            $data = $request->get('message');
        
            Mail::to($email)->send(new LimitEmail($data));
            $notification = Notification::create([
                'message' => $data,
                'source_id' => $request->get('source_id'),
                'subscriber_id' => $email,
                'service_id' =>  $request->get('service_id'),
                'provider_id' => $request->get('provider_id'),
                'send_status' => 'pending',
            ]);

            // Handle exceptions
            Log::error('Exception occurred while sending SMS', [
                'error' => $e->getMessage()
            ]);

            // Update the notification with exception details
            $notification->update([
                'provider_responce' => 'Exception occurred',
                'provider_responce_code' => 'Exception',
                'send_status' => 'failed',
            ]);

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while sending SMS',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
