<?php

$chunks = [];
$list = [PKG_NAME_LOWER];

foreach($list as $v){
	$chunk_name = $v;
	$content = getSnippetContent($sources['chunks'] . $chunk_name . '.chunk.tpl');
	
	if (!empty($content)) {
		$chunk = $modx->newObject('modChunk', [
			'name' => $chunk_name,
			'description' => $chunk_name.'_desc',
			'snippet' => $content,
		]);
		$chunks[] = $chunk;
	}
}

return $chunks;