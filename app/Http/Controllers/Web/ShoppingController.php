<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Interfaces\ShoppingInterface as InterShopping;
use App\Interfaces\SocialNetworkInterface as InterSocial;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    private $interNetwork;
    private $interShopping;

    public function __construct(
        InterSocial $interNetwork,
        InterShopping $interShopping)
    {
        $this->interNetwork = $interNetwork;
        $this->interShopping = $interShopping;
    }

    /**
     * Redireciona para a app vesti.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function redirect(Request $request)
    {
        $input = $request->all();
        $input['product_id'] = $input['id'];
        $shopping  = $this->interShopping->create($input);
        $network   = $this->interNetwork->setId($input['social_network_id']);

        return response()->json(['redirect' => "{$network->link}{$input['id']}"]);
    }


}
