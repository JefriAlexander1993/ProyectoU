<?php

namespace App\Exports;

use App\Models\Client;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class ClientsExport implements FromView
 {
    /**
    * @return \Illuminate\Support\Collection
    */
	

 	public function view(): View
    {
        return view('informe.clients_list', [
            'clients' => Client::all()
        ]);
    }
}
