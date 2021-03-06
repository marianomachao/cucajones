<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    //
    public function show($id)
    {
    	$id = intval($id);
    	$item = Item::find($id);

    	$html = '';
    	switch ($item->type) {
    		case 'youtube':
    		case 'spotify':
    		case 'bandcamp':
    		case 'tweet':
    			$html = $this->renderEmbed($item->text);
    			break;
    		case 'texto':
    		case 'imagen':
    			$html = $this->renderText($item->text);
    			break;
    		default:
    			# code...
    			break;
    	}

        return $html;
    }

    private function renderText($text)
    {
    	return $text;
    }

    private function renderEmbed($text)
    {
        return $text;
    }
}
