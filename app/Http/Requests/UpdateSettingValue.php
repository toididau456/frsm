<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingValue extends FormRequest
{
    protected $settings = [
        'paginate' => 'required|numeric|min:1',
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get rules by setting key when update setting
     *
     * @param $setting
     * @param string $default
     * @return string
     */
    public function getRulesBySetting($key, $default = 'required')
    {
        $settings = $this->settings;

        return (array_key_exists($key, $settings))
            ? $settings[$key]
            : $default;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'value' => $this->getRulesBySetting($this->route('setting')),
        ];
    }
}
