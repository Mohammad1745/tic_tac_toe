<?php

namespace App\Http\Services\Feature\Auth;

use App\Http\Services\Base\UserService;
use App\Http\Services\ResponseService;
use Illuminate\Http\RedirectResponse as RedirectResponseAlias;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthService extends ResponseService
{
    /**
     * @var UserService
     */
    private $userService;

    /**
     * AuthService constructor.
     * @param UserService $userService
     */
    public function __construct (UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @param string $provider
     * @return RedirectResponseAlias|RedirectResponse
     */
    public function redirect(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * @param string $provider
     * @return array
     */
    public function callback(string $provider): array
    {
        try {
            $socialUser = Socialite::driver( $provider)->stateless()->user();
            $user = $this->userService->firstWhere(['email' => $socialUser->email]);
//            dd($socialUser);
            $user
                ? $this->userService->update( $user->id, $this->userService->formatUserDataForSocialLogin($socialUser->user['picture'], $provider))
                : $user = $this->userService->create( $this->userService->formatUserDataForSocialSignup($socialUser->user, $provider));

//            $authorization = $this->_authorize( $user);

            $valid = Auth::loginUsingId($user->id);
            if (!$valid)  {
                return $this->response()->error('Email or password is incorrect');
            }
            return $this->response()->success('Congratulations! You have signed in successfully.');
        } catch (\Exception $exception) {
            return $this->response()->error('Email or password is incorrect');
        }
    }

    /**
     * @param object $user
     * @return array
     */
    private function _authorize (object $user): array
    {
        return [
            'token' =>  $user->createToken('Invatator')->accessToken,
            'token_type' =>  'bearer',
            'user' => [
                'name' => $user->name,
                'avatar' => $user->avatar,
            ]
        ];
    }
}
