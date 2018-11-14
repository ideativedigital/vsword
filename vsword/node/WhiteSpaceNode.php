<?php

/**
 * Class WhiteSpaceNode
 * @author Fabien Udriot
 * @package vsword.node
 */
class WhiteSpaceNode extends Node implements INodeStyle
{
    public function getWord()
    {
        return '<w:t><w:r w:rsidR="00996E1D"><w:t xml:space="preserve"> </w:t></w:r></w:t>';
    }
}