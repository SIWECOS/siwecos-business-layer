<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class SimpleDomainOutput extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        	'domain' => $this['domain'],
			'Score' => $this['weightedMedia'],
	        'lastScan' => $this['scanFinished']
        ];
    }
}
