<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller {

    public function contactUs(Request $request) {
        try {
            $email = Mail::to('sayocfighting@gmail.com')->send(new ContactUsMail([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]));

            if ($email) {
                // Email was sent successfully
                return response()->json([
                    'status' => 200,
                    'message' => 'Your message has been sent. Thank you!'
                ], 200);
            } else {
                // Email sending failed
                return response()->json([
                    'error' => 'Failed to send the email. Please try again.'
                ], 500);
            }
        } catch (\Exception $e) {
            // Log the exception
            \Log::error('Form submission error: ' . $e->getMessage());

            // Return an error response in case of an exception
            return response()->json(['error' => 'Form submission failed. Please try again.'], 500);
        }
    }

    public function instructor1(Request $request) {
        try {
            $email = Mail::to('sayocfighting@gmail.com')->send(new ContactUsMail([ // change to personal email on next update
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]));

            if ($email) {
                // Email was sent successfully
                return response()->json([
                    'status' => 200,
                    'message' => 'Your message has been sent. Thank you!'
                ], 200);
            } else {
                // Email sending failed
                return response()->json([
                    'error' => 'Failed to send the email. Please try again.'
                ], 500);
            }
        } catch (\Exception $e) {
            // Log the exception
            \Log::error('Form submission error: ' . $e->getMessage());

            // Return an error response in case of an exception
            return response()->json(['error' => 'Form submission failed. Please try again.'], 500);
        }
    }

    public function instructor2(Request $request) {
        try {
            $email = Mail::to('sayocfighting@gmail.com')->send(new ContactUsMail([ // change to personal email on next update
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]));

            if ($email) {
                // Email was sent successfully
                return response()->json([
                    'status' => 200,
                    'message' => 'Your message has been sent. Thank you!'
                ], 200);
            } else {
                // Email sending failed
                return response()->json([
                    'error' => 'Failed to send the email. Please try again.'
                ], 500);
            }
        } catch (\Exception $e) {
            // Log the exception
            \Log::error('Form submission error: ' . $e->getMessage());

            // Return an error response in case of an exception
            return response()->json(['error' => 'Form submission failed. Please try again.'], 500);
        }
    }

    public function instructor3(Request $request) {
        try {
            $email = Mail::to('sayocfighting@gmail.com')->send(new ContactUsMail([ // change to personal email on next update
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]));

            if ($email) {
                // Email was sent successfully
                return response()->json([
                    'status' => 200,
                    'message' => 'Your message has been sent. Thank you!'
                ], 200);
            } else {
                // Email sending failed
                return response()->json([
                    'error' => 'Failed to send the email. Please try again.'
                ], 500);
            }
        } catch (\Exception $e) {
            // Log the exception
            \Log::error('Form submission error: ' . $e->getMessage());

            // Return an error response in case of an exception
            return response()->json(['error' => 'Form submission failed. Please try again.'], 500);
        }
    }
}
