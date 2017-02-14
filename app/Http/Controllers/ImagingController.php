<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Laravel\Lumen\Http\Redirector;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Class ImagingController
 * @package App\Http\Controllers
 */
class ImagingController extends BaseController
{
    /**
     * Get User Figure for Big Header
     * based on User Name or Figure
     *
     * @param Request $request
     * @return Redirector
     */
    public function getUserHead(Request $request)
    {
        return redirect(Config::get('chocolatey.imaging') . 'avatarimage?figure='
            . ($request->has('figure') ? $request->input('figure') :
                User::where('username', $request->input('user'))->first()->figureString)
            . '&size=l&headonly=1');
    }

    /**
     * Get User Figure for Body
     * based on User Figure
     *
     * @param string $figure
     * @return Redirector
     */
    public function getUserBody(string $figure)
    {
        return redirect(Config::get('chocolatey.imaging') . "avatar/{$figure}");
    }
}