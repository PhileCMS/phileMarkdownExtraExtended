<?php
namespace Phile\Parser;

use \egil\MarkdownExtended;

class MarkdownExtraExtended implements ParserInterface {
	// overload parse with the MarkdownExtra parser
	public function parse($data) {
		return MarkdownExtended($data);
	}
}
