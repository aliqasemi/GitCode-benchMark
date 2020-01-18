<?php

namespace App\Http\Controllers;

use App\Branches;
use App\Files;
use App\Pushes;
use App\UsersCode;
use Illuminate\Http\Request;

class PushesController extends Controller
{
    //

    public function form_push(){
        $user = UsersCode::get() ;
        $branch = Branches::get() ;
        return view('Push.add_push' , compact('user') , compact('branch')) ;
    }

    public function add_push(Request $request){
        $zipFileName = $_FILES['file']['name'] ;
        Pushes::create([
            'date_and_time' => $request['date_and_time'] ,
            'comment' => $request['comment'] ,
            'user_id' => $request['user_id'] ,
            'branch_id' => $request['branch_id']
        ]);

        $array = explode(".", $zipFileName);
        $name = $array[0];
        $ext = $array[1];
        if($ext == 'zip'){
            $path = 'Uploaded/';
            $location = $path . $zipFileName;
            if(move_uploaded_file($_FILES['file']['tmp_name'], $location)){
                $zip = new \ZipArchive;
                if($zip->open($location)){
                    $zip->extractTo($path);
                    for ($i = 0; $i < $zip->numFiles; $i++) {
                        $filename = $zip->getNameIndex($i);
                        $array2 = explode("/", $filename);
                        $id = Pushes::latest()->first()->id ;
                        if($array2[sizeof($array2)-1] != ''){
                            $nodeName = substr($array2[sizeof($array2)-1], 0 ,strpos($array2[sizeof($array2)-1], "."));
                            $nodeType = substr($array2[sizeof($array2)-1] ,strpos($array2[sizeof($array2)-1], ".") + 1);
                            $nodeLevel = (sizeof($array2)-1);
                            $nodeParent = $array2[sizeof($array2)-2];
                            Files::create([
                                'name' => $nodeName ,
                                'type' => $nodeType ,
                                'level' => $nodeLevel ,
                                'parent' => $nodeParent ,
                                'push_id' => $id
                            ]);
                        }
                        else{
                            $nodeName = $array2[sizeof($array2)-2];
                            $nodeType = "directory";
                            $nodeLevel = (sizeof($array2)-2);
                            $nodeParent = $array2[sizeof($array2)-3];
                            Files::create([
                                'name' => $nodeName ,
                                'type' => $nodeType ,
                                'level' => $nodeLevel ,
                                'parent' => $nodeParent ,
                                'push_id' => $id
                            ]);
                        }

                    }
                    $zip->close();
                    unlink($location);
                }

            }
        }




        return redirect('/pushes/push_list') ;
    }

    public function push_list(){
        $data = Pushes::get() ;
        return view('Push.push_list' , compact('data')) ;
    }

    public function push_detail(Pushes $pushes){
        return view('Push.push_detail' , compact('pushes')) ;
    }

    public function push_delete(Pushes $pushes){
        $pushes->delete() ;
        return redirect('/pushes/push_list') ;
    }

    public function push_update_form(Pushes $pushes){
        $user = UsersCode::get() ;
        $branch = Branches::get() ;
        return view('Push.push_update_form' , compact('pushes' , 'branch' , 'user')) ;
    }

    public function push_update(Pushes $pushes , Request $request){
        $pushes->update($request->all()) ;
        return redirect('/pushes/push_list') ;
    }
}
