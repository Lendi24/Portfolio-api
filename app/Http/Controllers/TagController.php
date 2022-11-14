<?php

namespace App\Http\Controllers;

use App\Models\ContactTag;
use App\Models\LanguageTag;
use App\Models\PlattformTag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function showLanguage($id)   {return LanguageTag::find($id);}
    public function showPlattform($id)  {return PlattformTag::find($id);}
    public function showContact($id)    {return ContactTag::find($id);}
}
