<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Gambar;
use File;
 
class UploadController extends Controller
{
	public function upload(){
		$gambar = Gambar::get();
        return view('monev.index',['gambar' => $gambar]);
        
       // public function upload(){
           // $gambar = Gambar::get();
            // return view('upload',['gambar' => $gambar]);
	}
 
	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|mimes:jpeg,png,jpg,pdf,doc,docx|max:2048',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'public/data_file';
		$file->storeAs($tujuan_upload,$nama_file);
 
		Gambar::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect()->back();
    }
    
    public function hapus($id){
        // hapus file
        $gambar = Gambar::where('id',$id)->first();
        File::delete('data_file/'.$gambar->file);
     
        // hapus data
        Gambar::where('id',$id)->delete();
     
        return redirect()->back();
    }

    public function download(Gambar $gambar){
        
        $path = storage_path ('app/public/data_file/'.$gambar->file);
        return response()->download($path, $gambar->file);
    }
    
}