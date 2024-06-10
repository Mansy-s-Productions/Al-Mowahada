<?php

use App\Models\Service;

function getServices() {
    return Service::latest()->get();
}

function getFeaturedServices($Count) {
    return Service::featured()->limit($Count)->get();
}
