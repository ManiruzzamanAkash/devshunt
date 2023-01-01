<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriberEmailRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class SubscriptionController extends Controller
{
    public function subscribe(SubscriberEmailRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            // User create with that email address
            $user = User::create([
                'name' => $request->email,
                'email' => $request->email,
                'password' => Hash::make(Str::random(40)),
            ]);
        } else {
            if ($user->hasRole('subscriber')) {
                return response([
                    'message' => 'Thank you, you have already been subscribed !'
                ]);
            }
        }

        // Assign a Subscriber role
        try {
            $subscriberRole = Role::findByName('subscriber');
        } catch (\Throwable $th) {
            $subscriberRole = Role::create(['name' => 'subscriber']);
        }

        $user->assignRole($subscriberRole);

        return response([
            'message' => 'Thank you, you have been subscribed successfully !'
        ]);
    }
}
