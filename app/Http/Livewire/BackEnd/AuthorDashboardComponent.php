<?php

namespace App\Http\Livewire\BackEnd;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AuthorDashboardComponent extends Component
{  public $pieChart;
    public function mount(){
        $this->pieChart = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
        ->whereYear('created_at', date('Y'))
        ->groupBy('month_name')
        ->orderBy('count')
        ->get();
    }
    public function render()
    {
        $totalUser = User::where('utype','STD')->count();
        return view('livewire.back-end.author-dashboard-component',['totalUser'=>$totalUser])->layout('layouts.dashboard');
    }
}
