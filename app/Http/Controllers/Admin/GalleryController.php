<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\TravelPackage;
use Constants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $table = new Gallery();
        $items = $table->getAllData('travel_package');

        return view('pages.admin.gallery.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $table = new TravelPackage();
        $travel_packages = $table->getAllData();

        return view('pages.admin.gallery.create', ['travel_packages' => $travel_packages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $rules = [
            'travel_package_id' => 'required|integer|exists:travel_packages,id_travel_package',
            'image' => 'required|image',
        ];

        
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/gallery', 'public');

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $message = $validator->messages()->all();
            return redirect()
                ->route('gallery.create')
                ->withErrors($message)
                ->withInput($request->all());
        } else {
            try {
                DB::beginTransaction();
                $table = new Gallery();
                $insertData = $table->insertData($data);
                $message = empty($insertData) ? Constants::FAILED  : Constants::ADD_SUCCESS;
                DB::commit();
            } catch (\Exception $e) {
                $message = $e;
            }
        }

        $res['status']  = isset($insertData) ? false : true;
        $res['message'] = $message;

        return redirect()->route('gallery.index')->with($res);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_gallery) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $table = new Gallery();
        $tp_table = new TravelPackage();
        $item = $table->getData($id);
        $travel_packages = $tp_table->getAllData();

        return view('pages.admin.gallery.edit', ['item' => $item, 'travel_packages' => $travel_packages ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $rules = [
            'travel_package_id' => 'required|integer|exists:travel_packages,id_travel_package',
            'image' => 'required|image',
        ];

        
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/gallery', 'public');

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $message = $validator->messages()->all();
            return redirect()
                ->route('gallery.create')
                ->withErrors($message)
                ->withInput($request->all());
        } else {
            try {
                DB::beginTransaction();
                $table = new Gallery();
                $updateData = $table->updateData($id, $data);
                $message = empty($updateData) ? Constants::FAILED  : Constants::UPDATE_SUCCESS;
                DB::commit();
            } catch (\Exception $e) {
                $message = $e;
            }
        }

        $res['status']  = isset($updateData) ? false : true;
        $res['message'] = $message;

        return redirect()->route('gallery.index')->with($res);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $table = new Gallery();
        $data = $table->deleteData($id);

        $res['status'] = empty($data) ? false : true;
        $res['message'] = empty($data) ? Constants::FAILED : Constants::DELETE_SUCCESS;

        return redirect()->route('gallery.index')->with($res);
    }
}
