<?php

namespace App\Models;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $table = 'experiences'; 
    protected $fillable=[
        'company',
        'startDate',
        'endDate',
        'location'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class, 'companyId');
    }


}
