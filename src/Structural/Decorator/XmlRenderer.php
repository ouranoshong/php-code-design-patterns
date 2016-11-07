<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 2:26 PM
 */

namespace O\DesignPatterns\Structural\Decorator;


class XmlRenderer extends RendererDecorator
{

    public function renderData(): string
    {
        $doc = new \DOMDocument();
        $data = $this->wrapped->renderData();
        $doc->appendChild($doc->createElement('content', $data));

        return $doc->saveXML();
    }

}
