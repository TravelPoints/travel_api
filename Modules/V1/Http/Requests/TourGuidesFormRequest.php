<?php
namespace Modules\V1\Http\Requests;

use SoliDry\Extension\BaseFormRequest;

class TourGuidesFormRequest extends BaseFormRequest 
{
    // >>>props>>>
    public $id;
    // Attributes
    public $title;
    public $description;
    public $audio;
    public $tour_id;
    public $language;
    public $deleted_at;
    // Relations

    // <<<props<<<

    // >>>methods>>>
    public function authorize(): bool 
    {
        return true;
    }

    public function rules(): array 
    {
        return [
            'title' => 'required|string|min:32|max:256',
            'description' => 'required|string|min:32|max:4096|',
            'audio' => 'required|string|min:32|max:128',
                // ManyToOne Tour relationship
            'tour_id' => 'required|integer|min:10|max:20|',
            'language' => 'required|string|min:2|max:3',
            'deleted_at' => '',
        ];
    }

    public function relations(): array 
    {
        return [
            'tour',
        ];
    }
    // <<<methods<<<
}
