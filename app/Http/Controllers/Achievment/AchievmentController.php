<?php

namespace App\Http\Controllers\Achievment;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Achievment;
use Illuminate\Http\Request;
use Session;

class AchievmentController extends Controller
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
            $achievment = Achievment::where('Employee', 'LIKE', "%$keyword%")
				->orWhere('Forward Application To', 'LIKE', "%$keyword%")
				->orWhere('Achievement Title', 'LIKE', "%$keyword%")
				->orWhere('Achievement Date', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $achievment = Achievment::paginate($perPage);
        }

        return view('agile/Achievment/create.achievment.index', compact('achievment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('agile/Achievment/create.achievment.create');
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
			'Employee' => 'required',
			'Forward Application To' => 'required',
			'Achievement Title' => 'required',
			'Achievement Date' => 'required'
		]);
        $requestData = $request->all();
        
        Achievment::create($requestData);

        Session::flash('flash_message', 'Achievment added!');

        return redirect('localhost/agile/achievment');
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
        $achievment = Achievment::findOrFail($id);

        return view('agile/Achievment/create.achievment.show', compact('achievment'));
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
        $achievment = Achievment::findOrFail($id);

        return view('agile/Achievment/create.achievment.edit', compact('achievment'));
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
			'Employee' => 'required',
			'Forward Application To' => 'required',
			'Achievement Title' => 'required',
			'Achievement Date' => 'required'
		]);
        $requestData = $request->all();
        
        $achievment = Achievment::findOrFail($id);
        $achievment->update($requestData);

        Session::flash('flash_message', 'Achievment updated!');

        return redirect('localhost/agile/achievment');
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
        Achievment::destroy($id);

        Session::flash('flash_message', 'Achievment deleted!');

        return redirect('localhost/agile/achievment');
    }
}
