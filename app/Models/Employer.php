<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'company_name', 'website', 'contact_phone'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }
}

