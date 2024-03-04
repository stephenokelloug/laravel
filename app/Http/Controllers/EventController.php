<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Web\Http\Controllers\ModelController as Controller;

use App\Repository\Event\EventRepository;
use App\Event;

class EventController extends Controller
{
    protected $repository = EventRepository::class;

    protected $fromCache = true;

    protected $findByAttribute = 'slug';

    protected $getOtherModels = true;


    //Events blade view path
    protected $templates = [
        'index' => 'web.templates.events-page',
        'show' => 'web.templates.event-page'
    ];

}
