<?php
namespace Modules\V1\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use SoliDry\Extension\BaseModel;

class TourGuides extends BaseModel 
{
    use SoftDeletes;

    // >>>props>>>
    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id';
    protected $table = 'tour_guides';
    public $timestamps = false;
    // <<<props<<<
    // >>>methods>>>

    public function tour() 
    {
        return $this->belongsTo(Tour::class);
    }
    // <<<methods<<<
}
