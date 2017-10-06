<?php

namespace App\Http\Controllers\Emploee;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Promotion;
use Illuminate\Http\Request;
use Session;

class PromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $promotions = Promotion::where('Employee_Promotions', 'LIKE', "%$keyword%")
				->orWhere('Promotional_date', 'LIKE', "%$keyword%")
				->orWhere('promotion To', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $promotions = Promotion::paginate($perPage);
        }

        return view('show.promotions.index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('show.promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'Employee_Promotions' => 'required',
			'Promotional_date' => 'required',
			'promotion To' => 'required'
		]);
        $requestData = $request->all();
        
        Promotion::create($requestData);

        Session::flash('flash_message', 'Promotion added!');

        return redirect('pr/promotions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $promotion = Promotion::findOrFail($id);

        return view('show.promotions.show', compact('promotion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $promotion = Promotion::findOrFail($id);

        return view('show.promotions.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
			'Employee_Promotions' => 'required',
			'Promotional_date' => 'required',
			'promotion To' => 'required'
		]);
        $requestData = $request->all();
        
        $promotion = Promotion::findOrFail($id);
        $promotion->update($requestData);

        Session::flash('flash_message', 'Promotion updated!');

        return redirect('pr/promotions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Promotion::destroy($id);

        Session::flash('flash_message', 'Promotion deleted!');

        return redirect('pr/promotions');
    }
}
