<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function getIndex(){
            $post1 = new \stdClass();
            $post1->content = "Vasario 5 dieną Europos Sąjungos Tarybai pirmininkaujanti Bulgarija sukvietė ES šalių narių ir ES šalių kandidačių atstovybių vadovus į susitikimą su Lietuvos užsienio reikalų ministru Linu Linkevičiumi aptarti svarbiausius 2018 metų pirmo pusmečio ES ir užsienio politikos prioritetus.";
            $post1->date = Carbon::CreateFromFormat ('Y-m-d', '2018-02-08');

            $post2 = new \stdClass();
            $post2->content = "Vasario 5 dieną Europos Sąjungos Tarybai pirmininkaujanti Bulgarija sukvietė ES šalių narių ir ES šalių kandidačių atstovybių vadovus į susitikimą su Lietuvos užsienio reikalų ministru Linu Linkevičiumi aptarti svarbiausius 2018 metų pirmo pusmečio ES ir užsienio politikos prioritetus.";
            $post2->date = Carbon::CreateFromFormat ('Y-m-d', '2018-02-08');

            $post3 = new \stdClass();
            $post3->content = "Vasario 5 dieną Europos Sąjungos Tarybai pirmininkaujanti Bulgarija sukvietė ES šalių narių ir ES šalių kandidačių atstovybių vadovus į susitikimą su Lietuvos užsienio reikalų ministru Linu Linkevičiumi aptarti svarbiausius 2018 metų pirmo pusmečio ES ir užsienio politikos prioritetus.";
            $post3->date = Carbon::CreateFromFormat ('Y-m-d', '2018-02-08');

            $posts = [$post1, $post2, $post3];


            return view ('pages.index', [
                'posts' => $posts
            ] );

    }

    public function getBlogpost(){
        return view('pages.blogpost');
    }

    public function getCreate(){
        return view('pages.create');
    }

    public function getEdit(){
        return view('pages.edit');
    }


}