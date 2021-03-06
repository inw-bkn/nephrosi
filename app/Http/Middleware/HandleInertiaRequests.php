<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'agent' => [
                'browser' => fn () => Session::get('client-agent')->browser(),
                'device' => fn () => Session::get('client-agent')->device(),
                'platform' => fn () => Session::get('client-agent')->platform(),
                'isMobile' => fn () => Session::get('client-agent')->isMobile(),
                'isTablet' => fn () => Session::get('client-agent')->isTablet(),
                'isDesktop' => fn () => Session::get('client-agent')->isDesktop(),
            ],
            'event' => [
                'fire' => null,
                'name' => '',
                'payload' => null,
            ],
            'externalLinks' => config('demo.externalLinks'),
            'menuGroups' => config('demo.menuGroups'),
        ]);
    }
}
