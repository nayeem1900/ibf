<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Carrier;
use App\Model\Etender;
use App\Model\Logo;
use App\Model\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        return view ('frontend.layouts.home',$data);

    }
    public function ibch(){
        $data['logo']=Logo::first();
        return view('frontend.pages.ibch',$data);
    }
    public function ibhmirpur(){
        $data['logo']=Logo::first();
        return view('frontend.pages.ibh_mirpur',$data);
    }
    public function ibhmugdha(){
        $data['logo']=Logo::first();
        return view('frontend.pages.ibh_mugdha',$data);
    }
    public function ibmoh(){
        $data['logo']=Logo::first();
        return view('frontend.pages.ibmoh',$data);
    }
    public function ibch_manikgonj(){
        $data['logo']=Logo::first();
        return view('frontend.pages.ibch_manikgonj',$data);
    }
    public function atglance(){
        $data['logo']=Logo::first();
        return view('frontend.pages.atglance',$data);
    }
    public function jakat(){
        $data['logo']=Logo::first();
        return view('frontend.pages.jakat',$data);
    }
    public function hospitalinfo(){
    $data['logo']=Logo::first();
    return view('frontend.pages.hospital_info',$data);
    }
    public function jobapply(){
        $data['logo']=Logo::first();
        return view('frontend.pages.job_apply',$data);
    }
    public function foundationcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.foundation_committee',$data);
    }
    public function executivecommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.executive_committee',$data);
    }
    public function auditcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.audit_committee',$data);
    }
    public function hospitalcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.hospital_committee',$data);
    }
    public function communityhospitalcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.community_hospital_committee',$data);
    }
    public function educationcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.education_committee',$data);
    }
    public function healtheducationcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.health_education_committee',$data);
    }
    public function etender(){

        $data['logo']=Logo::first();
        $data['allData']=Etender::all();

        return view('frontend.pages.etender',$data);

    }
    public function career(){

        $data['logo']=Logo::first();
        $data['allData']=Carrier::all();

        return view('frontend.pages.career',$data);

    }
    public function contact(){
        $data['logo']=Logo::first();
        return view('frontend.pages.contact',$data);
    }
}
