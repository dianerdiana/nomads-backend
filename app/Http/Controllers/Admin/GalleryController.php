<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\TravelPackage;
use Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
	// INDEX Function
	public function index()
	{
		$items = Gallery::all();

		return view('pages.admin.gallery.index', compact('items'));
	}

	// CREATE Function
	public function create()
	{
		$travel_packages = TravelPackage::all();

		return view('pages.admin.gallery.create', compact('travel_packages'));
	}

	// STORE Function
	public function store(Request $request)
	{
		$rules = [
			'travel_package_id' => 'required|integer|exists:travel_packages,id_travel_package',
			'image' => 'required|image',
		];

		$data = $request->all();

		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			$message = $validator->messages()->all();
			return back()
				->withErrors($message)
				->withInput($request->all());
		}

		try {
			DB::beginTransaction();
			$data['image'] = $request->file('image')->store('assets/gallery', 'public');
			$gallery = new Gallery();
			$gallery->create($data);

			DB::commit();
			$status 	= 'success';
			$message 	= Helpers::response('create', 'Gallery');
			return redirect()->route('gallery.index')->with(compact('status', 'message'));
		} catch (\Exception $e) {
			$message = $e->getMessage();
			return back()->withErrors($message);
		}
	}

	// SHOW Function
	public function show($id_gallery)
	{
		//
	}

	// EDIT Function
	public function edit($id)
	{
		try {
			$item 						= Gallery::findOrFail($id);
			$travel_packages 	= TravelPackage::all();

			return view('pages.admin.gallery.edit', compact('item', 'travel_packages'));
		} catch (\Exception $e) {
			$message = $e->getMessage();
			return back()->with(compact('message'));
		}
	}

	// UPDATE Function
	public function update(Request $request, $id)
	{
		$rules = [
			'travel_package_id' => 'integer|exists:travel_packages,id_travel_package',
			'image' => 'image',
		];

		$data = $request->all();

		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			$message = $validator->messages()->all();
			return redirect()
				->back()
				->withErrors($message)
				->withInput($request->all());
		}

		try {
			DB::beginTransaction();
			$gallery = Gallery::findOrFail($id);
			if (!empty($request->file('image'))) {
				$data['image'] = $request->file('image')->store('assets/gallery', 'public');
			}
			$gallery->update($data);
			DB::commit();
			$status 	= 'success';
			$message 	= Helpers::response('update', 'Gallery');
			return redirect()->route('gallery.index')->with(compact('status', 'message'));
		} catch (\Exception $e) {
			$message = $e->getMessage();
			return back()->withErrors($message);
		}
	}

	// DESTROY Function
	public function destroy($id)
	{
		try {
			DB::beginTransaction();

			$gallery = Gallery::findOrFail($id);
			$gallery->delete();

			DB::commit();

			$status 	= 'success';
			$message 	= Helpers::response('delete', 'Gallery');
			return back()->with(compact('status', 'message'));
		} catch (\Exception $e) {
			$message = $e->getMessage();
			return back()->withErrors($message);
		}
	}
}
