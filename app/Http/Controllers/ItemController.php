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
				$html = $this->renderYoutube($item->text);
				break;
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

	private function renderYoutube($text)
	{
		$html = '<div class="embed-responsive embed-responsive-16by9">';
		$html .= '<iframe width="560" height="315" frameborder="0" class="embed-responsive-item" src="' . $text . '" allowfullscreen></iframe>';
		$html .= '</div>';
		return $html;
	}
}
