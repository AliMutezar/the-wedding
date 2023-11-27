<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function weddingHome(Request $request, $partner1, $partner2)
    {
        $wedding = new Wedding($partner1, $partner2);
        return view('wedding', $wedding->getViewData());
    }
}

class Wedding 
{
    private $title; private $routePartner1; private $routePartner2; private $date; private $weddingTitle; private $partnerTitle; private $to;

    public function __construct($partner1, $partner2)
    {
        $this->title = "The Wedding of $partner1 & $partner2";
        $this->date = "23 Desember 2023";
        $this->weddingTitle = "The Wedding of";
        $this->partnerTitle = "$partner1 & $partner2";
        $this->to = "Kepada Yth";
    }

    public function getViewData()
    {
        $pasangan = $this->partnerTitle ;
        return [
            "title" => $this->title,
            "route_tezar" => $this->routePartner1,
            "route_sahira" => $this->routePartner2,
            "wedding_title" => $this->weddingTitle,
            "date" => $this->date,
            "pasangan_title" => $pasangan,
            "to" => $this->to
        ];
    }
}
