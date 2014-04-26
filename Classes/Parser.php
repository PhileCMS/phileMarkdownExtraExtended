<?php
namespace Phile\Plugin\Phile\MarkdownExtraExtended;

use \egil\MarkdownExtended;
use Phile\ServiceLocator\ParserInterface;

class Parser implements ParserInterface {
	// overload parse with the MarkdownExtra parser
	public function parse($data) {
		return MarkdownExtended($data);
	}
}
