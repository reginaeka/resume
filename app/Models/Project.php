<?php

namespace App\Models;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects'; 
    protected $fillable=[
        'startDate',
        'endDate',
        'projectLocation',
        'description'
    ];
    
    public function experience()
    {
        return $this->belongsTo(Experience::class, 'companyId');
    }

}
