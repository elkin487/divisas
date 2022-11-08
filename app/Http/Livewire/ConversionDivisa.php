<?php

namespace App\Http\Livewire;

use App\Http\Helpers\ApiConversion;
use Livewire\Component;

class ConversionDivisa extends Component
{

    public $amount = 5000;
    public $from   = "COP";
    public $to     = "EUR";
    public $result = 0;
    public $array;


    public function mount()
    {
        $this->array = self::getCodeDivisa();
    }

    public function render()
    {
        $this->result = self::getAmount();
        return view('livewire.conversion-divisa');
    }

    public function getAmount()
    {
        $amount = ApiConversion::conversion($this->amount, $this->from, $this->to);
        return $amount;
    }

    public function getCodeDivisa()
    {
        return ApiConversion::codDivisas();
    }
}
