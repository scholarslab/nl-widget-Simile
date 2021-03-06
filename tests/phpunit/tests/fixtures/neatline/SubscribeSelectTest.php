<?php

/**
 * @package     omeka
 * @subpackage  neatline-Simile
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

class FixturesTest_SubscribeSelect extends NeatlineSimile_Case_Fixture
{


    public function testOutgoingEvents()
    {

        $record = $this->_record($this->exhibit);
        $record->start_date = '2000-02-01';
        $record->save();

        $this->_writeRecordsApiFixture($this->exhibit,
            'NeatlineSubscribeSelect.json'
        );

    }


}
