<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $ImagePath = ($this->image) ?  $this->image : '/profile/profile/9Mb7WfzEYvfu9SJU1KsM2Oky99r0nQeqtyJ4DMB0.jpeg';
        return '/storage/' . $ImagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
