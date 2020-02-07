<?php

namespace Adamski\Symfony\PDFBundle\Helper;

use Adamski\Symfony\PDFBundle\Model\PDFDocument;
use Twig\Environment;

class PDFHelper {

    /**
     * @var Environment
     */
    protected $twigEnvironment;

    /**
     * PDFHelper constructor.
     *
     * @param Environment $twigEnvironment
     */
    public function __construct(Environment $twigEnvironment) {
        $this->twigEnvironment = $twigEnvironment;
    }

    /**
     * Create new PDF Document.
     *
     * @param string $orientation
     * @param string $unit
     * @param string $format
     * @param bool   $unicode
     * @param string $encoding
     * @param int    $fontSize
     * @return PDFDocument
     */
    public function initDocument(string $orientation = "P", string $unit = "mm", string $format = "A4", bool $unicode = true, string $encoding = "UTF-8", int $fontSize = 10) {
        return new PDFDocument($this->twigEnvironment, $orientation, $unit, $format, $unicode, $encoding, $fontSize);
    }
}
