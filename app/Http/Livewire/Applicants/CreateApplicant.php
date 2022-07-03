<?php

namespace App\Http\Livewire\Applicants;

use App\Http\Livewire\DataTable\WithSorting;
use App\Models\Applicant;
use App\Models\ApplicantsInfo;
use App\Models\ApplicantsRequirments;
use App\Models\FamilyComposition;
use App\Models\HousingProject;
use App\Models\HousingUnit;
use App\Models\Requirement;
use App\Models\Spouse;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class CreateApplicant extends Component
{
    use WithPagination, WithSorting;
    public $counter = 1;

    public $applicant_info = [
        'first_name' => '',
        'middle_name' => '',
        'last_name' => '',
        'suffix' => '',
        'brgy_origin' => '',
        'birth_date' => '',
        'place_of_birth' => '',
        'citizenship' => '',
        'civil_status' => '',
        'contact' => '',
        'office' => '',
        'tin_no' => '',
        'govt_id' => '',
        'income_per_month' => '',
    ];

    public $spouse_info = [
        'spouse_first_name' => '',
        'spouse_middle_name' => '',
        'spouse_last_name' => '',
        'spouse_birth_date' => '',
        'spouse_place_of_birth' => '',
    ];

    public $housing_info = [
        'housing_project_id' => '',
        'block' => '',
        'lot' => '',
        'phase' => '',
    ];

    public $familyCompositions = [];
    public $selectedRequirements = [];

    public $first_name;
    public $middle_name;
    public $last_name;
    public $housing_projects;
    public $blocks = [];
    public $lots = [];


    public $housingProjectHandler;
    public $requirementsHandler;

    private $validationRules = [
        1 => [
            'first_name' => ['nullable'],
        ],

        2 => [
            // 'applicant_info.housing_project_id' => ['bail', 'required', 'max:120'],
            'applicant_info.first_name' => ['bail', 'required', 'max:120'],
            'applicant_info.middle_name' => ['bail', 'nullable', 'max:120'],
            'applicant_info.last_name' => ['bail', 'required', 'max:120'],
            'applicant_info.suffix' => ['bail', 'nullable', 'max:120'],
            'applicant_info.brgy_origin' => ['bail', 'required'],
            'applicant_info.birth_date' => ['bail', 'required'],
            'applicant_info.place_of_birth' => ['bail', 'required'],
            'applicant_info.citizenship' => ['bail', 'required'],
            'applicant_info.civil_status' => ['bail', 'required'],
            'applicant_info.contact' => ['bail', 'nullable'],
            'applicant_info.office' => ['bail', 'required'],
            'applicant_info.tin_no' => ['bail', 'nullable', 'max:120'],
            'applicant_info.govt_id' => ['bail', 'nullable', 'max:120'],
            'applicant_info.income_per_month' => ['bail', 'required'],

        ],

        3 => [
            'spouse_info.spouse_first_name' => ['bail', 'required', 'max:120'],
            'spouse_info.spouse_middle_name' => ['bail', 'nullable', 'max:120'],
            'spouse_info.spouse_last_name' => ['bail', 'required', 'max:120'],
            'spouse_info.spouse_birth_date' => ['bail', 'required'],
            'spouse_info.spouse_place_of_birth' => ['bail', 'required'],

            // 'familyCompositions.*.first_name' => ['bail', 'required', 'max:120']

        ],

        4 => [
            'housing_info.housing_project_id' => ['bail', 'required', 'max:120'],
            'housing_info.block' => ['bail', 'required', 'max:120'],
            'housing_info.lot' => ['bail', 'required', 'max:120'],
            'housing_info.phase' => ['bail', 'nullable'],

        ],

    ];




    public function mount()
    {
        $this->familyCompositions[] = [];
        $this->housing_projects = HousingProject::get(['id', 'project']);
    }

    public function render()
    {

        $requirements = Requirement::all();

        $applicants = Applicant::query()
            ->with('info')
            ->when($this->first_name, function ($query, $first_name) {
                $query->whereRelation('info', 'first_name', 'like',   '%' . $first_name . '%');
            })
            ->when($this->middle_name, function ($query, $middle_name) {
                $query->whereRelation('info', 'middle_name', 'like', '%' . $middle_name . '%');
            })
            ->when($this->last_name, function ($query, $last_name) {
                $query->whereRelation('info', 'last_name', 'like',   '%' . $last_name . '%');
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(2);


        $spouses = Applicant::query()
            ->with('spouse', 'info')
            ->when($this->first_name, function ($query, $first_name) {
                $query->whereRelation('spouse', 'spouse_first_name', 'like',   '%' . $first_name . '%');
            })
            ->when($this->middle_name, function ($query, $middle_name) {
                $query->whereRelation('spouse', 'spouse_middle_name', 'like', '%' . $middle_name . '%');
            })
            ->when($this->last_name, function ($query, $last_name) {
                $query->whereRelation('spouse', 'spouse_last_name', 'like',   '%' . $last_name . '%');
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(2);


        $familyMember = FamilyComposition::query()
            ->with('applicantInfo')
            ->whereLike('first_name', $this->first_name)
            ->whereLike('middle_name', $this->middle_name)
            ->whereLike('last_name', $this->last_name)
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(2);

        return view('livewire.applicants.create-applicant', compact('applicants', 'spouses', 'familyMember', 'requirements'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function updatedSelectedRequirements($value)
    {
        if (!is_null($value)) {
            $this->requirementsHandler = Requirement::whereIn('id', $this->selectedRequirements)
                ->get();
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function updatedHousingInfoHousingProjectId($value)
    {
        if (!is_null($value)) {

            $this->blocks = HousingUnit::where('housing_project_id', $value)->get()->unique('block_no');
            $this->housingProjectHandler = HousingProject::find($value);
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function updatedHousingInfoBlock($value)
    {
        if (!is_null($value)) {
            $this->lots = HousingUnit::where('block_no', $value)
                ->where('housing_project_id', $this->housing_info['housing_project_id'])
                ->get();
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addItem()
    {
        $this->familyCompositions[] = [];
    }

    public function next()
    {
        $this->validate($this->validationRules[$this->counter]);

        $this->counter++;
    }
    public function previous()
    {
        $this->counter--;
    }



    public function saveApplicant()
    {
        $application_info = $this->validate($this->validationRules[2]);
        $spouse_info = $this->validate($this->validationRules[3]);

        $applicant_info = ApplicantsInfo::create($application_info['applicant_info']);
        $spouse = Spouse::create($spouse_info['spouse_info']);

        $applicant =  Applicant::create([
            'applicant_info_id' => $applicant_info->id,
            'spouse_id' => $spouse->id,
            'housing_project_id' => 104,
        ]);

        foreach ($this->familyCompositions as $family) {
            FamilyComposition::create([
                'applicant_id' => $applicant->id,
                'first_name' => $family['first_name'],
                'middle_name' => $family['middle_name'],
                'last_name' => $family['last_name'],
                'relation' => $family['relation'],
                'civil_status' => $family['civil_status'],
                'age' => $family['age'],
                'source_of_income' => $family['source_of_income'],
            ]);
        }

        foreach ($this->selectedRequirements as $requirement) {
            ApplicantsRequirments::create([
                'applicant_id' => $applicant->id,
                'requirement_id' => $requirement,
            ]);
        }

        $this->emit('showToastNotification', ['type' => 'success', 'message' => 'Housing Unit created successfully!', 'title' => 'Success']);
        return redirect()->route('applicants.index');
    }
}
