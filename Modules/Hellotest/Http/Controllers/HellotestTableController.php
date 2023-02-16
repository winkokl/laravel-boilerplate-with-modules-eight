<?php

namespace Modules\Hellotest\Http\Controllers;

use Illuminate\Routing\Controller;
use DataTables;
use Modules\Hellotest\Repositories\HellotestRepository;
use Modules\Hellotest\Http\Requests\ManageHellotestRequest;

class HellotestTableController extends Controller
{
    /**
     * @var HellotestRepository
     */
    protected $hellotest;

    /**
     * @param HellotestRepository $hellotest
     */
    public function __construct(HellotestRepository $hellotest)
    {
        $this->hellotest = $hellotest;
    }

    /**
     * @param ManageHellotestRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageHellotestRequest $request)
    {
        return DataTables::of($this->hellotest->getForDataTable())
            ->addColumn('actions', function ($hellotest) {
                return $hellotest->action_buttons;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
