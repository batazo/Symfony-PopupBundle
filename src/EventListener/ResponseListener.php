<?php

namespace Batazo\PopupBundle\EventListener;

use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Twig\Environment;

class ResponseListener {
    private $twig;
    private $enabled;
    private $text;

    public function __construct(Environment $twig, bool $enabled, string $text) {
        $this->twig = $twig;
        $this->enabled = $enabled;
        $this->text = $text;
    }

    public function onKernelResponse(ResponseEvent $event) {
        if (!$this->enabled || !$event->isMainRequest()) return;

        $response = $event->getResponse();
        $content = $response->getContent();

        if (strpos($content, '</body>') !== false) {
            $popupHtml = $this->twig->render('@popup/view.html.twig', ['text' => $this->text]);
            $content = str_replace('</body>', $popupHtml . '</body>', $content);
            $response->setContent($content);
        }
    }
}
