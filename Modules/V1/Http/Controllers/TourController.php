<?php
namespace Modules\V1\Http\Controllers;

class TourController extends DefaultController 
{
    // >>>props>>>
    // <<<props<<<
    // >>>methods>>>
    /**
    * @OA\Get(
    *     path="/v1/tour",
    *     summary="Get Tours ",
    *     tags={"TourController"},
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
    *     path="/v1/tour/{id}",
    *     summary="Get Tour",
    *     tags={"TourController"},
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
    *     path="/v1/tour",
    *     summary="Create Tour",
    *     tags={"TourController"},
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
    *     path="/v1/tour/{id}",
    *     summary="Update Tour",
    *     tags={"TourController"},
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
    *     path="/v1/tour/{id}",
    *     summary="Delete Tour",
    *     tags={"TourController"},
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
    *     path="/v1/tour/{id}/{related}",
    *     summary="Get Tour related objects",
    *     tags={"TourController"},
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
    *     path="/v1/tour/{id}/relationships/{relations}",
    *     summary="Get Tour relations objects",
    *     tags={"TourController"},
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
    *     path="/v1/tour/{id}/relationships/{relations}",
    *     summary="Create Tour relation object",
    *     tags={"TourController"},
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
    *     path="/v1/tour/{id}/relationships/{relations}",
    *     summary="Update Tour relation object",
    *     tags={"TourController"},
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
    *     path="/v1/tour/{id}/relationships/{relations}",
    *     summary="Delete Tour relation object",
    *     tags={"TourController"},
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
    *     path="/v1/tour/bulk",
    *     summary="Create Tour bulk",
    *     tags={"TourController"},
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
    *     path="/v1/tour/bulk",
    *     summary="Update Tour bulk",
    *     tags={"TourController"},
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
    *     path="/v1/tour/bulk",
    *     summary="Delete Tour bulk",
    *     tags={"TourController"},
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
