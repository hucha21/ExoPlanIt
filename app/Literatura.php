<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Literatura extends Model
{
	protected $table = 'literatura';
	public $timestamps = false;
    protected $fillable=['naziv_literature','slika_literature','link_literature','autor','godina'];
}
