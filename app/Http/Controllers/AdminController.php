<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Datacontent;
use App\Models\Ita;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function dataTable(){
        return view('data-table');
    }

    public function index(Request $req)
    {

        $Admin = Auth::user();
        $listContentHots = DB::table('datacontents')->first();
        $listContents = DB::table('datacontents')->get();

        // $list = $listContents->chunk(2);
        // $list->toArray();


        // $data = array();
        $datas = [
            'datas' => $listContents
        ];




        return view('home', [
            'Admin' => $Admin,
            'listContentHots' => $listContentHots,
            'listContents' => $listContents,
            'datas' => $datas
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function viewControl(){



        $listContents = DB::table('datacontents')->get();


        // foreach($listContents as $listContent){
        //     $data[] = [
        //         'id' => $listContent->id,
        //         'name' => $listContent->title_name,
        //         'content' => $listContent->content,
        //     ];
        // }
        // // dd($data);

        // return response()->json([
        //     'data' => $data,
        // ]);
        return view('admin-view.view-control-news', ['listContents' => $listContents]);
    }

    public function views($type){
            $dataContents = DB::table('datacontents')->where('type',$type)->get();
            $types = $type;
            return view('views', [
                'dataContents' => $dataContents,
                'types' => $types
            ]);
    }
    public function viewDetail($id){
            $dataContent = DB::table('datacontents')->where('id',$id)->first();
            return view('view-detail', [
                'dataContent' => $dataContent]);
    }

    public function viewDetailMenu($id){
        $idMenu = $id;
        return view('view-detail-menu', [
            'idMenu' => $idMenu]);
}

    public function insertContent(Request $request){

        // dd($request->all());

        $request->validate([
            'img_content' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
            'duc_file' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
            'icon' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip'
        ]);

        $imageName = time().'.'.$request->img_content->extension();
        $request->img_content->move(public_path('image'), $imageName);

        $iconName = time().'.'.$request->icon->extension();
        $request->icon->move(public_path('logo'), $iconName);

        $fileName = time().'.'.$request->duc_file->extension();
        $request->duc_file->move(public_path('files'), $fileName);

        $DataContent = Datacontent::create([
            'title_name' => $request->title_name,
            'content' => $request->content,
            'img_content' => $imageName,
            'duc_file' => $fileName,
            'icon' => $iconName,
            'type' => $request->type,
            'link' => $request->link,
            'link_sub' => $request->link_sub
        ]);

        return back()
            ->with('success','You have successfully file uplaod.')
            ->with('file',$DataContent);

    }

    public function editNew($id){
        // dd($id);
        $dbcontents = DB::table('datacontents')->where('id', $id)->get();
        return view('edit-form', ['dbcontents'=> $dbcontents]);
    }

    public function editNewConfig(Request $request){
        // dd($request->all());

        $request->validate([
            'img_content' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
            'duc_file' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
            'icon' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip'
        ]);

        $imageName = time().'.'.$request->img_content->extension();
        $request->img_content->move(public_path('image'), $imageName);

        $iconName = time().'.'.$request->icon->extension();
        $request->icon->move(public_path('logo'), $iconName);

        $fileName = time().'.'.$request->duc_file->extension();
        $request->duc_file->move(public_path('files'), $fileName);

        $editConfig = DB::table('datacontents')->where('id', $request->id)
        ->update([
            'title_name' => $request->title_name,
            'content' => $request->content,
            'img_content' => $imageName,
            'duc_file' => $fileName,
            'icon' => $iconName,
            'type' => $request->type,
            'link' => $request->link,
            'link_sub' => $request->link_sub
        ]);

        $listContents = DB::table('datacontents')->get();
        // dd($listContents);
        return view('admin-view.view-control-news', ['listContents' => $listContents]);
    }

    public function delete($id){
        // dd($id);

        $delete = DB::table('datacontents')->where('id', $id)->delete();
        // return response()->json([
        //     'message' => 'Delete OK'
        // ]);

        return redirect()->route('view.control.new');
    }

    public function viewIta(){
        $itas = DB::table('itas')->get();
        return view('view-ita', [
            'itas' => $itas
        ]);
    }

    public function viewItaDetail($id){
        $ita = DB::table('itas')->where('id', $id)->first();
        return view('view-ita-detail', [
            'ita' => $ita
        ]);
    }

    public function insertIta(Request $req){
        // dd($req->all());


        if($req->img_content != null AND $req->duc_file != null){
            $req->validate([
                'img_content' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
                'duc_file' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
            ]);

            $imageName = time().'.'.$req->img_content->extension();
            $req->img_content->move(public_path('image'), $imageName);

            $fileName = time().'.'.$req->duc_file->extension();
            $req->duc_file->move(public_path('files'), $fileName);

            $ita = Ita::create([
                'title_name' => $req->title_name,
                'content' => $req->content,
                'image_ita' => $imageName,
                'duc_file' => $fileName
            ]);
        }else{
            $ita = Ita::create([
                'title_name' => $req->title_name,
                'content' => $req->content
            ]);
        }

        return redirect()->route('view.ita');
    }

    public function editIta($id){
        // dd($id);
        $itaEdit = DB::table('itas')->where('id', $id)->first();
        // dd($itaEdit);
        return view('form-edit-ita', [
            'itaEdit' => $itaEdit
        ]);

    }

    public function editItaConfig(Request $req){

        // dd($req);

        if($req->img_content != null AND $req->duc_file != null){
            $req->validate([
                'img_content' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
                'duc_file' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
            ]);

            $imageName = time().'.'.$req->img_content->extension();
            $req->img_content->move(public_path('image'), $imageName);

            $fileName = time().'.'.$req->duc_file->extension();
            $req->duc_file->move(public_path('files'), $fileName);

            $ita = DB::table('itas')->where('id', $req->id)->update([
                'title_name' => $req->title_name,
                'content' => $req->content,
                'image_ita' => $imageName,
                'duc_file' => $fileName
            ]);

        }else{
            $ita = DB::table('itas')->where('id', $req->id)->update([
                'title_name' => $req->title_name,
                'content' => $req->content
            ]);
        }

        return redirect()->route('view.ita');
    }

    public function deleteIta($id){
        $deleteIta = DB::table('itas')->where('id', $id)->delete();
        return redirect()->route('view.ita');
    }
}
