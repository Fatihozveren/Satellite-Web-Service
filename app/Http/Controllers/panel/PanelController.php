<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\LaunchPad;
use App\Models\Satellite;
use App\Models\Status;
use function view;

class PanelController extends Controller
{
    public function index(){
        return view('panel.homepage');
    }

    public function updateData(){
        $sayac = 0;
        $trimmed_dizis = null;
        $istemci = curl_init();
        curl_setopt($istemci, CURLOPT_REFERER, "https://eospso.nasa.gov/content/all-missions");
        curl_setopt($istemci, CURLOPT_URL, "https://eospso.nasa.gov/content/all-missions");
        curl_setopt($istemci, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 OPR/73.0.3856.415");
        curl_setopt($istemci, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($istemci);
        $string = ' ' . $data;
        $ini = strpos($string, '<tbody>');
        if ($ini == 0) return '';
        $ini += strlen('<tbody>');
        $len = strpos($string, '</tbody>', $ini) - $ini;
        $data=substr($string, $ini, $len);
        $data = trim($data);
        $dizis = explode("        ", $data);
        $trimmed_dizis = array_map('trim', $dizis);


        for ($i=0; $i<10 ; $i++){

            if (count($trimmed_dizis)>=7+$i*18){
                $satellite=new \App\Models\Satellite();
                //take url and slug
                $string = ' ' . $trimmed_dizis[7+(18*$i)];
                $ini = strpos($string, '="');
                if ($ini == 0) return '';
                $ini += strlen('="');
                $len = strpos($string, '"', $ini) - $ini;
                $data=substr($string, $ini, $len);
                $data2 = explode("/", $data);
                $slug = $data2[2];
                $data = "https://eospso.nasa.gov".$data;
                $satellite->link = $data;
                $satellite->slug = $slug;

                //take name
                $ini = strpos($string, '">');
                if ($ini == 0) return '';
                $ini += strlen('">');
                $len = strpos($string, '</a>', $ini) - $ini;
                $data=substr($string, $ini, $len);
                $satellite->name=$data;

                //take image
                $string = ' ' . $trimmed_dizis[3+(18*$i)];
                $ini = strpos($string, 'src="');
                if ($ini == 0) return '';
                $ini += strlen('src="');
                $len = strpos($string, '"', $ini) - $ini;
                $data=substr($string, $ini, $len);
                $satellite->image=$data;
                $satellite->save();
            }
        }

        $last_key=null;

        do{

            $sayac++;
            curl_setopt($istemci, CURLOPT_REFERER, "https://eospso.nasa.gov/content/all-missions?page=" . $sayac);
            curl_setopt($istemci, CURLOPT_URL, "https://eospso.nasa.gov/content/all-missions?page=" . $sayac);
            curl_setopt($istemci, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 OPR/73.0.3856.415");
            curl_setopt($istemci, CURLOPT_RETURNTRANSFER, 1);
            $data = curl_exec($istemci);
            $string = ' ' . $data;
            $ini = strpos($string, '<tbody>');
            if ($ini == 0) return '';
            $ini += strlen('<tbody>');
            $len = strpos($string, '</tbody>', $ini) - $ini;
            $data=substr($string, $ini, $len);
            $data = trim($data);
            $dizis = explode("        ", $data);
            $trimmed_dizis = array_map('trim', $dizis);


            for ($i=0; $i<10 ; $i++){

                if (count($trimmed_dizis)>=7+$i*18){
                    $satellite=new \App\Models\Satellite();
                    //take url and slug
                    $string = ' ' . $trimmed_dizis[7+(18*$i)];
                    $ini = strpos($string, '="');
                    if ($ini == 0) return '';
                    $ini += strlen('="');
                    $len = strpos($string, '"', $ini) - $ini;
                    $data=substr($string, $ini, $len);
                    $data2 = explode("/", $data);
                    $slug = $data2[2];
                    $data = "https://eospso.nasa.gov".$data;
                    $satellite->link = $data;
                    $satellite->slug = $slug;

                    //take name
                    $ini = strpos($string, '">');
                    if ($ini == 0) return '';
                    $ini += strlen('">');
                    $len = strpos($string, '</a>', $ini) - $ini;
                    $data=substr($string, $ini, $len);
                    $satellite->name=$data;

                    //take image
                    $string = ' ' . $trimmed_dizis[3+(18*$i)];
                    $ini = strpos($string, 'src="');
                    if ($ini == 0) return '';
                    $ini += strlen('src="');
                    $len = strpos($string, '"', $ini) - $ini;
                    $data=substr($string, $ini, $len);
                    $satellite->image=$data;
                    $satellite->save();
                }
            }


            end($trimmed_dizis);
            $last_key = key($trimmed_dizis);


        }
        while($last_key > 166);

        $satellites=Satellite::all();

        foreach ($satellites as $obj){

            $this->pullInfo($obj);


        }

    }

    public function pullInfo($satellite){
        $istemci = curl_init();
        curl_setopt($istemci, CURLOPT_REFERER, $satellite->link);
        curl_setopt($istemci, CURLOPT_URL, $satellite->link);
        curl_setopt($istemci, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 OPR/73.0.3856.415");
        curl_setopt($istemci, CURLOPT_RETURNTRANSFER, 1);
        $ham_veri = curl_exec($istemci);
        $ham_veri = trim($ham_veri);
        $dizis=explode("        ", $ham_veri);
        $trimmed_dizis = array_map('trim', $dizis);
        $trimmed_dizis = array_map(function($trimmed_dizis){
            return trim(strip_tags($trimmed_dizis));}, $trimmed_dizis);
        $trimmed_dizis=array_filter($trimmed_dizis);
        $index2=null;

        $status=null;
        $status_ctrl=true;
        $status_index=null;

        $mission_category_ctrl=true;
        $mission_category=null;
        $mission_category_index =null;

        $launch_date_index =null;
        $launch_date=null;
        $launch_date_ctrl=true;

        $launch_location=null;
        $launch_location_index=null;
        $launch_location_ctrl=true;

        $designed_life=null;
        $designed_life_index=null;
        $designed_life_ctrl=true;


        foreach ($trimmed_dizis as $key=>$value){
            if ($value=='Status:'){
                $status_index=$key;
            }

            if ($status_ctrl && !is_null($status_index) && $key >= $status_index ){
                if ($value=='Mission Category:' || $value=='Launch Date:' || $value=='Launch Location:'
                    || $value=='Designed Life:' || strpos($value, "\n")!==false){
                    $status_ctrl=false;
                }
                if ($status_ctrl){
                    $status=$status.' '.$value;

                }
            }

            if ($value=='Mission Category:'){
                $mission_category_index=$key;

            }
            if ($mission_category_ctrl && !is_null($mission_category_index) && $key >= $mission_category_index ){
                if (str_contains($value,'Launch Date:')||str_contains($value,'Launch Location:' || strpos($value, "\n")!==false)
                    || str_contains($value,'Designed Life:')){
                    $mission_category_ctrl=false;
                }

                if ($mission_category_ctrl){
                    $mission_category=$mission_category.' '.$value;

                }

                if (str_contains($value,'Launch Date:')){
                    $launch_date_index=$key;
                }

                if ($launch_date_ctrl && !is_null($launch_date_index) && $key >= $launch_date_index ){
                    if (str_contains($value,'Launch Location:') || str_contains($value,'Designed Life:' || strpos($value, "\n")!==false)){
                        $launch_date_ctrl=false;
                    }

                    if ($launch_date_ctrl){
                        $launch_date=$launch_date.' '.$value;

                    }

                }


            }

            if (str_contains($value,'Launch Location:')){
                $launch_location_index=$key;
            }
            if ($launch_location_ctrl && !is_null($launch_location_index) && $key >= $launch_location_index ){
                if (str_contains($value,'Designed Life:') || strpos($value, "\n")!==false){
                    $launch_location_ctrl=false;
                }

                if ($launch_location_ctrl){
                    $launch_location=$launch_location.' '.$value;

                }
            }

            if (str_contains($value,'Designed Life:')){
                $designed_life_index=$key;
            }
            if ($designed_life_ctrl && !is_null($designed_life_index) && $key >= $designed_life_index ){
                if (str_contains($value,'Designed Life:')){
                    $designed_life_ctrl=false;
                }

                if ($designed_life_ctrl){
                    $designed_life=$designed_life.' '.$value;

                }

            }

        }

        $status=str_replace('Status: ','',$status);
        $status=trim($status);
        $mission_category=str_replace('Mission Category: ','',$mission_category);
        $mission_category=trim($mission_category);
        $launch_location=str_replace('Launch Location: ','',$launch_location);
        $launch_location=trim($launch_location);

        $designed_life=str_replace('Designed Life: ','',$designed_life);
        $designed_life=trim($designed_life);

        $satellite->status = $status;
        $satellite->category = $mission_category;
        $satellite->launch_location = $launch_location;
        $satellite->design_life = $designed_life;
        $satellite->save();
    }
}
