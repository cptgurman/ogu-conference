<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = false; //Чтобы можно было записывать, в массиве можно указать поля, которые нужно заблочить
}
