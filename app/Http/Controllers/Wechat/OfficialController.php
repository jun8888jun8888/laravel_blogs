<?php
/**
 * 微信公众号控制器
 */

namespace App\Http\Controllers\Wechat;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class OfficialController
 * @package App\Http\Controllers\Wechat
 * @mixin
 */
class OfficialController extends Controller
{
    public function __construct()
    {

    }

    public function login(Request $request)
    {
        return $request->path();
    }
}
