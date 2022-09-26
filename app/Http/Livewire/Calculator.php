<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Calculator extends Component
{
    public $math = '';
    public $result = 0;

    protected $messages = [
        'required' => 'Por favor, realize uma equação válida'
    ];

    public function addMath($number){
        if($this->math != ''){
            $this->math .= $number;
        }else{
            $this->math = $number;
        }
    } 

    public function operation($operation){

        if($operation === "="){
            $this->validate([
                'math' => 'required'
            ]);

            if($this->math != ''){
                $temp = str_replace("x", "*", $this->math);
                $this->result = eval("return " . $temp . ";");
                $this->math = "";
            }else{
                $this->result = 0;
            }
        }else if($this->math !== ''){
            $this->math .= $operation;
        }
    }

    public function clear(){
        $this->math = "";
        $this->result = 0;
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
