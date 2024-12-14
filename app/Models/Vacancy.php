<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = ['employer_id', 'title', 'description', 'requirements', 'salary_range', 'location'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'vacancy_categories');
    }
}

Vacancy::create([
    'employer_id' => 1,
    'title' => 'Backend Developer',
    'description' => 'Develop robust backend APIs.',
    'requirements' => 'Laravel, PHP, MySQL',
    'salary_range' => '$4000-$6000',
    'location' => 'Remote'
]);
