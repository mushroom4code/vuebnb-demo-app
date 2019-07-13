<?php

use Illuminate\Http\Request;
use App\Listing;

Route::get('listing/{listing}', 'ListingController@get_listing_api');