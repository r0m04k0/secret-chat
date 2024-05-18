<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model
{
    use HasFactory;

    /**
     * Fields that are mass assignable
     *
     * @var array
     */
    protected $fillable = ['message'];


    /**
     * A message belong to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
<<<<<<< HEAD
    
=======

>>>>>>> 9319adea673dc353275895de4d2178561032a1a5
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->toDateTimeString();
    }
<<<<<<< HEAD

=======
>>>>>>> 9319adea673dc353275895de4d2178561032a1a5
}
