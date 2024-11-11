<?php

namespace App\Livewire;

use App\Models\Product;
use App\Traits\Sortable;
use Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsTable extends Component
{
    use WithPagination, Sortable;

    public function deleteProduct($id): void
    {
        if (!Auth::user()->admin) {
            abort(403);
        }
        $this->delete($id);
    }

    protected function delete($productId): void
    {
        $product = Product::findOrFail($productId);
        $this->authorize('delete', $product);
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
    }

    public function render()
    {
        $products = Product::orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);
        return view('livewire.products-table', [
            'products' => $products
        ]);
    }
}
