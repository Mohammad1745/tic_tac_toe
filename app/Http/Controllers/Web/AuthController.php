<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Auth\SocialLoginRequest;
use App\Http\Services\Feature\Auth\AuthService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse as RedirectResponseAlias;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends Controller
{
    /**
     * @var AuthService
     */
    private AuthService $service;

    /**
     * AuthController constructor.
     * @param AuthService $service
     */
    public function __construct (AuthService $service)
    {
        $this->service = $service;
    }

    /**
     * @return Factory|View|Application
     */
    public function login (): Factory|View|Application
    {
        return view('auth.login');
    }

    /**
     * @param SocialLoginRequest $request
     * @return RedirectResponseAlias|RedirectResponse
     */
    public function redirect(SocialLoginRequest $request): RedirectResponse|RedirectResponseAlias
    {
        return $this->service->redirect( $request->query('provider'));
    }

    /**
     * @param SocialLoginRequest $request
     * @return RedirectResponseAlias
     */
    public function callback(SocialLoginRequest $request): RedirectResponseAlias
    {
        $this->webResponse($this->service->callback( $request->query('provider')), 'dashboard');
    }
}
