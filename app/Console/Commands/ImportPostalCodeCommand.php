<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PostalCode;
use SplFileObject;

class ImportPostalCodeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:postal-code';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import postal-code';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        PostalCode::truncate();

        $csv_path = storage_path('app/csv/KEN_ALL.csv');
        $converted_csv_path = storage_path('app/csv/postal_code.csv');

        file_put_contents(
            $converted_csv_path,
            mb_convert_encoding(
                file_get_contents($csv_path),
                'UTF-8',
                'SJIS-win'
            )
        );

        $file = new SplFileObject($converted_csv_path);
        $file->setFlags(SplFileObject::READ_CSV);

        foreach($file as $row){
            if(!is_null($row[0]))
            {
                PostalCode::create([
                    'postcode' => intval(substr($row[2], 0, 7)),
                    'prefecture' => $row[6],
                    'city' => $row[7],
                    'local' => $row[8]
                ]);
            }
        }
    }
}
