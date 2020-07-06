<?php

namespace App\Repositories;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminRepository {

    public function __construct()
    {
    }

    public function add(Request $request)
    {

        $admin = new Admin($request->all());
        $admin->name = $request->get('name:en');
        $admin->username = $request->get('username:en');


        if ($request->has('password'))
            $admin->password = bcrypt($request->password);

        if ($request->hasFile('avatar'))
            $admin->avatar = Storage::disk('local')->put('admins', $request->file('avatar'));

        $admin->save();
    }

    public function update(Request $request, Admin $admin)
    {

        if ($request->has('password'))
            $admin->password = bcrypt($request->password);
        if ($request->has('name:en'))
            $admin->name = $request->get('name:en');
        if ($request->has('username:en'))
            $admin->username = $request->get('username:en');

        $admin->update($request->except(['password']));

        if ($request->hasFile('avatar')){
            // if there is an old avatar delete it
            if ($admin->avatar != null){
                $admin->avatar = Storage::disk('local')->delete($admin->avatar);
            }

            // store the new image
            $admin->avatar = Storage::disk('local')->put('admins', $request->file('avatar'));
        }

        $admin->save();


    }

    public function delete(Admin $admin)
    {
        if ($admin->image != null)
            $admin->image = Storage::disk('local')->delete($admin->image);

        $admin->delete();
    }

    public function getAdmins()
    {
        return Admin::orderBy('created_at')->get();
    }

}
