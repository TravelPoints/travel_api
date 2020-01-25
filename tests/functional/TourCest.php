<?php
class TourCest 
{
    public function _before(FunctionalTester $I) 
    {
    }

    public function _after(FunctionalTester $I) 
    {
    }

    // >>>methods>>>
    public function tryTourCreate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Tour create');
        $I->sendPOST('/v1/tour', '{"data":{"type":"tour","attributes":{"duration":6,"deleted_at":"1997-06-23 03:56:43"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tour',
    'id' => 1,
    'attributes' => 
    array (
      'duration' => 6,
    ),
  ),
));
    }

    public function tryTourIndex(FunctionalTester $I) 
    {
        $I->amGoingTo('test Tour index');
        $I->sendGET('/v1/tour');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tour',
    'id' => 1,
    'attributes' => 
    array (
      'duration' => 6,
    ),
  ),
));
    }

    public function tryTourView(FunctionalTester $I) 
    {
        $I->amGoingTo('test Tour view');
        $I->sendGET('/v1/tour/1');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tour',
    'id' => 1,
    'attributes' => 
    array (
      'duration' => 6,
    ),
  ),
));
    }

    public function tryTourUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Tour update');
        $I->sendPATCH('/v1/tour/1', '{"data":{"type":"tour","attributes":{"duration":6,"deleted_at":"1997-06-23 03:56:43"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tour',
    'id' => 1,
    'attributes' => 
    array (
      'duration' => 6,
    ),
  ),
));
    }

    public function tryTourDelete(FunctionalTester $I) 
    {
        $I->amGoingTo('test Tour delete');
        $I->sendDELETE('/v1/tour/1');
    }

    // <<<methods<<<
}
