<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * Menambahkan security headers untuk melindungi aplikasi dari
     * serangan clickjacking, MIME sniffing, XSS, dan information leakage.
     */
    public function handle(Request $request, Closure $next): \Symfony\Component\HttpFoundation\Response
    {
        $response = $next($request);

        // Cegah clickjacking — iframe tidak diperbolehkan
        $response->headers->set('X-Frame-Options', 'DENY');

        // Cegah MIME sniffing — browser harus mengikuti Content-Type
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        // Aktifkan XSS protection di browser lama
        $response->headers->set('X-XSS-Protection', '1; mode=block');

        // Referrer policy — batasi info referrer
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

        // Permissions policy — matikan fitur berbahaya
        $response->headers->set('Permissions-Policy', 'camera=(), microphone=(), geolocation=()');

        // Sembunyikan server info (PHP version) — header_remove untuk PHP-level header
        header_remove('X-Powered-By');
        $response->headers->remove('X-Powered-By');

        return $response;
    }
}
