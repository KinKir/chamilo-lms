<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class MattColor extends AbstractTag
{

    protected $Id = 'matt-color';

    protected $Name = 'MattColor';

    protected $FullName = 'MIFF::Main';

    protected $GroupName = 'MIFF';

    protected $g0 = 'MIFF';

    protected $g1 = 'MIFF';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Matt Color';

}