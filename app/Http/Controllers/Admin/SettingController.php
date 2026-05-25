<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        return view(
            'admin.settings.index',
            compact('setting')
        );
    }

    public function toggleAnnouncement()
    {
        $setting = Setting::first();

        $setting->update([
            'announcement_open' => !$setting->announcement_open
        ]);

        return back()->with(
            'success',
            'Status pengumuman berhasil diperbarui'
        );
    }
}