<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;




class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('admin')->check()) {
           Log::warning('Admin not authenticated.'); // Log ketika admin tidak terautentikasi
            return redirect()->route('admin.login'); // Redirect ke halaman login jika belum login
        }

        return $next($request);
    }
}
