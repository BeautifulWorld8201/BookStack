<?php namespace BookStack\Actions;

use BookStack\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class View extends Model
{

    protected $fillable = ['user_id', 'views'];

    /**
     * Get all owning viewable models.
     */
    public function viewable(): MorphTo
    {
        return $this->morphTo();
    }
}
