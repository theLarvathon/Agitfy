<?php

namespace App\Support;

use DOMDocument;
use DOMXPath;

class TocExtractor
{
    /**
     * Ambil semua <h2 id="..."> dari HTML rangkuman untuk dipakai
     * sebagai Daftar Isi. Admin cukup menulis <h2 id="konsep-dasar">
     * di kontennya — tidak perlu tulis TOC manual terpisah, dan TOC
     * selalu sinkron dengan isi karena sumbernya sama.
     *
     * @return array<int, array{id: string, text: string}>
     */
    public static function fromHtml(string $html): array
    {
        if (trim($html) === '') {
            return [];
        }

        $dom = new DOMDocument();
        libxml_use_internal_errors(true); // biar HTML "kotor" tidak melempar warning
        $dom->loadHTML('<?xml encoding="utf-8" ?>' . $html);
        libxml_clear_errors();

        $xpath = new DOMXPath($dom);
        $headings = [];

        foreach ($xpath->query('//h2') as $node) {
            if (!$node instanceof \DOMElement) {
                continue;
            }

            $headings[] = [
                'id'   => $node->getAttribute('id') ?: null,
                'text' => trim($node->textContent),
            ];
        }

        return $headings;
    }
}
