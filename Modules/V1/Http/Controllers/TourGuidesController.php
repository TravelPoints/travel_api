<?php
namespace Modules\V1\Http\Controllers;

class TourGuidesController extends DefaultController 
{
    // >>>props>>>
    // <<<props<<<
    // >>>methods>>>
    /**
    * @OA\Get(
    *     path="/v1/tour_guides",
    *     summary="Get TourGuidess ",
    *     tags={"TourGuidesController"},
    *     @OA\Parameter(
    *         in="query",
    *         name="include",
    *         required=false,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Parameter(
    *         in="query",
    *         name="page",
    *         required=false,
    *         @OA\Schema(
    *             type="integer",
    *         ),
    *     ),
    *     @OA\Parameter(
    *         in="query",
    *         name="limit",
    *         required=false,
    *         @OA\Schema(
    *             type="integer",
    *         ),
    *     ),
    *     @OA\Parameter(
    *         in="query",
    *         name="sort",
    *         required=false,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Parameter(
    *         in="query",
    *         name="data",
    *         required=false,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Parameter(
    *         in="query",
    *         name="filter",
    *         required=false,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Parameter(
    *         in="query",
    *         name="order_by",
    *         required=false,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Response(
    *         response="200",
    *         description="successful operation",
    *         @OA\MediaType(
    *             mediaType="application/vnd.api+json"
    *         ),
    *     ),
    * )
    */

    /**
    * @OA\Get(
    *     path="/v1/tour_guides/{id}",
    *     summary="Get TourGuides",
    *     tags={"TourGuidesController"},
    *     @OA\Parameter(
    *         in="query",
    *         name="include",
    *         required=false,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Parameter(
    *         in="query",
    *         name="data",
    *         required=false,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Response(
    *         response="200",
    *         description="successful operation",
    *         @OA\MediaType(
    *             mediaType="application/vnd.api+json"
    *         ),
    *     ),
    * )
    */

    /**
    * @OA\Post(
    *     path="/v1/tour_guides",
    *     summary="Create TourGuides",
    *     tags={"TourGuidesController"},
    *     @OA\Response(
    *         response="201",
    *         description="successful operation",
    *         @OA\MediaType(
    *             mediaType="application/vnd.api+json"
    *         ),
    *     ),
    * )
    */

    /**
    * @OA\Patch(
    *     path="/v1/tour_guides/{id}",
    *     summary="Update TourGuides",
    *     tags={"TourGuidesController"},
    *     @OA\Response(
    *         response="200",
    *         description="successful operation",
    *         @OA\MediaType(
    *             mediaType="application/vnd.api+json"
    *         ),
    *     ),
    * )
    */

    /**
    * @OA\Delete(
    *     path="/v1/tour_guides/{id}",
    *     summary="Delete TourGuides",
    *     tags={"TourGuidesController"},
    *     @OA\Response(
    *         response="204",
    *         description="successful operation",
    *         @OA\MediaType(
    *             mediaType="application/vnd.api+json"
    *         ),
    *     ),
    * )
    */

    /**
    * @OA\Get(
    *     path="/v1/tour_guides/{id}/{related}",
    *     summary="Get TourGuides related objects",
    *     tags={"TourGuidesController"},
    *     @OA\Parameter(
    *         in="query",
    *         name="data",
    *         required=false,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Parameter(
    *         in="path",
    *         name="id",
    *         required=true,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Parameter(
    *         in="path",
    *         name="related",
    *         required=true,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Response(
    *         response="200",
    *         description="successful operation",
    *         @OA\MediaType(
    *             mediaType="application/vnd.api+json"
    *         ),
    *     ),
    * )
    */

    /**
    * @OA\Get(
    *     path="/v1/tour_guides/{id}/relationships/{relations}",
    *     summary="Get TourGuides relations objects",
    *     tags={"TourGuidesController"},
    *     @OA\Parameter(
    *         in="query",
    *         name="data",
    *         required=false,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Parameter(
    *         in="path",
    *         name="id",
    *         required=true,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Parameter(
    *         in="path",
    *         name="relations",
    *         required=true,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Response(
    *         response="200",
    *         description="successful operation",
    *         @OA\MediaType(
    *             mediaType="application/vnd.api+json"
    *         ),
    *     ),
    * )
    */

    /**
    * @OA\Post(
    *     path="/v1/tour_guides/{id}/relationships/{relations}",
    *     summary="Create TourGuides relation object",
    *     tags={"TourGuidesController"},
    *     @OA\Parameter(
    *         in="path",
    *         name="id",
    *         required=true,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Parameter(
    *         in="path",
    *         name="relations",
    *         required=true,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Response(
    *         response="201",
    *         description="successful operation",
    *         @OA\MediaType(
    *             mediaType="application/vnd.api+json"
    *         ),
    *     ),
    * )
    */

    /**
    * @OA\Patch(
    *     path="/v1/tour_guides/{id}/relationships/{relations}",
    *     summary="Update TourGuides relation object",
    *     tags={"TourGuidesController"},
    *     @OA\Parameter(
    *         in="path",
    *         name="id",
    *         required=true,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Parameter(
    *         in="path",
    *         name="relations",
    *         required=true,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Response(
    *         response="200",
    *         description="successful operation",
    *         @OA\MediaType(
    *             mediaType="application/vnd.api+json"
    *         ),
    *     ),
    * )
    */

    /**
    * @OA\Delete(
    *     path="/v1/tour_guides/{id}/relationships/{relations}",
    *     summary="Delete TourGuides relation object",
    *     tags={"TourGuidesController"},
    *     @OA\Parameter(
    *         in="path",
    *         name="id",
    *         required=true,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Parameter(
    *         in="path",
    *         name="relations",
    *         required=true,
    *         @OA\Schema(
    *             type="string",
    *         ),
    *     ),
    *     @OA\Response(
    *         response="204",
    *         description="successful operation",
    *         @OA\MediaType(
    *             mediaType="application/vnd.api+json"
    *         ),
    *     ),
    * )
    */

    /**
    * @OA\Post(
    *     path="/v1/tour_guides/bulk",
    *     summary="Create TourGuides bulk",
    *     tags={"TourGuidesController"},
    *     @OA\Response(
    *         response="201",
    *         description="successful operation",
    *         @OA\MediaType(
    *             mediaType="application/vnd.api+json"
    *         ),
    *     ),
    * )
    */

    /**
    * @OA\Patch(
    *     path="/v1/tour_guides/bulk",
    *     summary="Update TourGuides bulk",
    *     tags={"TourGuidesController"},
    *     @OA\Response(
    *         response="200",
    *         description="successful operation",
    *         @OA\MediaType(
    *             mediaType="application/vnd.api+json"
    *         ),
    *     ),
    * )
    */

    /**
    * @OA\Delete(
    *     path="/v1/tour_guides/bulk",
    *     summary="Delete TourGuides bulk",
    *     tags={"TourGuidesController"},
    *     @OA\Response(
    *         response="204",
    *         description="successful operation",
    *         @OA\MediaType(
    *             mediaType="application/vnd.api+json"
    *         ),
    *     ),
    * )
    */

    // <<<methods<<<
}
