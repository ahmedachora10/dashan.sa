<?php

namespace App\Livewire;

use App\Livewire\Forms\JobRequestForm;
use App\Models\JobCity;
use App\Models\JobPost;
use App\Models\JobRequest;
use App\Models\User;
use App\Notifications\UserActionNotification;
use App\Services\UploadFileService;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use function Laravel\Prompts\form;

class StoreJobRequest extends Component
{
    use WithFileUploads;

    protected ?UploadFileService $uploadFileService;

    public JobRequestForm $form;

    public $job = '';

    #[Validate([
        'attachments.*' => 'file',
    ])]
    public $attachments = [];

    public function mount() {
        $this->uploadFileService = new UploadFileService;
        
    }

    public function save() {
        $this->validate();
        $this->uploadFileService = new UploadFileService;
        $this->form->job = $this->job->id;
        
        
       
            $jobRequest = JobRequest::create($this->form->except('cv') + ['cv' => $this->uploadFileService->store($this->form->cv, 'jobs/cv')]);
            
            if(count($this->attachments) > 0) {
                foreach ($this->attachments as $attachment) {
                    $jobRequest->attachments()->create(['file' => $this->uploadFileService->store($attachment, 'jobs/attachments')]);
                }
            }

            User::first()->notify(new UserActionNotification([
                'title' => trans('new job request'),
                'message' =>  '"'.$jobRequest?->jobPost?->title.'"',
                'type' => JobRequest::class,
            ]));

            session()->flash('success', trans('message.create'));
            $this->form->reset();
            $this->reset('attachments');
        

        $this->dispatch('close-modal', target:'#jobsForm');
    }

    public function render()
    {
        return view('livewire.store-job-request');
    }
}