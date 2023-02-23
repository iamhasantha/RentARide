<?php

namespace app\models;

use app\core\dbModel;
use app\core\Model;

class CusProfile extends Model
{
    public string $firstname;
    public string $lastname;
    public string $phoneno;
    public string $address;
    public function rules(): array
    {
        return [
            '$firstname' => [self::RULE_REQUIRED],
            '$lastname' => [self::RULE_REQUIRED],
            '$phoneno' => [self::RULE_REQUIRED, self::RULE_UNIQUE]
        ];
    }

    public function update($id, $Include=[], $Exclude = []): bool
    {
        return parent::update($id, $Include, $Exclude);
    }

    public function displayName(): string
    {
        return $this->firstname.' '.$this->lastname;
    }

}