<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;
use App\Models\RoomType;

class RoomTypeController extends Controller
{
    public function index(): Response {
        return Inertia::render('admin/room-types/index', [
            'roomTypes' => RoomType::query()->orderBy('name')->get([
                'id',
                'name',
                'description',
                'capacity',
                'base_price',
                'is_active',
            ]),
        ]);
    }
}
