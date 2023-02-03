<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostForm extends Component
{

    use WithPagination; 

    public $crypto_market;
    public $asset_name;
    public $crypto_price;
    public $status;
    public $post_id;

    protected $rules = [
        'crypto_market' => 'required',
        'asset_name' => 'required',
        'crypto_price' => 'required',
        'status' => 'required',
    ];

    public function storePost()
    {
        $this->validate();
        $post = Post::create([
            'crypto_market' => $this->crypto_market,
            'asset_name' => $this->asset_name,
            'crypto_price' => $this->crypto_price,
            'status' => $this->status,
        ]);
        $this->reset();
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $this->post_id = $post->id;
        $this->crypto_market = $post->crypto_market;
        $this->asset_name = $post->asset_name;
        $this->crypto_price = $post->crypto_price;
        $this->status = $post->status;
    }

    public function update()
    {
        $post = Post::updateOrCreate(
            [
                'id'   => $this->post_id,
            ],
            [
                'crypto_market' => $this->crypto_market,
                'asset_name' => $this->asset_name,
                'crypto_price' => $this->crypto_price,
                'status' => $this->status,

            ],

        );

        $this->reset();
    }

    public function destroy($id)
    {
        Post::destroy($id);
    }



    public function render()
    {
        return view('livewire.post-form', ['posts' => Post::latest()->paginate(10)]);
    }
}
