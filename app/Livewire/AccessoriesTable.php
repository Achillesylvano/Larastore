<?php

namespace App\Livewire;

use App\Models\Accessory;
use App\Traits\Sortable;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class AccessoriesTable extends Component
{
    use WithPagination, Sortable;

    public function deleteAccessory($id): void
    {
        if (!Auth::user()->admin) {
            abort(403);
        }
        $this->delete($id);
    }

    protected function delete($accessoryId): void
    {
        $accessory = Accessory::findOrFail($accessoryId);
        $this->authorize('delete', $accessory);
        if ($accessory->image) {
            Storage::disk('public')->delete($accessory->image);
        }
        $accessory->delete();
    }

    public function render()
    {
        $accessories = Accessory::orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);
        return view('livewire.accessories-table', [
            'accessories' => $accessories
        ]);
    }
}
