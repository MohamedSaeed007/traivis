<?php

namespace App\Http\Livewire\Biddings;

use App\Models\Bidding;
use App\Models\Business;
use App\Models\Category;
use App\Models\Industry;
use App\Models\Language;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\Support\MediaStream;
use ZipStream\Option\Archive as ArchiveOptions;

class ShowBiddings extends Component
{
    use WithFileUploads;

    public $biddings;
    public $businesses;
    public $allBusinesses;

    public $categoriesList;
    public $industriesList;
    public $languagesList;
    public $singleBid;
    public $formActionMethod; //  create || update

    // bidding data
    // form data
    public $name;
    public $categories = [];
    public $industries = [];
    public $language;
    public $bidding_start_date;
    public $bidding_end_date;
    public $bidFile;
    public $privacy;
    public $message;
    public $documents = [];
    public $newDocuments = [];
    public $theNewest = [];

    // filtration variables
    public $categoriesFilter = [];
    public $industriesFilter = [];
    public $languageFilter;
    public $nameFilter;
    public $selectedBusinesses = [];
    public $theSelectedBusinessesData;

    public $showForm = false;

    public function mount()
    {
        $this->formActionMethod = 'create';
        // dd(session('business_id'));
        $this->biddings = Business::find(session('business_id'))->biddings()->with('categories', 'industries', 'language')->get();
        // dd($this->biddings);
        $this->allBusinesses = Business::with('categories', 'industries')->get();
        $this->categoriesList = Category::where('status', 1)->get(['id', 'category_name']);
        $this->industriesList = Industry::where('status', 1)->get(['id', 'en_name', 'ar_name']);
        $this->languagesList = Language::where('active', 1)->get(['id', 'code', 'display_name']);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatedNewDocuments()
    {
        foreach ($this->newDocuments as $new) {
            array_push($this->documents, $new);
        }
        // dd($this->documents);
    }

    public function rules()
    {
        $rules = [
            'name' => 'required|string',
            'privacy' => 'required|string',
            'message' => 'required|string',
            'categories' => 'required|array',
            'industries' => 'required|array',
            'language' => 'required|string',
            'bidding_start_date' => 'required|date',
            'bidding_end_date' => 'required|date|after:bidding_start_date',
            'documents' => 'required|array',
            'documents.*' => 'mimes:doc,docx,pdf,xls,xlsx',
        ];

        if ($this->formActionMethod == 'update') {
            $rules['documents'] = 'nullable';
            $rules['documents.*'] = '';
        }
        return $rules;
    }

    // download singleFile
    public function download($id)
    {
        $mediaItem = Bidding::find($id)->getFirstMedia();

        return response()->download($mediaItem->getPath(), $mediaItem->name);
    }
    // download as zip file from  the biddings table
    public function downloadAsZip($id)
    {
        // Let's get some media.
        $biddingModel = Bidding::find($id);
        $downloads = $biddingModel->getMedia();
        return MediaStream::create($biddingModel->name . '-files.zip')
            ->useZipOptions(function (ArchiveOptions $zipOptions) {
                $zipOptions->setZeroHeader(true);
            })
            ->addMedia($downloads);
        // return MediaStream::create($biddingModel->name . '-files.zip')->addMedia($downloads);
    }

    public function removeFileFromUploadedFile($id, $newOrNot)
    {
        // dd($id,$newOrNot);
        if ($newOrNot == 2) {
            unset($this->newDocuments[$id]);
        } else {
            unset($this->documents[$id]);
        }
    }

    public function removeMediaLibraryFile($mediaId)
    {

      foreach($this->documents as $key =>$document){
         if($document->id == $mediaId){
            $this->documents[$key]->delete();
            unset($this->documents[$key]);
         }
      }
       
    }

    public function edit($biddingId)
    {



        $this->formActionMethod = 'update';

        $this->singleBid = Bidding::with('categories', 'industries', 'language')->where('id', $biddingId)->first();
        // dd($this->singleBid->name);
        $this->name = $this->singleBid->name;
        $this->privacy = $this->singleBid->privacy;

        $this->categories = $this->singleBid->categories->pluck('id')->toArray();

        // dd($this->singleBid);
        $this->industries = $this->singleBid->industries->pluck('id')->toArray();
        $this->emit('markAsSelected', [$this->categories, $this->industries]);

        // get document from media
        $this->documents = $this->singleBid->getMedia()->toArray();
       
        // dd($this->documents);
        $this->message = $this->singleBid->message;
        $this->language = $this->singleBid->language->code;
        // dd($this->language);
        $this->bidding_start_date = $this->singleBid->bidding_start_date;
        $this->bidding_end_date = $this->singleBid->bidding_end_date;
        if($this->singleBid->privacy == 'specific'){
             $this->selectedBusinesses = $this->singleBid->invitations->pluck('id');
        }
        $this->showForm = true;
        // $this->dispatchBrowserEvent('showEditForm', ['bidding' => $biddingId]);

    }

    public function update()
    {

        $data = $this->validate();
      
        if ($this->newDocuments) {
            // dd($this->documents);
            foreach ($this->newDocuments as $document) {
             
                $this->singleBid->addMedia($document->getRealPath())
                    ->usingName($document->getClientOriginalName())
                    ->toMediaCollection();
            }

           
            //    dd($this->documents);
           

        }

        $data['language_code']= $data['language'];
       
        $this->singleBid->update($data);

        // $this->singleBid->language()->save($this->language);
        $this->singleBid->categories()->sync($this->categories);
        $this->singleBid->industries()->sync($this->industries);
        if($data['privacy'] == 'specific'){
            $this->singleBid->invitations()->sync($this->selectedBusinesses);
        }
        $this->showForm = false;
    }

    public function create()
    {
        // dd($this->documents);
        $data = $this->validate();
        //    dd($this->documents->getClientOriginalName());
        $data['status'] = 1;

        
        $data['language_code'] = $data['language'];
        $data['business_id'] = 3;

        $this->singleBid = Bidding::create($data);
      
       
        foreach ($this->documents as $document) {
            $this->singleBid->addMedia($document->getRealPath())
                ->usingName($document->getClientOriginalName())
                ->toMediaCollection();
        }

        // $this->singleBid->language()->associate($this->language);
        $this->singleBid->categories()->attach($data['categories']);
        $this->singleBid->industries()->attach($data['industries']);

        if($data['privacy'] == 'specific'){
            $this->singleBid->invitations()->attach($this->selectedBusinesses);
        }

        $this->resetForm();
        $this->showForm = false;

    }


    public function addTenderButton()
    {
        $this->formActionMethod = 'create';
        $this->resetForm();
    }

    // function to reset the data in the form
    public function resetForm()
    {
        $this->emit('refreshMultiSelect');
        $this->reset(['name','selectedBusinesses', 'categories', 'industries', 'language', 'message', 'bidding_start_date', 'bidding_end_date', 'privacy', 'documents']);
    }

    public function render()
    {
       
        setPermissionsTeamId(session('business_id'));
        $this->biddings = Bidding::with('categories', 'industries', 'language','biddingOffers')->where('status',1)->get();
        // dd($this->biddings);
        $this->businesses= Business::where('business_type','institute')->with('categories','industries');
        if($this->categoriesFilter){
           $catFilter = $this->categoriesFilter;
           $this->businesses->
           whereHas('categories', function($q) use($catFilter)  {$q->whereIn('id',$catFilter);
        });
        
        }

        if($this->industriesFilter){
          $indFilter=$this->industriesFilter;
          $this->businesses->whereHas('industries', function($q) use($indFilter) {$q->whereIn('id',$indFilter);
            });
        }

        if($this->nameFilter){
            $this->businesses->where('business_name', 'LIKE', "%{$this->nameFilter}%") ;
        }

       
        
        // foreach ($this->documents as $document) {
        //     dd($document->getClientOriginalName());
        //     # code...
        // }
        

       $this->businesses= $this->businesses->get();
// dd($this->businesses);
       if($this->selectedBusinesses){
        
        $this->theSelectedBusinessesData = $this->businesses->whereIn('id',$this->selectedBusinesses);
        // dd($this->theSelectedBusinessesData);
    }

    // dd($this->theSelectedBusinessesData);
    // dd($this->selectedBusinesses);
        // dd($biddings->toArray());
        return view('livewire.biddings.show-biddings');

    }
}
