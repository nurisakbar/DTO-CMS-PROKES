<?php
namespace App\Service;

use App\SurveyObjectSurvey;
use App\Group;
use Auth;
use App\Survey;
use App\GroupSurvey;

class CreateSurveyService
{
    public function fakultas($survey, $request)
    {
        // daftarkan fakultas yang bersangkutan
        foreach (Group::where('id', Auth::user()->group_main_id)->where('jenis', '=', 'fakultas')->get() as $group) {
            GroupSurvey::create(['group_id'=>$group->id,'survey_id'=>$survey->id]);
        }
        // daftarkan object survey
        $objectSurvey = $request->object_survey;
        if (count($objectSurvey)>0) {
            foreach ($objectSurvey as $object) {
                SurveyObjectSurvey::create(['survey_id'=>$survey->id,'object_survey_id'=>$object]);
            }
        } else {
            Survey::find($survey->id)->delete();
            GroupSurvey::where('survey_id', $survey->id)->delete();
            return redirect('survey/create')->with('message', 'Silahkan Pilih Object Survey');
        }
    }

    public function updateSurveyFakultas($id, $request)
    {
        $survey = Survey::find($id);
        $survey->update($request->all());
        $objectSurvey = $request->object_survey;
        if (count($objectSurvey)>0) {
            SurveyObjectSurvey::where('survey_id', $survey->id)->delete();
            foreach ($objectSurvey as $object) {
                SurveyObjectSurvey::create(['survey_id'=>$survey->id,'object_survey_id'=>$object]);
            }
        } else {
            return redirect('survey/create')->with('message', 'Silahkan Pilih Object Survey');
        }
    }

    public function edom($survey, $request)
    {
        if ($request->groups=='') {
            Survey::find($survey->id)->delete();
            return redirect('survey/create')->with('message', 'Silahkan Pilih Group Fakultas Atau Layanan');
        }
        
        foreach ($request->groups as $group_id) {
            $group = \App\Group::findOrFail($group_id);
            GroupSurvey::create(['group_id'=>$group_id,'survey_id'=>$survey->id]);
        }
    }
}
