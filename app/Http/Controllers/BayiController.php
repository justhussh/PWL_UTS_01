<?php
namespace App\Http\Controllers;
use App\Models\Bayi;
use Illuminate\Http\Request;
class BayiController extends Controller
{
    /**
 * Display a listing of the resource.
 *
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BayiController;
use Illuminate\Http\Request;
Route::resource('Bayi', BayiController::class);
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $bayis = Bayi::paginate(6); // Mengambil 6 isi tabel
        $posts = Bayi::orderBy('no_urut', 'desc')->paginate(6);
        return view('Bayi.index', compact('bayis'))->with(
            'i',
            (request()->input('page', 1) - 1) * 5
        );
    }

    public function create()
    {
        return view('Bayi.create');
    }

    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'no_urut' => 'required',
            'nama' => 'required',
            'alamat'=> 'required',
            'tanggal_lahir' => 'required',
            'bb_lahir'=> 'required',
            'tb_lahir' => 'required'
        ]);
        //fungsi eloquent untuk menambah data
        Bayi::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()
            ->route('Bayi.index')
            ->with('success', 'Data Bayi Berhasil Ditambahkan');
    }

    public function show($no_urut)
    {
        //menampilkan detail data dengan menemukan/berdasarkan No_urut Bayi
        $Bayi = Bayi::find($no_urut);
        return view('Bayi.detail', compact('Bayi'));
    }

    public function edit($no_urut)
    {
        $Bayi = Bayi::find($no_urut);
        return view('Bayi.edit', compact('Bayi'));
    }

    public function update(Request $request, $no_urut)
    {
        //melakukan validasi data
        $request->validate([
            'no_urut' => 'required',
            'nama' => 'required',
            'alamat'=> 'required',
            'tanggal_lahir' => 'required',
            'bb_lahir'=> 'required',
            'tb_lahir' => 'required'
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Bayi::find($no_urut)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()
            ->route('Bayi.index')
            ->with('success', 'Data Bayi Berhasil Diupdate');
    }

    public function destroy($no_urut)
    {
        //fungsi eloquent untuk menghapus data
        Bayi::find($no_urut)->delete();
        return redirect()
            ->route('Bayi.index')
            ->with('success', 'Data Bayi Berhasil Dihapus');
    }

    public function search(Request $request){
        $keyword = $request->search;
        $Bayi = Bayi::where('Nama', 'like', '&' . $keyword . '&')->paginate(6);
        return view('Bayi.index', compact('bayis'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
