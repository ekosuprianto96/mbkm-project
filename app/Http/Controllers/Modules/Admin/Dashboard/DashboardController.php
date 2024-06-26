<?php

namespace App\Http\Controllers\Modules\Admin\Dashboard;

use Carbon\Carbon;
use App\Models\User;
use App\Models\SuperAdmin;
use Illuminate\Http\Request;
use App\Traits\Traits\AdminView;
use App\Admin\ControllerInterface;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Repositories\UserRepositorie;

class DashboardController extends Controller implements ControllerInterface
{
    use AdminView;

    protected $user;
    public function __construct(
        UserRepositorie $user
    )
    {
        $this->user = $user;
        $this->setPath('admin.pages.dashboard.');
    }

    public function index() {
        return $this->view('index');
    }
}
