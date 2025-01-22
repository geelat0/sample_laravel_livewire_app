<?php

namespace App\Http\Controllers;

use App\DataTables\UserManagementDataTable;
use App\Livewire\UserManagement;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UserManagementDataTable $dataTable)
    {
        return $dataTable->render('livewire.user-management');
    }

    public function create()
    {
        return view('user-management.create');
    }
}
