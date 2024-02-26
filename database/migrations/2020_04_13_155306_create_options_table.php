<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->string('option_key', 50)->nullable();
            $table->text('option_value')->nullable();
        });

        $options_array = [
            [
                'option_key' => 'site_name',
                'option_value' => 'TraiVis',
            ],
            [
                'option_key' => 'site_url',
                'option_value' => 'https://traivis.com',
            ],
            [
                'option_key' => 'site_title',
                'option_value' => 'TraiVis',
            ],
            [
                'option_key' => 'email_address',
                'option_value' => 'info@traivis.com',
            ],
            [
                'option_key' => 'default_timezone',
                // 'option_value' => 'Africa/Cairo'
                'option_value' => 'UTC',
            ],
            [
                'option_key' => 'date_format_custom',
                'option_value' => null,
            ],
            [
                'option_key' => 'time_format_custom',
                'option_value' => null,
            ],
            [
                'option_key' => 'currency_sign',
                //                'option_value' => 'INR',
                'option_value' => 'USD',
            ],
            [
                'option_key' => 'currency_position',
                'option_value' => 'left',
            ],
            [
                'option_key' => 'allowed_file_types',
                'option_value' => 'jpeg,png,jpg,pdf,zip,doc,docx,xls,ppt,pptx,mp4',
            ],
            [
                'option_key' => 'logo_settings',
                'option_value' => 'show_site_name',
            ],
            [
                'option_key' => 'lms_settings',
                'option_value' => 'json_encode_value_{"enable_discussion":"0"}',
            ],
            [
                'option_key' => 'default_storage',
                'option_value' => 'public',
            ],
            [
                'option_key' => 'amazon_key',
                'option_value' => null,
            ],
            [
                'option_key' => 'amazon_secret',
                'option_value' => null,
            ],
            [
                'option_key' => 'amazon_region',
                'option_value' => null,
            ],
            [
                'option_key' => 'bucket',
                'option_value' => null,
            ],
            [
                'option_key' => 'current_theme',
                'option_value' => 'traivis',
            ],
            [
                'option_key' => 'enable_instructors_earning',
                'option_value' => '1',
            ],
            [
                'option_key' => 'enable_charge_fees',
                'option_value' => '1',
            ],
            [
                'option_key' => 'admin_share',
                'option_value' => '10',
            ],
            [
                'option_key' => 'instructor_share',
                'option_value' => '90',
            ],
            [
                'option_key' => 'charge_fees_name',
                'option_value' => 'additional fee',
            ],
            [
                'option_key' => 'charge_fees_amount',
                'option_value' => '10',
            ],
            [
                'option_key' => 'charge_fees_type',
                'option_value' => 'fixed',
            ],
            [
                'option_key' => 'enable_offline_payment',
                'option_value' => '1',
            ],
            [
                'option_key' => 'stripe_test_secret_key',
                'option_value' =>
                    'sk_test_51IJG7FAg8zMsH1HfDTq0AvVfYsg6B6GL4KQdmLEkFHMHNhQeBbiTR1x1EWKqdMLvcbrDU7Jj83bSyA6hY61cLv6M006urpptK9',
            ],
            [
                'option_key' => 'stripe_test_publishable_key',
                'option_value' =>
                    'pk_test_51IJG7FAg8zMsH1HfsWgImYQABNgTcB6WAYbPTk3jrB234sdT0f4xm4VKnlGpx27HJVTFESB9Nei0YZdCvjhhgZDC00KUAUpH1u',
            ],
            [
                'option_key' => 'stripe_live_secret_key',
                'option_value' => null,
            ],
            [
                'option_key' => 'stripe_live_publishable_key',
                'option_value' => null,
            ],
            [
                'option_key' => 'paypal_receiver_email',
                'option_value' => 'nanduldas@gmail.com',
            ],
            [
                'option_key' => 'bank_gateway',
                'option_value' =>
                    'json_encode_value_{"enable_bank_transfer":"1","bank_name":"SIB","bank_swift_code":"TEST","account_number":"1234567890123456789123","branch_name":"dsgdfgdfgdfg","branch_address":"dsgfdsfgdfg","account_name":"dfgdfsg","iban":"dgdfgdfg"}',
            ],
            [
                'option_key' => 'enable_paypal',
                'option_value' => '1',
            ],
            [
                'option_key' => 'enable_paypal_sandbox',
                'option_value' => '1',
            ],
            [
                'option_key' => 'date_format',
                'option_value' => 'custom',
            ],
            [
                'option_key' => 'enable_rtl',
                'option_value' => '0',
            ],
            [
                'option_key' => 'enable_stripe',
                'option_value' => '1',
            ],
            [
                'option_key' => 'stripe_test_mode',
                'option_value' => '1',
            ],
            [
                'option_key' => 'support_email',
                'option_value' => 'nanduldas@gmail.com',
            ],
            [
                'option_key' => 'contact_us',
                'option_value' => '897898798',
            ],
            [
                'option_key' => 'time_format',
                'option_value' => 'g:i a',
            ],
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
        foreach ($options_array as $option) {
            \DB::table('options')->updateOrInsert(['option_key' => $option['option_key']], $option);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options');
    }
}
