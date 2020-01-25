<?php
namespace Modules\V1\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use SoliDry\Extension\BaseModel;

class Tour extends BaseModel
{
    use SoftDeletes;

    // >>>props>>>
    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id';
    protected $table = 'tour';
    public $timestamps = false;
    // <<<props<<<
    // >>>methods>>>
    public function tour_guides()
    {
        return $this->hasMany(TourGuides::class);
    }
    // <<<methods<<<
}
