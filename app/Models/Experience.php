<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $table = 'experiences';
    protected $primaryKey = 'id';	
    protected $fillable=['id', 'user_id', 'title', 'duration', 'company', 'description', 'created_at', 'updated_at'];
}
