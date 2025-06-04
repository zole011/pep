<?php
namespace Gmbit\Pep\DataProcessing;

use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\ContentBlocks\DataProcessing\ContentBlockData;

class TabContentProcessor implements DataProcessorInterface
{
    public function process(
        ContentObjectRenderer $cObj,
        array $conf,
        array $processorConf,
        array $processedData
    ): array {
        // LOG: pozvan processor
        file_put_contents(__DIR__ . '/../../../processor.log', "TabContentProcessor was called\n", FILE_APPEND);

        foreach ($processedData['data']['tabs'] ?? [] as &$tab) {
            if (isset($tab['content']) && is_iterable($tab['content'])) {
                $uids = [];
                foreach ($tab['content'] as $item) {
                    if ($item instanceof ContentBlockData) {
                        $uids[] = $item->getUid();
                    } elseif (is_int($item)) {
                        $uids[] = $item;
                    } else {
                        // LOG: neprepoznat tip
                        file_put_contents(__DIR__ . '/../../../processor.log', "Unknown item type: " . gettype($item) . "\n", FILE_APPEND);
                    }
                }
                // LOG: zabeleženi UID-ovi
                file_put_contents(__DIR__ . '/../../../processor.log', "Converted tab content: " . implode(',', $uids) . "\n", FILE_APPEND);
                $tab['content'] = $uids;
            }
        }

        return $processedData;
    }
}
