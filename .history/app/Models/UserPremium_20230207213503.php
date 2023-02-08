<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPremium extends Model
{
    use HasFactory;

    protected $table = 'user_premiums';

    protected $fillable = [
        'package_id',
        'user_id',
        'end_of_subscription'
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
