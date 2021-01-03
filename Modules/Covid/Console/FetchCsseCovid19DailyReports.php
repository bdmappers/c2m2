<?php

namespace Modules\Covid\Console;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Modules\Covid\Entities\Covidcase;

class FetchCsseCovid19DailyReports extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'covid:FetchCsseCovid19DailyReports {date?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch daily data of COVID-19 from the Center for Systems Science and Engineering (CSSE) at Johns Hopkins University Github Repo';

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
        // get Date Value form command
        $date = $this->argument('date');

        // if date not defined, fetch for today
        if ($date == "") {
            $date = date("m-d-Y");
        }

        $bangladesh_data = $this->get_bangladesh_data_by_date($date);
        // FIPS,Admin2,Province_State,Country_Region,Last_Update,Lat,Long_,Confirmed,Deaths,Recovered,Active,Combined_Key,Incident_Rate,Case_Fatality_Ratio

        print_r($bangladesh_data);

        $date_formatted = Carbon::parse($date)->format('Y-m-d');

        $update_time = trim($bangladesh_data[4]);
        $confirmed_total = trim($bangladesh_data[7]);
        $death_totals = trim($bangladesh_data[8]);
        $recovered_total = trim($bangladesh_data[9]);
        $active_total = trim($bangladesh_data[10]);
        $incident_rate_total = trim($bangladesh_data[12]);
        $case_fatality_ratio_total = trim($bangladesh_data[13]);

        $data_array = [
            'name' => $date_formatted,
            'data_date' => $date_formatted,
            'update_time' => $update_time,
            'confirmed_total' => $confirmed_total,
            'deaths_total' => $death_totals,
            'recovered_total' => $recovered_total,
            'active_total' => $active_total,
            'incident_rate_total' => $incident_rate_total,
            'case_fatality_ratio_total' => $case_fatality_ratio_total,
        ];

        print_r($data_array);

        $covidcase = Covidcase::whereDataDate($date_formatted)->first();

        if($covidcase) {
            echo "\n Previous Data Found. Id: ".$covidcase->id;

            Covidcase::whereDataDate($date_formatted)->update($data_array);

            echo " | Row Updated.";
        }
        else {
            echo "\n No Record Found. ";

            $covidcase = Covidcase::create($data_array);

            echo " | Row Created.";
        }


    }

    public function get_bangladesh_data_by_date($date) {

        $file = "https://raw.githubusercontent.com/CSSEGISandData/COVID-19/master/csse_covid_19_data/csse_covid_19_daily_reports/".$date.".csv";

        // echo "\n\n $file \n";

        // Check if file exists or not
        if (!$this->does_url_exists($file)) {
            echo "\n\n File not exist. \n\n ";
            return false;
        }

        $fileData=fopen($file,'r');

        $row_count = 1;
        $bangladesh_data = [];

        while (($line = fgetcsv($fileData)) !== FALSE) {
            if ($row_count == 1) {
                print_r($line);
            }

            if ($line[3] == "Bangladesh") {
                $bangladesh_data = $line;
                break;
            }

            $row_count++;
        }

        return $bangladesh_data;
    }

    /**
     * Check if an URL exists or not
     * @param  String $url URL
     */
    public function does_url_exists($url) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($code == 200) {
            $status = true;
        } else {
            $status = false;
        }
        curl_close($ch);
        return $status;
    }
}
