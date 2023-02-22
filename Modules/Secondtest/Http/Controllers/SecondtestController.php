<?php

namespace Modules\SecondTest\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\SecondTest\Entities\SecondTest;
use Modules\SecondTest\Http\Requests\ManageSecondTestRequest;
use Modules\SecondTest\Http\Requests\CreateSecondTestRequest;
use Modules\SecondTest\Http\Requests\UpdateSecondTestRequest;
use Modules\SecondTest\Http\Requests\ShowSecondTestRequest;
use Modules\SecondTest\Repositories\SecondTestRepository;

class SecondTestController extends Controller
{
 /**
     * @var SecondTestRepository
     * @var CategoryRepository
     */
    protected $secondtest;

    /**
     * @param SecondTestRepository $secondtest
     */
    public function __construct(SecondTestRepository $secondtest)
    {
        $this->secondtest = $secondtest;
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('secondtest::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('secondtest::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(CreateSecondTestRequest $request)
    {
        $this->secondtest->create($request->except('_token','_method'));
        return redirect()->route('admin.secondtest.index')->withFlashSuccess(trans('secondtest::alerts.backend.secondtest.created'));
    }

    /**
     * @param SecondTest              $secondtest
     * @param ManageSecondTestRequest $request
     *
     * @return mixed
     */
    public function edit(SecondTest $secondtest, ManageSecondTestRequest $request)
    {
        return view('secondtest::edit')
            ->withSecondTest($secondtest);
    }

    /**
     * @param SecondTest              $secondtest
     * @param UpdateSecondTestRequest $request
     *
     * @return mixed
     */
    public function update(SecondTest $secondtest, UpdateSecondTestRequest $request)
    {
        $this->secondtest->updateById($secondtest->id,$request->except('_token','_method'));

        return redirect()->route('admin.secondtest.index')->withFlashSuccess(trans('secondtest::alerts.backend.secondtest.updated'));
    }

    /**
     * @param SecondTest              $secondtest
     * @param ManageSecondTestRequest $request
     *
     * @return mixed
     */
    public function show(SecondTest $secondtest, ShowSecondTestRequest $request)
    {
        return view('secondtest::show')->withSecondTest($secondtest);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(SecondTest $secondtest)
    {
        $this->secondtest->deleteById($secondtest->id);

        return redirect()->route('admin.secondtest.index')->withFlashSuccess(trans('secondtest::alerts.backend.secondtest.deleted'));
    }
}
