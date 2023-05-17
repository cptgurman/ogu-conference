<?php

namespace App\Models;

use App\Models\Corpus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faculty extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'faculties';
    protected $guarded = false; //Чтобы можно было записывать, в массиве можно указать поля, которые нужно заблочить

    public function corpus()
    {
        return $this->belongsTo(Corpus::class, 'corpus_id', 'id');
    }
}
