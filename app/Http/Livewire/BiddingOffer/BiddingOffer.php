<?php

namespace App\Http\Livewire\BiddingOffer;

use App\Models\Bidding;
use App\Models\BiddingOffer as ModelsBiddingOffer;
use App\Models\User;
use Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\Support\MediaStream;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BiddingOffer extends Component
{
    use WithFileUploads;
    use AuthorizesRequests;

    public $singleBid;
    public $biddingId;
    public $offers;
    public $offer;

    public $documents = [];

    public function mount($id)
    {
        setPermissionsTeamId(session('business_id'));
        $this->biddingId = $id;
        $this->singleBid = Bidding::with('categories', 'industries', 'language')->find($id);
        // dd($id);
    }

    // download singleFile
    public function download($id)
    {
        $mediaItem = ModelsBiddingOffer::find($id)->getFirstMedia('files');
        // dd($mediaItem);
        return response()->download($mediaItem->getPath(), $mediaItem->name);
    }
    // download as zip file from  the biddings table
    public function downloadAsZip($id)
    {

        // Let's get some media.
        $biddingOffer = ModelsBiddingOffer::find($id);
        $downloads = $biddingOffer->getMedia();
        return MediaStream::create($biddingOffer->name . '-files.zip')->addMedia($downloads);

    }

    public function rules()
    {

        // the validation rules
        $rules = [
        ];

        return $rules;
    }

    public function changeOfferStatus($status, $id)
    {
        setPermissionsTeamId(session('business_id'));
        // dd(Auth::user()->getRoleNames());
        // dd(Auth::user()->can('bidding_offer_edit'));
        if (Auth::user() && Auth::user()->can('bidding_offer_edit')) {
            $this->offer = ModelsBiddingOffer::find($id);
            $this->offer->status = $status;
            $this->offer->save();
        }
    }

    public function create()
    {

        $data = $this->validate();

        $this->offer = ModelsBiddingOffer::create($data);
        // for save the uploaded files
        foreach ($this->documents as $document) {

            $this->offer->addMedia($document->getRealPath())
                ->usingName($document->getClientOriginalName())
                ->toMediaCollection();
        }
    }

    public function render()
    {
        setPermissionsTeamId(session('business_id'));
        // dd(Route::current()->gatherMiddleware());
        $this->offers = ModelsBiddingOffer::with('bidding', 'business')->where('bidding_id', $this->biddingId)->get();

        return view('livewire..bidding-offer.bidding-offer');

    }
}
