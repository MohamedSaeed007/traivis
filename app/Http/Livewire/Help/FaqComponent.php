<?php

namespace App\Http\Livewire\Help;

use App\Models\FaqGroup;
use App\Models\FaqPage;
use App\Models\FaqSection;
use Livewire\Component;

class FaqComponent extends Component
{
    public $faqGroups;
    public $search;
    public $selectedFaqPage = null;
    public $selectedFaqPageId = null;
    public $searchResult = null;
    protected $rules = [
        'search' => 'required|min:3',
    ];
    protected $queryString = [
        'selectedFaqPageId' => ['as' => 'faqId'],
    ];

    public function mount(): void
    {
        $this->faqGroups = FaqGroup::with('faqPages')->get();
        if ($this->selectedFaqPageId) {
            $this->selectedFaqPage = FaqPage::with('faqSections')->findOrFail($this->selectedFaqPageId);
        }
    }

    public function selectPage($faqPageId): void
    {
        $this->selectedFaqPageId = $faqPageId;
        $this->selectedFaqPage = FaqPage::with('faqSections')->findOrFail($faqPageId);
        $this->reset('searchResult');
    }

    public function doSearch(): void
    {
        $this->reset('searchResult');
        $this->validate();
        $this->searchResult = FaqSection::search($this->search)
            ->with('faqPage')
            ->get();
        $this->reset('selectedFaqPage');
    }

    public function render()
    {
        return view('livewire.help.faq-component');
    }

    /**
     * @param $text
     * @param $words
     *
     * @return string|string[]|null
     */
    private function highlight($text, $words)
    {
        preg_match_all('~\w+~ui', $words, $m);
        if (!$m) {
            return $text;
        }
        $re = '~(' . implode('|', $m[0]) . ')~ui';

        return preg_replace($re, '<span class="bg-yellow-200">$0</span>', $text);
    }
}
