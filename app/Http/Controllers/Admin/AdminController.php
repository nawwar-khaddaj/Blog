<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Repositories\AdminRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    private $adminRepository;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $admins = $this->adminRepository->getAdmins();
        return view('admin.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.admin.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AdminRequest $request
     * @return RedirectResponse
     */
    public function store(AdminRequest $request)
    {
        $this->adminRepository->add($request);

        $request->session()->flash('success', 'admin created successfully');

        if ($request->has('add-new'))
            return redirect()->route('admin.admins.create');

        return redirect()->route('admin.admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Admin $admin
     * @return Admin
     */
    public function show(Admin $admin)
    {
        return $admin;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Admin $admin
     * @return Application|Factory|View
     */
    public function edit(Admin $admin)
    {
        return view('admin.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AdminRequest $request
     * @param Admin $admin
     * @return RedirectResponse
     */
    public function update(AdminRequest $request, Admin $admin)
    {
        $this->adminRepository->update($request, $admin);

        $request->session()->flash('success', 'admin updated successfully');

        if ($request->has('add-new'))
            return redirect()->route('admin.admins.create');

        return redirect()->route('admin.admins.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Admin $admin
     * @return RedirectResponse
     */
    public function destroy(Request $request, Admin $admin)
    {
        $this->adminRepository->delete($admin);
        $request->session()->flash('success', 'admin deleted successfully');
        return redirect()->route('admin.admins.index');
    }
}
