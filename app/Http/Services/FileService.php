<?php

namespace App\Http\Services;
use App\Models\Country;
use App\Models\Person;
use Illuminate\Support\Collection;
use League\Csv\Reader;

use Illuminate\Http\UploadedFile;

class FileService
{

    
    /**
     * parseCSVdata
     *
     * @param  mixed $csvContents
     * @return Collection
     */
    public function parseCSVdata(string $csvContents)
    {

        $csv = Reader::createFromString($csvContents);
        $csv->setHeaderOffset(0); 
        $csv->setDelimiter(";");
        $data = $csv->getRecords();
        $collectionData = collect($data)->reverse()->unique('EMŠO');
        $countries = Country::all()->pluck("id","name")->toArray();
            
        $parsedData = $collectionData->map(function ($record) use ($countries) {
            return [
                'emso' => $record['EMŠO'],
                'name' => $record['Ime osebe'],
                'age' => $record['Starost'],
                'description' => $record['Opis osebe'],
                'country_id' => $countries[$record['Država']],
            ];
        });

      $parsedData->chunk(1000)->each(function ($chunk){
            Person::upsert($chunk->toArray(), ['emso']);
        });

        return $parsedData;
    }
}