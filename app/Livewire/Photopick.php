<?php

namespace App\Livewire;

use App\Services\ApiClient;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Native\Mobile\Attributes\OnNative;
use Native\Mobile\Events\Gallery\MediaSelected;
use Native\Mobile\Facades\Camera;
use Native\Mobile\Facades\Dialog;
use Native\Mobile\Facades\SecureStorage;

class Photopick extends Component
{
    public string $userName = '';

    public string $userEmail = '';

    public function mount(): void
    {
        $this->userName = SecureStorage::get('user_name', 'User');
        $this->userEmail = SecureStorage::get('user_email', '');
    }

    #[OnNative(MediaSelected::class)]
    public function handleMediaSelected($success, $files, $count)
    {
        foreach ($files as $file) {
            // Process each selected media item
            $this->processMedia($file);
        }
    }

    protected function processMedia($file)
    {

        // Implement your logic to handle the selected media file
        // For example, upload it to a server or save it locally
        // Alert::new()
        //     ->title('Photo Selected')
        //     ->show('Photo: '.$file);

        // Dialog::alert('Confirm Action', 'Are you sure you want to delete this item?', ['Cancel', 'Delete']);

        foreach ($file as $element) {
            // Process each selected media item
            Dialog::share(
                'Photo',
                'Selected elem: '.$element,
                'https://nativephp.com'
            );
        }

    }

    public function logout(): void
    {
        // ApiClient::logout();

        // Pick multiple images
        Camera::pickImages('images', true);

        // if ($selectedphotos['success']) {
        //     foreach ($selectedphotos['files'] as $file) {
        //         $this->processMedia($file);
        //     }
        // }

        // $this->redirect(route('home'));
    }

    #[Layout('components.layouts.app', ['title' => 'Photopick'])]
    public function render()
    {
        return view('livewire.photopick');
    }
}
