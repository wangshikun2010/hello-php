<?php
error_reporting(E_ALL);

class Captcha {
	protected $width = 100;
	protected $height = 100;

	protected $length = 4;

	protected $image = null;

	protected $chars = array();

	public function __construct($width, $height, $length) {
		$this->width = $width;
		$this->height = $height;
		$this->length = $length;

		$this->image = imagecreate($this->width, $this->height);
		$this->chars = array_merge(
			range('A', 'Z'),
			range('a', 'z'),
			range(0, 9)
		);

		$this->generate();
	}

	/**
	 * Generate captcha image
	 * @param  int $length number of chars to draw on the image
	 * @return void
	 */
	public function generate($length = null) {
		if ($length === null) {
			$length = $this->length;
		}

		// get random chars
		$chars = array();
		for ($i=0; $i < $length; $i++) {
			$chars[] = $this->chars[rand()%62];
		}

		// set background color
		$background = imagecolorallocate($this->image, 223, 223, 223);

		// draw some random line
		$lineStartX = floor($this->width / 3);
		$lineEndX = floor($this->width / 3 * 2);
		$lineStartY = floor($this->height / 3);
		$lineEndY = floor($this->height / 3 * 2);
		for ($i=0; $i < 2; $i++) {
			$lineColor = imagecolorallocate($this->image, rand(120, 240), rand(120, 240), rand(120, 240));
			imageline($this->image, rand(0, $lineStartX), rand(0, $lineStartY), rand($lineEndX,$this->width), rand($lineEndY,$this->height), $lineColor);
			imageline($this->image, rand($lineEndX,$this->width), rand($lineEndY,$this->height), rand(0, $lineStartX), rand(0, $lineStartY), $lineColor);
		}

		// draw some random dots
		$dotColor = imagecolorallocate($this->image, rand(60, 120), rand(60, 120), rand(60, 120));
		for ($i=0; $i < 200; $i++) {
			imagesetpixel($this->image, rand(0, $this->width), rand(0, $this->height), $dotColor);
		}

		// draw chars one by one
		$textColor = imagecolorallocate($this->image, rand(0, 60), rand(0, 60), rand(0, 60));
		$textMargin = $this->width / (2*$length + 1);
		$textTop = $this->height / 6;
		$textBottom = $this->height / 3;
		$fontSize = ceil($this->height / 6);
		foreach ($chars as $i => $char) {
			$marginLeft = (2 * $i + 1) * $textMargin;
			$marginRight = $marginLeft + $textMargin;
			imagestring($this->image, $fontSize, rand($marginLeft, $marginRight), rand($textTop, $textBottom), $char, $textColor);
		}
	}

	/**
	 * Save captcha image to a file
	 * @param  string $filepath
	 * @return void
	 */
	public function save($filepath) {}

	/**
	 * Output image directly to browser
	 * @return void
	 */
	public function display() {
		header('Content-type: image/png');
		imagepng($this->image);
		imagedestroy($this->image);
	}
}

$width = isset($_GET['width']) ? intval($_GET['width']) : 120;
$height = isset($_GET['height']) ? intval($_GET['height']) : 30;

$captcha = new Captcha($width, $height, 4);
$captcha->display();