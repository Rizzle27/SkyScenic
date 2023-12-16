<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SubscriptionController extends Controller
{
    public function showPlans()
    {
        $subscriptions = Subscription::withCount('users')->get();

        $subscriptionWithMostUsers = $subscriptions->sortByDesc('users_count')->first();

        return view('suscriptions.plans', [
            'subscriptions' => $subscriptions,
            'subscriptionWithMostUsers' => $subscriptionWithMostUsers,
        ]);
    }

    public function subscribe(Request $request, $id)
    {
        $subscriptionId = $id;

        $user = Auth::user();

        if ($user) {
            $user->id_subscription = $subscriptionId;
            $user->save();
            return redirect('/usuarios/perfil/' . $user->username);
        } else {
            return redirect('/ususarios/registrarse')->with('error', 'Para suscribirte a nuestros planes necesitas crear una cuenta.');
        }
    }
}
