<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;

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

    public function subscribe(int $id)
    {
        $subscriptionId = $id;

        $user = Auth::user();

        if ($user) {
            $user->id_subscription = $subscriptionId;
            $user->sub_start = Carbon::now();
            $user->sub_end = Carbon::now()->addMonth();
            $user->save();
            $subscription = Subscription::findOrFail($id);
            return redirect('/usuarios/perfil/' . $user->username)->with('success', $user->username . ' gracias por convertirte en ' . $subscription->name . ' y bienvenido.');
        } else {
            return redirect('/ususarios/registrarse')->with('error', 'Para suscribirte a nuestros planes necesitas crear una cuenta.');
        }
    }

    public function cancel() {
        $user = Auth::user();

        $user->id_subscription = null;
        $user->sub_start = null;
        $user->sub_end = null;

        $user->save();

        return redirect()->back()->with('success', 'Suscripción cancelada exitosamente.');
    }
}
