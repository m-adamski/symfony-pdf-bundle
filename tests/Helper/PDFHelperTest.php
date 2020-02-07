<?php

namespace Adamski\Symfony\PDFBundleTests\Helper;

use Adamski\Symfony\PDFBundle\Helper\PDFHelper;
use Adamski\Symfony\PDFBundle\Model\PDFDocument;
use PHPUnit\Framework\TestCase;
use Twig\Environment;

class PDFHelperTest extends TestCase {

    /**
     * @var PDFHelper
     */
    protected $pdfHelper;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        $twigMock = $this->createMock(Environment::class);

        $this->pdfHelper = new PDFHelper($twigMock);
    }

    /**
     * Test of initDocument method.
     */
    public function testInitDocument(): void {
        $pdfDocument = $this->pdfHelper->initDocument();

        $this->assertEquals(PDFDocument::class, get_class($pdfDocument));
    }
}
