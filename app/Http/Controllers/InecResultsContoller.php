<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InecResultsContoller extends Controller
{
    //
    public function pollingUnitResult(Request $request) {
        $result = DB::table('polling_unit')
                    ->join('announced_pu_results', 'polling_unit.uniqueid', '=', 'announced_pu_results.polling_unit_uniqueid')
                    ->select()
                    ->where('polling_unit_name', $request->polling_unit)
                    ->sum('party_score');
        return view('PollingUnitResults', compact('result'));
    }

    public function getLGAnameId($lga_name) {
        $result = DB::table('lga')->where('lga_name', $lga_name)->first('lga_id');
        return $result->lga_id;
    }

    public function LGAresult(Request $request) {
        $sub = DB::table('polling_unit')
                    ->where('lga_id', $this->getLGAnameId($request->lga_name));

        $result = DB::table($sub, 'LocalGovernment')
                ->select()
                ->join('announced_pu_results', 'LocalGovernment.uniqueid', '=', 'announced_pu_results.polling_unit_uniqueid')
                ->sum('party_score');

        return view('LGAresults', compact('result'));
    }

    public function newPollingUnit(Request $request) {
        DB::table('announced_pu_results')
            ->join('polling_unit', 'polling_unit.uniqueid', '=', 'announced_pu_results.polling_unit_uniqueid')
            // ->select('announced_pu_results.*')
            ->where('polling_unit.polling_unit_name', 'New Polling Unit')
            ->Insert(['polling_unit_uniqueid' => 280,
                             'party_abbreviation' => $request->party_abbreviation,
                             'party_score' => $request->party_score,
                             'entered_by_user' => 'Bose',
                             'date_entered' => '2011-04-26 15:44:03',
                             'user_ip_address' => '192.168.1.101']);
        return view('NewPollingUnit')->with('msg', 'stored successfuly');
    }
}
