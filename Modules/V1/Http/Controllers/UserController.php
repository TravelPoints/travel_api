<?php
namespace Modules\V1\Http\Controllers;

class UserController extends DefaultController 
{
    // >>>props>>>
    // <<<props<<<
    // >>>methods>>>
    /**
    * @OA\Get(
    *     path="/v1/user",
    *     summary="Get Users ",
    *     tags={"UserController"},
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
    *     path="/v1/user/{id}",
    *     summary="Get User",
    *     tags={"UserController"},
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
    *     path="/v1/user",
    *     summary="Create User",
    *     tags={"UserController"},
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
    *     path="/v1/user/{id}",
    *     summary="Update User",
    *     tags={"UserController"},
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
    *     path="/v1/user/{id}",
    *     summary="Delete User",
    *     tags={"UserController"},
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
    *     path="/v1/user/{id}/{related}",
    *     summary="Get User related objects",
    *     tags={"UserController"},
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
    *     path="/v1/user/{id}/relationships/{relations}",
    *     summary="Get User relations objects",
    *     tags={"UserController"},
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
    *     path="/v1/user/{id}/relationships/{relations}",
    *     summary="Create User relation object",
    *     tags={"UserController"},
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
    *     path="/v1/user/{id}/relationships/{relations}",
    *     summary="Update User relation object",
    *     tags={"UserController"},
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
    *     path="/v1/user/{id}/relationships/{relations}",
    *     summary="Delete User relation object",
    *     tags={"UserController"},
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
    *     path="/v1/user/bulk",
    *     summary="Create User bulk",
    *     tags={"UserController"},
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
    *     path="/v1/user/bulk",
    *     summary="Update User bulk",
    *     tags={"UserController"},
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
    *     path="/v1/user/bulk",
    *     summary="Delete User bulk",
    *     tags={"UserController"},
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
