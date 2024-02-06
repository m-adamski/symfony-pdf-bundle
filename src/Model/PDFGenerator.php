<?php

namespace Adamski\Symfony\PDFBundle\Model;

use TCPDF;

class PDFGenerator extends TCPDF {

    /**
     * @var callable
     */
    protected $headerFunction;

    /**
     * @var callable
     */
    protected $footerFunction;

    /**
     * Overwritten function printing header into PDF document.
     */
    public function Header(): void {
        if (!is_null($this->headerFunction) && is_callable($this->headerFunction)) {
            call_user_func($this->headerFunction, $this);
        } else {
            parent::Header();
        }
    }

    /**
     * Overwritten function printing footer into PDF document.
     */
    public function Footer(): void {
        if (!is_null($this->footerFunction) && is_callable($this->footerFunction)) {
            call_user_func($this->footerFunction, $this);
        } else {
            parent::Footer();
        }
    }

    /**
     * @return callable
     */
    public function getHeaderFunction(): callable {
        return $this->headerFunction;
    }

    /**
     * @param callable $headerFunction
     */
    public function setHeaderFunction(callable $headerFunction): void {
        $this->headerFunction = $headerFunction;
    }

    /**
     * @return callable
     */
    public function getFooterFunction(): callable {
        return $this->footerFunction;
    }

    /**
     * @param callable $footerFunction
     */
    public function setFooterFunction(callable $footerFunction): void {
        $this->footerFunction = $footerFunction;
    }
}
