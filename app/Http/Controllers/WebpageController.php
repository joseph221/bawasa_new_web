<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpageController extends Controller
{
    public function index(){
        return view('index');
    }
    // about us
    public function background(){
        return view('pages.about.background');
    }
    public function board(){
        return view('pages.about.board_members');
    }
    public function management(){
        return view('pages.about.menagment');
    }
    public function mission(){
        return view('pages.about.mission_and_vision');
    }
    public function orgStru(){
        return view('pages.about.organization_structure');
    }
    // areas
    public function babati(){
        return view('pages.areas.babati');
    }
    public function bashnet(){
        return view('pages.areas.bashnet');
    }
    public function dareda(){
        return view('pages.areas.dareda');
    }
    public function gallapo(){
        return view('pages.areas.gallapo');
    }
    public function kateshi(){
        return view('pages.areas.kateshi');
    }
    public function magugu(){
        return view('pages.areas.magugu');
    }
    // contacts
    public function contact_us(){
        return view('pages.contacts.contact_us');
    }
    public function faqs(){
        return view('pages.fasq.faqs');
    }
    // media
    public function photo(){
        return view('pages.media-center.photo');
    }
    public function video(){
        return view('pages.media-center.video');
    }
    public function press(){
        return view('pages.media-center.press_release');
    }
    public function speech(){
        return view('pages.media-center.speeches');
    }
    // project
    public function current(){
        return view('pages.projects.current');
    }
    public function excuted(){
        return view('pages.projects.excuted');
    }
    public function planned(){
        return view('pages.projects.planned');
    }
// publication
    public function acts(){
        return view('pages.publication.acts');
    }
    public function flyers(){
        return view('pages.publication.flyers');
    }
    public function guidlines(){
        return view('pages.publication.guidelines');
    }
    public function newsletters(){
        return view('pages.publication.newslatters');
    }
    public function polices(){
        return view('pages.publication.polices');
    }
    public function regulation(){
        return view('pages.publication.regulations');
    }

    // request service
    public function requestservice(){
        return view('pages.requestSevice.request_service');
    }
   // services 
    public function clean_water(){
        return view('pages.services.clean_water');
    }
    public function sanitation(){
        return view('pages.services.sanitation_service');
    }
    // tender
    public function tenders(){
        return view('pages.tenders.tenders');
    }
    // vacancies
    public function vacancies(){
        return view('pages.vacancies.vacancies');
    }
}
