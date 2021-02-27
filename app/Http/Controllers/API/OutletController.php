<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outlet;
use App\Http\Resources\OutletCollection;

class OutletController extends Controller
{
    public function index()
{
    $outlets = Outlet::orderBy('created_at', 'DESC');
    if (request()->q != '') {
        $outlets = $outlets->where('name', 'LIKE', '%' . request()->q . '%');
    }
    return new OutletCollection($outlets->paginate(10));
}
}
