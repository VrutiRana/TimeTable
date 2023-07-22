<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeekHoursRequest extends FormRequest
{
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'working_days'          =>  'required|numeric|min:1|max:7',
            'subjects_per_days'      =>  'required|numeric|min:1|max:9',
            'total_subjects'        =>  'required|numeric|min:1',
            'total_hours_week'          =>  'required|numeric|min:1',
        ];
    }

    public function messages()
    {
        return [
            'working_days.required'   => 'This Field is required',
            'working_days.numeric'   => 'Please Enter only numeric value',
            'working_days.min'   => 'Minimum value should be 1',
            'working_days.max'   => 'Maximum value should be 7',
            'subjects_per_days.required'   => 'This Field is required',
            'subjects_per_days.numeric'   => 'Please Enter only numeric value',
            'subjects_per_days.min'   => 'Minimum value should be 1',
            'subjects_per_days.max'   => 'Maximum value should be 9',
            'total_subjects.required'   => 'This Field is required',
            'total_subjects.numeric'   => 'Please Enter only numeric value',
            'total_subjects.min'   => 'Minimum value should be 1',
            'total_hours_week.required'   => 'This Field is required',
            'total_hours_week.numeric'   => 'Please Enter only numeric value',
            'total_hours_week.min'   => 'Minimum value should be 1',
        ];
    }
}
