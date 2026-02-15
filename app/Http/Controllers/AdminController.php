<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;
use App\Models\User;
use App\Models\Rent;

class AdminController extends Controller
{
    public function index()
    {
        $carsCount = Car::count();
        $usersCount = User::count();
        $ongoingRentalsCount = Rent::whereDate('start_date', '<=', now())
            ->whereDate('end_date', '>=', now())
            ->count();


        return view('admin.index', compact('carsCount', 'usersCount', 'ongoingRentalsCount'));
    }
}
