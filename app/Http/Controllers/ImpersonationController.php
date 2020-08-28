<?php

namespace App\Http\Controllers;

use App\Scopes\TenantScope;
use App\User;
use Illuminate\Http\Request;

class ImpersonationController extends Controller
{
    public function leave()
    {
        if(! session()->has('impersonate')) {
            abort(403);
        }
        // login as the super user in session
        auth()->login(User::withoutGlobalScope(TenantScope::class)->find(session('impersonate')));
        session()->forget('impersonate');

        return redirect('/');
    }
}
