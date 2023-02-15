<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function getAll(){

        $bands = $this->getBands();

        return response()->json($bands);
    }

    protected function getBands(){

        return [
            [
                'id' => 1, 'name' => 'dream teather', 'gender' => 'progressivo'
            ],

            [
                'id' => 2, 'name' => 'megadeth', 'gender' => 'trash metal'
            ],

            [
                'id' => 3, 'name' => 'metallica', 'gender' => 'heavy metal'
            ],

            [
                'id' => 4, 'name' => 'dio', 'gender' => 'heavy metal'
            ],

            [
                'id' => 5, 'name' => 'Baroes da Pisadinha', 'gender' => 'tecno forro'
            ],

        ];
    }
}
