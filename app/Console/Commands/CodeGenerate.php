<?php

namespace App\Console\Commands;

use App\Models\Code;
use Illuminate\Console\Command;
use Symfony\Component\Console\Exception\InvalidOptionException;

class CodeGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'code:generate {--count=1000} {--send_to=} {--status=private : Only \'private\' or \'public\' is allowed}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate coupon codes';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    function generateRandomString($prefix = 'TRSV-', $length = 20)
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return sprintf('%s%s', $prefix, $randomString);
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $count = $this->option('count');
        $current_timestamp = now();
        $countGenerated = 0;

        $allowed_statuses = ['private', 'public'];

        $code_status = $this->option('status');
        if (!in_array($code_status, $allowed_statuses)) {
            throw new InvalidOptionException(__('Status allowed is '.collect($allowed_statuses)->join(', ', ' or ')));
        }

        do {
            do {
                $codeGenerated = $this->generateRandomString();
                $code = Code::where('coupon', $codeGenerated)->first();
            } while (!is_null($code));

            Code::create([
                'coupon'          => $codeGenerated,
                'batch_timestamp' => $current_timestamp,
                'status'          => $code_status
            ]);
            $countGenerated++;
            $this->info("$countGenerated. $codeGenerated: generated.");
        } while ($countGenerated < $count);

        if ($this->option('send_to')) {
//            dd($current_timestamp->format('Y-m-d H:i:s'));
//            dd($coupons);
            $coupons = Code::where(
                'batch_timestamp', $current_timestamp)
                ->get(['coupon', 'batch_timestamp']);
            $this->warn('Total coupons in this batch are: '.$coupons->count());
            //TODO: send generated batch list over email as excel attachment
        }

        return 0;
    }
}
