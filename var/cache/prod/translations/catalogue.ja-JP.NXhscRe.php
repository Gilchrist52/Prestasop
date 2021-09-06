<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ja-JP', array (
));

$catalogueJa = new MessageCatalogue('ja', array (
));
$catalogue->addFallbackCatalogue($catalogueJa);

return $catalogue;
