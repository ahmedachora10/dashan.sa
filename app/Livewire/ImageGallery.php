<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ImageGallery extends Component
{
    use WithPagination;

    public $model;
    public $collectionName;
    public $perPage = 12;
    public $loaded = false;

    public function mount($model, $collectionName = 'works')
    {
        $this->model = $model;
        $this->collectionName = $collectionName;
    }

    public function loadMore()
    {
        $this->perPage += 12;
    }

    public function render()
    {
        $images = $this->model->getMedia($this->collectionName)
            ->take($this->perPage);

        return view('livewire.image-gallery', [
            'images' => $images
        ]);
    }
} 