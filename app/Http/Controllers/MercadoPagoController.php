<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\MercadoPagoConfig;

class MercadoPagoController extends Controller
{
    public function showForm(int $id)
    {
        $plan = Subscription::findOrFail($id);

        $item = [
            'title' => $plan->name,
            'quantity' => 1,
            'unit_price' => $plan->price,
            'currency_id' => 'ARS',
        ];

        MercadoPagoConfig::setAccessToken(config('mercadopago.accessToken'));

        $client = new PreferenceClient();

        $preference = $client->create([
            'item' => $item,
        ]);

        return view('mercadopago.payment', [
            'plan' => $plan,
            'preference' => $preference,
            'mpPublicKey' => config('mercadopago.publicKey'),
        ]);
    }
}
