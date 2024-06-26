<?php

namespace App\Http\Controllers\Modules\Mitra\Dashboard;

use Illuminate\Http\Request;
use App\Traits\Traits\MitraView;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    use MitraView;

    public function __construct()
    {
        $this->setPath('mitra.pages.dashboard.');
    }
    
    public function index() {
        return $this->view('index');
    }
}
