<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    protected $fillable = ['name_site', 'site_map'];

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}
