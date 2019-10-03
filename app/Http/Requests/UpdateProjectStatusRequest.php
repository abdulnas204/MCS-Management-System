<?php

namespace App\Http\Requests;

use App\ProjectStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateProjectStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('project_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title' => [
                'required',
            ],
        ];
    }
}