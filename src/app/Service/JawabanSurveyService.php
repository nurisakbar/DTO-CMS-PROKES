<?php
namespace App\Service;

use App\JawabanSurveyLog;
use App\JawabanSurvey;
use Auth;

class JawabanSurveyService
{
    public function jawabanSurveyLogCreate($request)
    {
        $user = Auth::user();
        return JawabanSurveyLog::create([
            'survey_id'                 =>  $request->survey_id,
            'user_id'                   =>  $request->object,
            'responden_id'              =>  $user->id,
            'responden_group_main_id'   =>  $user->group->group_id,
            'responden_group_sub_id'    =>  $user->group_id
            ]);
    }
    
    public function jawabanSurveyLogSummary($jawabanSurveyLogId)
    {
        $jawabanSurveyLog   = JawabanSurveyLog::find($jawabanSurveyLogId);
        $jawabanSurvey      = JawabanSurvey::where('survey_id', $jawabanSurveyLog->survey_id)
                                ->where('responden_id', $jawabanSurveyLog->responden_id)
                                ->where('user_id', $jawabanSurveyLog->user_id)
                                ->get();
    
        $jawabanSurveyLogSummary = [];
        foreach ($jawabanSurvey as $jawaban) {
            $jawabanSurveyLogSummary[] = [
                'instrument_survey_id'  =>  $jawaban->instrument_survey_id,
                'jawaban'               =>  $jawaban->jawaban
            ];
        }
        
        $jawabanSurveyLog->update(['jawaban_summary'=>serialize($jawabanSurveyLogSummary)]);
    }
}
