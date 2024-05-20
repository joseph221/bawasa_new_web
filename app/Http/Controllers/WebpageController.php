<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Anouncement;
use App\Models\Event;
use App\Models\Press_Release;
// use App\Models\Anouncement;

class WebpageController extends Controller
{
    public function index(){
        $anouncement = Anouncement::paginate(2);
        $event = Event::paginate(2);
        return view('index',['sidedata' => $anouncement,'events'=> $event]);
    }
    // about us
    public function background(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.about.background',['sidedata' => $sideanouncement]);
    }
    public function board(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.about.board_members',['sidedata' => $sideanouncement]);
    }
    public function management(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.about.menagment',['sidedata' => $sideanouncement]);
    }
    public function mission(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.about.mission_and_vision',['sidedata' => $sideanouncement]);
    }
    public function orgStru(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.about.organization_structure',['sidedata' => $sideanouncement]);
    }
    // areas
    public function babati(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.areas.babati',['sidedata' => $sideanouncement]);
    }
    public function bashnet(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.areas.bashnet',['sidedata' => $sideanouncement]);
    }
    public function dareda(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.areas.dareda',['sidedata' => $sideanouncement]);
    }
    public function gallapo(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.areas.gallapo',['sidedata' => $sideanouncement]);
    }
    public function kateshi(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.areas.kateshi',['sidedata' => $sideanouncement]);
    }
    public function magugu(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.areas.magugu',['sidedata' => $sideanouncement]);
    }
    // contacts
    public function contact_us(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.contacts.contact_us',['sidedata' => $sideanouncement]);
    }
    public function faqs(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.fasq.faqs',['sidedata' => $sideanouncement]);
    }
    // media
    public function photo(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.media-center.photo',['sidedata' => $sideanouncement]);
    }
    public function video(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.media-center.video',['sidedata' => $sideanouncement]);
    }
    public function press(){
        $press_release = Press_Release::all();
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.media-center.press_release',['sidedata' => $sideanouncement,'press_release'=> $press_release]);
    }
    public function speech(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.media-center.speeches',['sidedata' => $sideanouncement]);
    }
    // project
    public function current(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.projects.current',['sidedata' => $sideanouncement]);
    }
    public function excuted(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.projects.excuted',['sidedata' => $sideanouncement]);
    }
    public function planned(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.projects.planned',['sidedata' => $sideanouncement]);
    }
// publication
    public function acts(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.publication.acts',['sidedata' => $sideanouncement]);
    }
    public function flyers(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.publication.flyers',['sidedata' => $sideanouncement]);
    }
    public function guidlines(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.publication.guidelines',['sidedata' => $sideanouncement]);
    }
    public function newsletters(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.publication.newsletters',['sidedata' => $sideanouncement]);
    }
    public function polices(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.publication.polices',['sidedata' => $sideanouncement]);
    }
    public function regulation(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.publication.regulations',['sidedata' => $sideanouncement]);
    }
    public function report_issue(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.report_issue.report_issue',['sidedata' => $sideanouncement]);
    }

    // request service
    public function requestservice(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.requestSevice.request_service',['sidedata' => $sideanouncement]);
    }
   // services
    public function clean_water(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.services.clean_water',['sidedata' => $sideanouncement]);
    }
    // services
    public function our_service(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.our_service.our_service',['sidedata' => $sideanouncement]);
    }
    public function sanitation(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.services.sanitation_service',['sidedata' => $sideanouncement]);
    }
    public function remove_sewage(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.remove_sewage.remove_sewage',['sidedata' => $sideanouncement]);
    }
    // tender
    public function tenders(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.tenders.tenders',['sidedata' => $sideanouncement]);
    }
    // vacancies
    public function vacancies(){
        $sideanouncement = Anouncement::paginate(2);
        return view('pages.vacancies.vacancies',['sidedata' => $sideanouncement]);
    }

    // anouncements
    public function anouncemetall(){
        $sideanouncement = Anouncement::paginate(2);
        $anouncement = Anouncement::paginate(5);
        return view('pages.anouncements.anouncementAll',['sidedata' => $sideanouncement,'anouncements'=>$anouncement]);
    }

    public function anouncemetById($id){
        $sideanouncement = Anouncement::paginate(2);
        $anouncementById = Anouncement::find($id);
        return view('pages.anouncements.anouncementView',['sidedata' => $sideanouncement,'anounceById'=> $anouncementById]);
    }

    // events
    public function newsall(){
        $sideanouncement = Anouncement::paginate(2);
        $event = Event::paginate(5);
        return view('pages.events.eventall',['sidedata' => $sideanouncement,'events'=>$event]);
    }
    public function newsById($id){
        $sideanouncement = Anouncement::paginate(2);
        $eventById = Event::find($id);
        return view('pages.events.eventView',['sidedata' => $sideanouncement,'newsById'=> $eventById]);
    }

    public function showPdf($file){
        $path = public_path('uploads/pressrelease/'.$file);
        return response()->file($path);
    }

}
