<?php
namespace Modules\V1\Http\Requests;

use SoliDry\Extension\BaseFormRequest;

class TourFormRequest extends BaseFormRequest 
{
    // >>>props>>>
    public $id;
    // Attributes
    public $duration;
    public $deleted_at;
    // <<<props<<<

    // >>>methods>>>
    public function authorize(): bool 
    {
        return true;
    }

    public function rules(): array 
    {
        return [
            'duration' => 'required|integer|min:3|max:10|',
            'deleted_at' => '',
        ];
    }

    public function relations(): array 
    {
        return [
            'tour_guides',
        ];
    }
    // <<<methods<<<
}
