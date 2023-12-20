<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\MercadoPagoConfig;

class MercadoPagoController extends Controller
{
    public function showForm(int $id)
    {
        $plan = Subscription::findOrFail($id);

        $item = [
            'id' => $plan->id,
            'title' => $plan->name,
            'quantity' => 1,
            'unit_price' => $plan->price,
            'currency_id' => 'ARS',
        ];

        MercadoPagoConfig::setAccessToken(config('mercadopago.accessToken'));

        $client = new PreferenceClient();

        $preference = $client->create([
            'items' => [$item],
            'back_urls' => [
                'success' => url('suscripciones/pago/success?id=' . $item['id']),
                'pending' => url('suscripciones/pago/pending'),
                'failure' => url('suscripciones/pago/failure'),
            ]
        ]);

        return view('mercadopago.payment', [
            'plan' => $plan,
            'preference' => $preference,
            'mpPublicKey' => config('mercadopago.publicKey'),
        ]);
    }

    public function success(Request $request)
    {
        $itemId = $request->query('id');

        $response = app(SubscriptionController::class)->subscribe($itemId);

        return $response;
        return redirect(url('suscripciones'));
    }


    public function pending(Request $request)
    {
        echo 'Pending.';
        dd($request);
    }

    public function failure()
    {
        return redirect(url('suscripciones'))->with('error', 'Hubo un error en el proceso de pago.');
    }
}
