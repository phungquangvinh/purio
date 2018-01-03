<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Helper\Common;
use Modules\Admin\Validators\AdminValidator;

class AdminController extends BaseController
{
    use AuthenticatesUsers;
    protected $routeLogin;

    public function __construct()
    {
        parent::__construct();
        $this->routeLogin = route('admin.login');
    }

    public function username()
    {
        return 'login_id';
    }

    public function login(Request $request)
    {
        $messages = Common::getMessage($request);
        return view('admin::admin.login')->with([
            'messages' => $messages
        ]);
    }
    public function postLogin(Request $request){
        $is_error = false;
        try {
            $adminValidator = new AdminValidator();
            $validator = $this->checkValidator($request->all(), $adminValidator->validateLogin());
            if ($validator->fails()) {
                Common::setMessage($request, MESSAGE_STATUS_ERROR, $validator->errors()->all());
                $is_error = true;
            } else if (!Auth::guard('web_admin')->attempt(['login_id' => $request->get('username'), 'password' => $request->get('password')]) && !$is_error) {
                Common::setMessage($request, MESSAGE_STATUS_ERROR, [trans('messages.label.admin.login_fail')]);
                $is_error = true;
            }
        } catch (\Exception $e) {
            Common::setMessage($request, MESSAGE_STATUS_ERROR, $e->getMessage());
            $is_error = true;
        }
        $link_redirect = redirect()->intended(route('manager.index'));
        if ($is_error == true) {
            $link_redirect = redirect(route('admin.login'))->withInput();
        }
        return $link_redirect;
    }
    public function index()
    {
        return view('admin::manager.index');
    }
    public function logout(){
        Auth::guard('web_admin')->logout();
        return redirect($this->routeLogin);
    }
}
