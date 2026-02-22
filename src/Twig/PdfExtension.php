<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class PdfExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('pdf_bundle_render', [$this, 'renderPdf'], ['is_safe' => ['html']])
        ];
    }

    public function renderPdf(string $pdfPath): string
    {
        // Retourne le code HTML pour afficher le PDF
        return '<iframe src="/assets/exams/'.$pdfPath.'" width="100%" height="600px"></iframe>';
    }
}
