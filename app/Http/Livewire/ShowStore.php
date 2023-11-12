<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Store;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ShowStore extends Component
{
    use WithFileUploads;

    public $cover, $profile, $description, $whatsapp, $instagram, $email, $name, $store, $path_cover, $path_profile;

    public $upload_cover = 'linear-gradient(to right, #434343 0%, black 100%)';

    public $upload_profile = 'https://dummyimage.com/150x150/6c757d/dee2e6.jpg';

    public $rules = [
        'name'         => 'required',
        'description'   => 'required',
        'email'         => 'required',
    ];

    public function save(){
        $this->validate();

        if($this->store){
            $this->store->name = $this->name;
            if($this->cover){
                Storage::delete([$this->upload_cover]);
                $cover = $this->cover->store('cover/' . Auth::id());
            }
            else {
                $cover = $this->path_cover;
            }
            if($this->profile){
                Storage::delete([$this->upload_profile]);
                $profile = $this->profile->store('profile/' . Auth::id());
            }
            else {
                $profile = $this->path_profile;
            }
            $this->store->cover = $cover;
            $this->store->profile = $profile;
            $this->store->description = $this->description;
            $this->store->whatsapp = $this->whatsapp;
            $this->store->instagram = $this->instagram;
            $this->store->email = $this->email;
            if ($this->store->save()) {
                return redirect('admin/store')->with('success', 'Store update successfully!');
            }
        }
        else {
            $cover = $this->cover->store('cover/' . Auth::id());
            $profile = $this->profile->store('profile/' . Auth::id());
            $store = Store::Create([
                'name' => $this->name,
                'cover' => $cover,
                'profile' => $profile,
                'description' => $this->description,
                'whatsapp' => $this->whatsapp,
                'instagram' => $this->instagram,
                'email' => $this->email,
                'user_id' => Auth::id()
            ]);
            if ($store) {
                return redirect('admin/store')->with('success', 'Store update successfully!');
            }
        }
    }

    public function mount(){
        $store = Store::where('user_id', Auth::id())->first();
        if ($store) {
            $this->store = $store;
            $this->upload_cover = 'url(' . url(  'storage/' . $store->cover) . '); background-size: cover;';
            $this->path_cover = $store->cover;
            $this->path_profile = $store->profile;
            $this->name = $store->name;
            $this->upload_profile = url(  'storage/' . $store->profile);
            $this->description = $store->description;
            $this->whatsapp = $store->whatsapp;
            $this->instagram = $store->instagram;
            $this->email = $store->email;
        }
    }
    public function render()
    {
        return view('livewire.show-store');
    }
}
