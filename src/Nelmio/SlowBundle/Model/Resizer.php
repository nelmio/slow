<?php

namespace Nelmio\SlowBundle\Model;

use Imagine\Image\ImagineInterface;
use Imagine\Image\ImageInterface;
use Imagine\Image\Box;

class Resizer
{
    protected $file;
    protected $imagine;

    public function __construct($file, ImagineInterface $imagine)
    {
        $this->file = $file;
        $this->imagine = $imagine;
    }

    public function getData()
    {
        $size = new Box(40, 40);
        $image = $this->imagine->open($this->file)->thumbnail($size, ImageInterface::THUMBNAIL_INSET);

        return '<img src="data:image/png;base64,'.base64_encode($image->get('png')).'" />';
    }

    private function multiply($result, $n)
    {
        return $result * $n;
    }
}
