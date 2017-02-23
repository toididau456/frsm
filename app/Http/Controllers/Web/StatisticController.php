<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Charts;
use App\Repositories\Contracts\CandidateRepositoryInterface as CandidateRepository;
use App\Models\Contracts\CandidateInterface;
use App\Repositories\Criteria\Candidate\TimeCriteria;
use App\Repositories\Criteria\Candidate\GroupStatusCriteria;

class StatisticController extends Controller
{
    private $candidateRepository;

    public function __construct(CandidateRepository $candidateRepository)
    {
        $this->candidateRepository = $candidateRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $optionMonth = [];
        // option in select candidate past $i month 
        for ($i = 1; $i <= config('setting.limitMonth') ; $i++) {
            $optionMonth [$i] = trans('statistic.pastMonth', ['month' => $i]);
        }

        $month =  $request->request->has('month') ? $request->input('month') : config('setting.defaultLimitMonth');

        $this->candidateRepository->pushCriteria(new TimeCriteria($month))
            ->pushCriteria(new GroupStatusCriteria());

        $statusCandidates = $this->candidateRepository->all();
        $chart = Charts::create('pie', 'highcharts')
              ->title(trans('statistic.titleStatusCandidate'))
              ->labels($statusCandidates->pluck('status'))
              ->values($statusCandidates->pluck('countStatus'))
              ->dimensions(600, 400)
              ->responsive(false);

        return view('web.candidate.statistic', compact('chart', 'optionMonth'));
    }
}
