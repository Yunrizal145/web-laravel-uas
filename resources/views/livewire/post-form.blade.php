<div>
    <h4 class="mb-4 text-2xl font-bold">Post </h4>
      <div>
          <div class="container mx-auto">
              <form method="POST" wire:submit.prevent="storePost">
                  @csrf
                  <div>
                      <label for="crypto_market">Crypto Market</label>
                      <input type="text" wire:model.lazy="crypto_market" class="w-full py-2 rounded">
                      @error('crypto_market')
                      <span class="text-red-600">{{ $message }}</span>
                      @enderror
                  </div>
                  <div>
                      <label for="asset_name">Asset Name</label>
                      <input type="text" wire:model.lazy="asset_name" class="w-full py-2 rounded">
                      @error('asset_name')
                      <span class="text-red-600">{{ $message }}</span>
                      @enderror
                  </div>
                  <div>
                      <label for="crypto_price">Crypto Price</label>
                      <input type="text" wire:model.lazy="crypto_price" class="w-full py-2 rounded">
                      @error('crypto_price')
                      <span class="text-red-600">{{ $message }}</span>
                      @enderror
                  </div>
                  <div>
                      <label for="status">Status</label>
                      <input type="text" wire:model.lazy="status" class="w-full py-2 rounded">
                      @error('status')
                      <span class="text-red-600">{{ $message }}</span>
                      @enderror
                  </div>
                  
                  <button type="submit" class="px-4 py-2 mt-4 text-white bg-blue-600 rounded">
                      Submit
                  </button>
                  <button type="submit" wire:click="update" class="px-4 py-2 text-white bg-indigo-600 rounded">
                      Update
                  </button>
              </form>
          </div>
          <div class="flex flex-col mt-8">
              <div class="py-2">
                  <div
                      class="min-w-full border-b border-gray-200 shadow">
                      <table class="min-w-full">
                          <thead>
                              <tr>
                                  <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                      Id
                                  </th>
                                  <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                      Crypto Market
                                  </th>
                                  <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                      Asset Name
                                  </th>
                                  <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                      Crypto Price
                                  </th>
                                  <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                      Status
                                  </th>
                                  <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                      Edit
                                  </th>
                                  <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                      Delete
                                  </th>
                              </tr>
                          </thead>
  
                          <tbody class="bg-white">
                              @foreach($posts as $post)
                              <tr>
                                  <td class="px-6 py-4 border-b border-gray-200">
                                      <div class="flex items-center">
                                          <div class="ml-4">
                                              <div class="text-sm text-gray-900">
                                                  {{ $post->id }}
                                              </div>
                                          </div>
                                      </div>
                                  </td>
  
                                  <td class="px-6 py-4 border-b border-gray-200">
                                      <div class="text-sm text-gray-900">
                                          {{ $post->crypto_market }}
                                      </div>
                                  </td>
                                  <td class="px-6 py-4 border-b border-gray-200">
                                      <div class="text-sm text-gray-900">
                                          {{ $post->asset_name }}
                                      </div>
                                  </td>
                                  <td class="px-6 py-4 border-b border-gray-200">
                                      <div class="text-sm text-gray-900">
                                          {{ $post->crypto_price }}
                                      </div>
                                  </td>
                                  <td class="px-6 py-4 border-b border-gray-200">
                                      <div class="text-sm text-gray-900">
                                          {{ $post->status }}
                                      </div>
                                  </td>
  
                                  <td class="px-6 py-4 border-b border-gray-200">
                                      <button wire:click="edit({{ $post->id }})" class="px-4 py-2 text-white bg-blue-600">
                                          Edit
                                      </button>
                                  </td>
  
                                  <td class="px-6 py-4 text-sm text-gray-500 border-b border-gray-200">
                                      <button wire:click="destroy({{ $post->id }})"
                                          class="px-4 py-2 text-white bg-red-600">
                                          Delete
                                      </button>
                                  </td>
  
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
                  {{ $posts->links() }}
              </div>
          </div>
      </div>
  </div>