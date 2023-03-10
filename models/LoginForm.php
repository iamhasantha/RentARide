<?php

namespace app\models;

use app\core\Application;
use app\core\Model;

class LoginForm extends Model
{

    public string $email = '';
    public string $password = '';

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED]
        ];
    }

    public function login(): bool
    {
        $customer = Customer::findOne(['email' => $this->email]);
        if (!$customer) {
            $this->addError('email', 'User does not exist');
            return false;
        }
        if (!password_verify($this->password, $customer->password)) {
            $this->addError('password', 'Password is incorrect');
            return false;
        }


        return Application::$app->login($customer);
    }
}