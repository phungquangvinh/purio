<?php
/**
 * Created by PhpStorm.
 * User: KPWZTO
 * Date: 9/1/2017
 * Time: 1:08 AM
 */

namespace Modules\Manager\Validators;


class LoginValidator
{

    public function validateLogin() {

        $res['rules'] = $this->_defaultRule();
        $res['messages'] = $this->_defaultMessage();
        $res['attributes'] = $this->_defaultAttribute();

        return $res;
    }

    private function _defaultRule() {
        return [
            'username' => 'required|max:20',
            'password' => 'required',
        ];
    }

    private function _defaultMessage() {
        return [];
    }

    private function _defaultAttribute() {
        return [
            'username' => trans('messages.label.admin.login_id'),
            'password' => trans('messages.label.admin.pass'),
        ];
    }
}