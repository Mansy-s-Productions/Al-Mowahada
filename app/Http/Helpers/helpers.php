<?php

use App\Models\Service;

function getServices() {
    return Service::Language()->latest()->get();
}

function getFeaturedServices($Count) {
    return Service::Language()->featured()->limit($Count)->get();
}
