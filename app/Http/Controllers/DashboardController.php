<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Models\branches;
use App\Models\car;
use App\Models\car_price;
use App\Models\client;
use App\Models\country;
use App\Models\coupon;
use App\Models\Manufacturer;
use App\Models\sale;
use App\Models\saleperson;
use App\Models\salespeoples;
use App\Models\salespeople;
use App\Models\shareholder;

// use App\Models\branches;

class DashboardController extends Controller
{
    public function index()
    {
        // $tables = DB::select("SHOW TABLES");

        // $dbName = env('DB_DATABASE');

        // $tableNames = array_map(function($table) use ($dbName) {
        //     $property = "Tables_in_" . $dbName;
        //     return $table->{$property};
        // }, $tables);


        // dd($tables);

        // return view('dashboard', ['tables' => $tableNames]);
        // braches table section
        // $branch= branches::class;
        // $branches= branches::all();

        // return view('dashboard', ['branches' => $branches]);


        $models = [
            'branches' => 'Branches',
            'car' => 'Cars',
            'client' => 'Clients',
            'country' => 'country',
            'coupon' => 'coupon',
            'Manufacturer' => 'Manufacturer',
            'sale' => 'sale',
            //'salespeople' => 'salespeople',
            'shareholder' => 'shareholder'

        ];


        return view('dashboard', ['models' => $models]);

    }
    public function showTable($table)
{
    // تحقق من الجدول اللي المستخدم ضغط عليه
    switch ($table) {
        case 'branches':
            $data = branches::all();
            break;
        case 'car':
            $data = car::all();
            break;
        case 'client':
            $data = client::all();
            break;
        case 'country':
            $data = country::all();
            break;
        case 'coupon':
            $data = coupon::all();
            break;
        case 'Manufacturer':
            $data = Manufacturer::all();
            break;
        case 'sale':
            $data = sale::all();
            break;
        case 'salespeople':
            $data = salespeople::all();
            break;
        case 'shareholder':
            $data = shareholder::all();
            break;
        default:
            abort(404, 'Table not found');
    }


    return view('table-details', ['data' => $data, 'table' => $table]);
}

}
