<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "is_done",
    ];

    protected $casts = [ 
      "is_done"=>"boolean"
    ];

    //creator. The function is expected to return an object of type BelongsTo.
    public function creator():BelongsTo{
        return $this->belongsTo(User::class,"creator_id");
    }
    protected static function booted():void {
        static::addGlobalScope("creator", function (Builder $builder) {
            $builder->where("creator_id",Auth::id());
    });
}
public function project():BelongsTo {
return $this->belongsTo(Project::class);
}
}
