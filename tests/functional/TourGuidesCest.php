<?php
class TourGuidesCest 
{
    public function _before(FunctionalTester $I) 
    {
    }

    public function _after(FunctionalTester $I) 
    {
    }

    // >>>methods>>>
    public function tryTourGuidesCreate(FunctionalTester $I) 
    {
        $I->amGoingTo('test TourGuides create');
        $I->sendPOST('/v1/tourguides', '{"data":{"type":"tourguides","attributes":{"title":"little.uriah","description":"hconn","audio":"tre.anderson","tour_id":3,"language":"hkub","deleted_at":"1988-08-20 04:19:30"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tourguides',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'little.uriah',
      'description' => 'hconn',
      'audio' => 'tre.anderson',
      'tour_id' => 3,
      'language' => 'hkub',
    ),
  ),
));
    }

    public function tryTourGuidesIndex(FunctionalTester $I) 
    {
        $I->amGoingTo('test TourGuides index');
        $I->sendGET('/v1/tourguides');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tourguides',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'little.uriah',
      'description' => 'hconn',
      'audio' => 'tre.anderson',
      'tour_id' => 3,
      'language' => 'hkub',
    ),
  ),
));
    }

    public function tryTourGuidesView(FunctionalTester $I) 
    {
        $I->amGoingTo('test TourGuides view');
        $I->sendGET('/v1/tourguides/1');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tourguides',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'little.uriah',
      'description' => 'hconn',
      'audio' => 'tre.anderson',
      'tour_id' => 3,
      'language' => 'hkub',
    ),
  ),
));
    }

    public function tryTourGuidesUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test TourGuides update');
        $I->sendPATCH('/v1/tourguides/1', '{"data":{"type":"tourguides","attributes":{"title":"little.uriah","description":"hconn","audio":"tre.anderson","tour_id":3,"language":"hkub","deleted_at":"1988-08-20 04:19:30"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tourguides',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'little.uriah',
      'description' => 'hconn',
      'audio' => 'tre.anderson',
      'tour_id' => 3,
      'language' => 'hkub',
    ),
  ),
));
    }

    public function tryTourGuidesDelete(FunctionalTester $I) 
    {
        $I->amGoingTo('test TourGuides delete');
        $I->sendDELETE('/v1/tourguides/1');
    }

    // <<<methods<<<
}
