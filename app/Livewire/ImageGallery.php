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
    public int $perPage = 12;
    public bool $loaded = false;
    public bool $hasMoreImages = true;
    public bool $isLoading = false;
    public int $totalImages = 0;

    public function mount($model, $collectionName = 'works')
    {
        $this->model = $model;
        $this->collectionName = $collectionName;
        $this->totalImages = $this->model->getMedia($this->collectionName)->count();
        $this->hasMoreImages = $this->totalImages > $this->perPage;
    }

    public function loadMore()
    {
        if (!$this->hasMoreImages || $this->isLoading) {
            return;
        }

        $this->isLoading = true;
        $this->perPage += 12;
        $this->hasMoreImages = $this->totalImages > $this->perPage;
        $this->isLoading = false;
    }

    public function render()
    {
        $images = $this->model->getMedia($this->collectionName)
            ->take($this->perPage);

        return view('livewire.image-gallery', [
            'images' => $images,
            'totalImages' => $this->totalImages
        ]);
    }
} 