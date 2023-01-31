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

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

    }

    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getOriginal_title()
    {
        return $this->original_title;
    }

    public function setOriginal_title($original_title)
    {
        $this->original_title = $original_title;

        return $this;
    }

    public function getNationality()
    {
        return $this->nationality;
    }

    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    public function getVote()
    {
        return $this->vote;
    }

    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }
}
