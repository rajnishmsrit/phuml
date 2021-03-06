<?php
/**
 * PHP version 7.1
 *
 * This source file is subject to the license that is bundled with this package in the file LICENSE.
 */

namespace PhUml\Code\Attributes;

trait WithConstants
{
    /** @var Constant[] */
    protected $constants;

    /** @return Constant[] */
    public function constants(): array
    {
        return $this->constants;
    }
}
