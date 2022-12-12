<?php

namespace Aesislabs\BexioConnector\RequestBody\Accounting\ManualEntries;

use Aesislabs\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ManualEntryFileBody extends AbstractBody
{
    /**
     * @var integer
     * @SerializedName("fileName")
     * @Type("integer")
     */
    protected $fileName;

    /**
     * @param int $fileName
     * @return ManualEntryFileBody
     */
    public function setFileName(int $fileName): ManualEntryFileBody
    {
        $this->fileName = $fileName;
        return $this;
    }
}
