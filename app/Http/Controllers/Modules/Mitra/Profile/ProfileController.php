<?php

namespace App\Http\Controllers\Modules\Mitra\Profile;

use App\Http\Controllers\Controller;
use App\Traits\Traits\MitraView;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use MitraView;
    public function __construct()
    {
        $this->setPath('mitra.pages.profile.');
    }

    public function index() {
        return $this->view('index');
    }
}
