<?php

namespace Modules\FirstTest\Http\Controllers;

use Illuminate\Routing\Controller;
use DataTables;
use Modules\FirstTest\Repositories\FirstTestRepository;
use Modules\FirstTest\Http\Requests\ManageFirstTestRequest;

class FirstTestTableController extends Controller
{
    /**
     * @var FirstTestRepository
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
     * @param ManageFirstTestRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageFirstTestRequest $request)
    {
        return DataTables::of($this->firsttest->getForDataTable())
            ->addColumn('actions', function ($firsttest) {
                return $firsttest->action_buttons;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
