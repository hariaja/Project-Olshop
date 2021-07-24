<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Authorizable;

class DashboardController extends Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->data['currentAdminMenu'] = 'dashboard';
    }

    public function index()
    {
        return view('admin.dashboard.index', $this->data);
    }
}
