<?php

namespace App\Livewire;

use App\Livewire\Forms\ServiceRequestForm;
use App\Models\OurService;
use App\Models\ServiceRequest;
use App\Models\User;
use App\Notifications\UserActionNotification;
use App\Services\UploadFileService;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class StoreServiceRequest extends Component
{
    use WithFileUploads;

    protected UploadFileService $uploadFileService;

    public ServiceRequestForm $form;

    public OurService $service;

    public function mount() {
        $this->uploadFileService = new UploadFileService;
    }

    public function save() {
        $this->validate();

        $this->uploadFileService = new UploadFileService;

        ServiceRequest::create($this->form->except('image') + [
            'image' => $this->uploadFileService->store($this->form->image, 'services/requests'),
            'service_id' => $this->service->id
        ]);

        User::first()->notify(new UserActionNotification([
            'title' => '',
            'message' => '',
            'type' => ServiceRequest::class,
        ]));

        session()->flash('success', trans('message.create'));
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.store-service-request');
    }
}