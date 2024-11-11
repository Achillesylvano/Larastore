<?php

namespace App\Http\Controllers\Admin;

use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Models\Accessory\Property;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AccessoryFormRequest;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user()->id;
        $accessories = Accessory::where('user_id', $user)->orderBy('id')->paginate(15);

        return view('admin.accessory.index', [
            'accessories' => $accessories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accessory = new Accessory;

        return view('admin.accessory.edit-create', [
            'accessory' => $accessory,
            'properties' => Property::pluck('category', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccessoryFormRequest $request)
    {
        $user = Auth::user();
        $accessory = new Accessory;
        $accessory = $user->accessories()->create($this->handleData($accessory, $request));

        return to_route('admin.accessory.index')->with('success', 'L \' accessoire a bien été créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accessory $accessory)
    {

        return view('admin.accessory.edit-create', [
            'accessory' => $accessory,
            'properties' => Property::pluck('category', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AccessoryFormRequest $request, Accessory $accessory)
    {
        $data = $this->handleData($accessory, $request);
        $accessory->update($data);

        return to_route('admin.accessory.index')->with('success', 'L \' accessoire a bien été modifier');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accessory $accessory)
    {
        $this->authorize('delete', $accessory);
        if ($accessory->image) {
            Storage::disk('public')->delete($accessory->image);
        }
        $accessory->delete();
        return to_route('admin.accessory.index')->with('success', 'L\' accessoire a bien été supprimer');

    }

    private function handleData(Accessory $accessory, AccessoryFormRequest $request): array
    {
        $data = $request->validated();

        /**
         * @var UploadedFile|null $image
         */
        $image = $request->validated('image');
        if ($image === null || $image->getError()) {
            return $data;
        }
        if ($accessory->image) {
            Storage::disk('public')->delete($accessory->image);
        }
        $data['image'] = $image->store('accessory', 'public');
        return $data;
    }
}
