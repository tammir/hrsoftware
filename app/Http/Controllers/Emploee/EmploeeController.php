<?php

namespace App\Http\Controllers\Emploee;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Emploee;
use Illuminate\Http\Request;
use Session;

class EmploeeController extends Controller
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
            $emploee = Emploee::where('company', 'LIKE', "%$keyword%")
				->orWhere('employee_id', 'LIKE', "%$keyword%")
				->orWhere('employee_type', 'LIKE', "%$keyword%")
				->orWhere('work_shift', 'LIKE', "%$keyword%")
				->orWhere('email', 'LIKE', "%$keyword%")
				->orWhere('first_name', 'LIKE', "%$keyword%")
				->orWhere('last_name', 'LIKE', "%$keyword%")
				->orWhere('dob', 'LIKE', "%$keyword%")
				->orWhere('gender', 'LIKE', "%$keyword%")
				->orWhere('home_district', 'LIKE', "%$keyword%")
				->orWhere('city', 'LIKE', "%$keyword%")
				->orWhere('address', 'LIKE', "%$keyword%")
				->orWhere('country', 'LIKE', "%$keyword%")
				->orWhere('contact_number', 'LIKE', "%$keyword%")
				->orWhere('emergency_contact', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $emploee = Emploee::paginate($perPage);
        }

        return view('employee.emploee.index', compact('emploee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('employee.emploee.create');
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
			'email' => 'required',
			'first_name' => 'required',
			'gender' => 'required'
		]);
        $requestData = $request->all();
        
        Emploee::create($requestData);

        Session::flash('flash_message', 'Emploee added!');

        return redirect('employee/emploee');
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
        $emploee = Emploee::findOrFail($id);

        return view('employee.emploee.show', compact('emploee'));
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
        $emploee = Emploee::findOrFail($id);

        return view('employee.emploee.edit', compact('emploee'));
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
			'email' => 'required',
			'first_name' => 'required',
			'gender' => 'required'
		]);
        $requestData = $request->all();
        
        $emploee = Emploee::findOrFail($id);
        $emploee->update($requestData);

        Session::flash('flash_message', 'Emploee updated!');

        return redirect('employee/emploee');
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
        Emploee::destroy($id);

        Session::flash('flash_message', 'Emploee deleted!');

        return redirect('employee/emploee');
    }
}
