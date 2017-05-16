<?php

namespace Azure\Http\Controllers;

use Azure\Filters\LessonFilters;
use Azure\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function index(LessonFilters $filters)
    {
        return Lesson::filter($filters)->get();
    }
}
