<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


//traits
use Delgont\Cms\Models\Concerns\Categorable;
use Delgont\Cms\Models\Concerns\Groupable;
use Delgont\Cms\Models\Concerns\Iconable;
use Delgont\Cms\Models\Concerns\HasComments;
use Delgont\Cms\Models\Concerns\HasLinks;
use Delgont\Cms\Models\Concerns\Searchable;
use Delgont\Cms\Models\Concerns\HasOptions;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    //
    use Categorable, Groupable, Iconable, SoftDeletes, HasComments, Searchable, HasLinks, HasOptions;

}
