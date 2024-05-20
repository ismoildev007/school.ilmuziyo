<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Activities;
use App\Models\Blog;
use App\Models\Card;
use App\Models\Contact;
use App\Models\Flag;
use App\Models\Home;
use App\Models\Image;
use App\Models\Infrastructure;
use App\Models\Price;
use App\Models\Question;
use App\Models\Special;
use App\Models\Teacher;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        $homes = Home::latest()->take(1)->get();
        $cards = Card::orderBy('created_at', 'desc')->take(4)->get(['title_uz', 'title_ru', 'title_en', 'description_uz', 'description_ru', 'description_en']);
        $photo = Card::orderBy('created_at', 'desc')->take(1)->get('photo');
        $images = Image::latest()->take(1)->get();
        $abouts = About::latest()->take(1)->get();
        $activities = Activities::latest()->take(15)->get();
        $blogs = Blog::latest()->take(8)->get();
        $questions = Question::latest()->take(10)->get();
        $contacts = Contact::latest()->take(1)->get();

        return view('index', compact(
            'homes',
            'cards',
            'abouts',
            'photo',
            'images',
            'activities',
            'blogs',
            'questions',
            'contacts',
        ));

    }

    public function detail()
    {
        $teachers = Teacher::latest()->take(20)->get();
        $flags = Flag::latest()->take(1)->get();
        $infrastructure = Infrastructure::latest()->get();
        $inf_photos = Infrastructure::orderBy('created_at', 'desc')->take(1)->get('photo');
        $prices = Price::latest()->take(1)->get();
        $specials = Special::latest()->take(6)->get();
        $contacts = Contact::latest()->take(1)->get();

        return view('cam.detail', compact(
            'prices',
            'teachers',
            'specials',
            'flags',
            'infrastructure',
            'contacts',
            'inf_photos',
        ));
    }
}
