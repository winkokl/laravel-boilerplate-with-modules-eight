<?php

namespace Modules\SecondTest\Http\Controllers;

use Illuminate\Routing\Controller;
use DataTables;
use Modules\SecondTest\Repositories\SecondTestRepository;
use Modules\SecondTest\Http\Requests\ManageSecondTestRequest;

class SecondTestTableController extends Controller
{
    /**
     * @var SecondTestRepository
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
     * @param ManageSecondTestRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageSecondTestRequest $request)
    {
        return DataTables::of($this->secondtest->getForDataTable())
            ->addColumn('actions', function ($secondtest) {
                return $secondtest->action_buttons;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
