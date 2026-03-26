<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function show($slug)
    {

        $services = config('services-data');

        if (!isset($services[$slug])) {
            abort(404);
        }

        $service = $services[$slug];

        return view('service-template', compact('service', 'slug'));

    }

}