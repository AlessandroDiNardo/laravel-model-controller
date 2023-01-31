<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    private $id;
    private $title;
    private $original_title;
    private $nationality;
    private $date;
    private $vote;
}
