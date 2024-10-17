<?php

namespace App\Http\Requests\Roles;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $roleId = $this->route('id');
        return [
            'name' => RoleValidationRules::NAME($roleId),
            'description' => RoleValidationRules::DESCRIPTION(is_required: true),
            'code' => RoleValidationRules::CODE($roleId)
        ];
    }
}
