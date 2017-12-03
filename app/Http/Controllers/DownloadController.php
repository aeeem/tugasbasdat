<?php

namespace Kepolisian\Http\Controllers;

use Illuminate\Http\Request;
use Kepolisian\User;
use Kepolisian\laporan;
use PDF;
class DownloadController extends Controller
{
    public function download($id){

    	$laporan=laporan::find($id);
    	if($laporan->user_id == Auth::id()){}
    	$user=User::find($laporan->user_id);
    	$pdf=PDF::loadView('pdf',['laporan'=>$laporan,'user'=>$user]);
    	return $pdf->download('laporan.pdf');
    }
    return abort(404);
    }
}
