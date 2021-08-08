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
    			$html = $this->renderText($item->text);
    			break;
			case 'image':
				$html = $this->renderImage($item);
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
		return view('items.youtube', [
			'link' => $text
		]);
	}

	private function renderImage(Item $item)
	{
		$mediaItems = $item->getMedia('gallery');
		$publicUrl = $mediaItems[0]->getUrl();

		return '<img src="' . $publicUrl . '">';
	}
}
