<?php

use App\Models\Option;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        $options = [
            [
                'option_key' => 'karma_commission',
                'option_value' => '3',
            ],
            [
                'option_key' => 'traivis_commission_from_influencer',
                'option_value' => '25',
            ],
            [
                'option_key' => 'change_transaction_is_refundable_days',
                'option_value' => '14',
            ],
            [
                'option_key' => 'withdrawal_traivis_commission',
                'option_value' => '3',
            ],
        ];
        foreach ($options as $option) {
            Option::updateOrInsert(
                ['option_key' => $option['option_key']],
                ['option_value' => $option['option_value']],
            );
        }
    }
};
