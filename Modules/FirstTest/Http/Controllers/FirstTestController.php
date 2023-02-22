<?php

namespace Modules\FirstTest\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\FirstTest\Entities\FirstTest;
use Modules\FirstTest\Http\Requests\ManageFirstTestRequest;
use Modules\FirstTest\Http\Requests\CreateFirstTestRequest;
use Modules\FirstTest\Http\Requests\UpdateFirstTestRequest;
use Modules\FirstTest\Http\Requests\ShowFirstTestRequest;
use Modules\FirstTest\Repositories\FirstTestRepository;

class FirstTestController extends Controller
{
 /**
     * @var FirstTestRepository
     * @var CategoryRepository
     */
    protected $firsttest;

    /**
     * @param FirstTestRepository $firsttest
     */
    public function __construct(FirstTestRepository $firsttest)
    {
        $this->firsttest = $firsttest;
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('firsttest::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('firsttest::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(CreateFirstTestRequest $request)
    {
        $this->firsttest->create($request->except('_token','_method'));
        return redirect()->route('admin.firsttest.index')->withFlashSuccess(trans('firsttest::alerts.backend.firsttest.created'));
    }

    /**
     * @param FirstTest              $firsttest
     * @param ManageFirstTestRequest $request
     *
     * @return mixed
     */
    public function edit(FirstTest $firsttest, ManageFirstTestRequest $request)
    {
        return view('firsttest::edit')
            ->withFirstTest($firsttest);
    }

    /**
     * @param FirstTest              $firsttest
     * @param UpdateFirstTestRequest $request
     *
     * @return mixed
     */
    public function update(FirstTest $firsttest, UpdateFirstTestRequest $request)
    {
        $this->firsttest->updateById($firsttest->id,$request->except('_token','_method'));

        return redirect()->route('admin.firsttest.index')->withFlashSuccess(trans('firsttest::alerts.backend.firsttest.updated'));
    }

    /**
     * @param FirstTest              $firsttest
     * @param ManageFirstTestRequest $request
     *
     * @return mixed
     */
    public function show(FirstTest $firsttest, ShowFirstTestRequest $request)
    {
        return view('firsttest::show')->withFirstTest($firsttest);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(FirstTest $firsttest)
    {
        $this->firsttest->deleteById($firsttest->id);

        return redirect()->route('admin.firsttest.index')->withFlashSuccess(trans('firsttest::alerts.backend.firsttest.deleted'));
    }
}
