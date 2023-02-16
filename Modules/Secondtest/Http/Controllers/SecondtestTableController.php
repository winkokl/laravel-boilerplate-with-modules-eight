<?php

namespace Modules\Secondtest\Http\Controllers;

use Illuminate\Routing\Controller;
use DataTables;
use Modules\Secondtest\Repositories\SecondtestRepository;
use Modules\Secondtest\Http\Requests\ManageSecondtestRequest;

class SecondtestTableController extends Controller
{
    /**
     * @var SecondtestRepository
     */
    protected $secondtest;

    /**
     * @param SecondtestRepository $secondtest
     */
    public function __construct(SecondtestRepository $secondtest)
    {
        $this->secondtest = $secondtest;
    }

    /**
     * @param ManageSecondtestRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageSecondtestRequest $request)
    {
        return DataTables::of($this->secondtest->getForDataTable())
            ->addColumn('actions', function ($secondtest) {
                return $secondtest->action_buttons;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
