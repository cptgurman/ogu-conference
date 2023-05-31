<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = false; //Чтобы можно было записывать, в массиве можно указать поля, которые нужно заблочить

    // Дефолтные значения
    protected $attributes = [
        'hotel' => false,
        'invitation' => false,
    ];

    public function conference()
    {
        return $this->belongsTo(Conference::class, 'conference_id', 'id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'conference_section_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(ApplicationStatus::class, 'status_id', 'id');
    }

    public function expert()
    {
        return $this->belongsToMany(User::class, 'expert_application', 'application_id', 'user_id');
    }
}
